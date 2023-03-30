<?php

namespace App\Models;

use App\Models\Language;
use App\Models\Operator;
use Illuminate\Http\Request;
use App\Models\DestinationImage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Destination extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'destination',
        'description',
        'capital',
        'population',
        'currency',
        'image',
    ];

    public $with = ['operators', 'languages', 'images'];
    
    public function operators(): BelongsToMany
    {
        return $this->belongsToMany(Operator::class);
    }
    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class);
    }
    public function images(): HasMany
    {
        return $this->hasMany(DestinationImage::class);
    }

    
    public static function customCreate(Request $request):self  {
        
        return DB::transaction(function () use ($request) {
            $image = $request->file('image');
            $inputs = $request->input();
            $inputs['image'] = $image?->getClientOriginalName() ?? 'noimage.jpg';

            $destination = self::create($inputs);
            $destination->syncAll($request);

            if ($images = $request->file('images')) {
                $images = $destination->uploadImages($images);
                $destination->insertImages($images);
            }

            if($image = $request->file('image')) {
                $images = $destination->uploadImages([$image]);
            }

            return $destination;
        });
    }


    public function customUpdate(Request $request): self
    {
        DB::transaction(function () use ($request) {
            //Old images
            $oldImages = $request->input('old_images') ?? [];
                //Detach old images
            DestinationImage::where('destination_id', $this->id)->whereNotIn('name', $oldImages)->forceDelete();


            //Upload and insert multiple images
                if ($images = $request->file('images')) {
                    $images = $this->uploadImages($images);
                    $this->insertImages($images);
                }

                //Upload Cover image
                $inputs = $request->input();
                if ($image = $request->file('image')){
                    $images = $this->uploadImages([$image]);
                    
                }

                $inputs['image'] = $request->file('image')?->getClientOriginalName() ?? $request->get('old_cover_image') ?? 'noimage.jpg';
                $this->syncAll($request)->fill($inputs)->save();
        });

        return $this;
    }

    public function insertImages($images):self {
        collect($images)->each(function (string $item, int $key) {
            DestinationImage::updateOrCreate([
                'name' => $item,
                'destination_id' => $this->id
            ]);
        });

        return $this;
    }

    public function syncAll(Request $request): self
    {
        $this->operators()->sync($request->get('operators'));
        $this->languages()->sync($request->get('languages'));

        return $this;
    }

    public function uploadImages(array $images): array
    {
        $paths = [];
        foreach ($images as $image) {

            if (!$image instanceof UploadedFile) {
                throw new \Exception('Instance of Illuminate\Http\UploadedFile file expected');
            }

            $imageName = $image->getClientOriginalName();
            $paths[] = $imageName;

            if (Storage::exists("public/images/$imageName")) {
                continue;
            }

            $image->storeAs(
                'public/images',
                $image->getClientOriginalName()
            );
        }

        return $paths;
    }
}
