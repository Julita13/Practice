<?php

namespace App\Models;

use App\Models\Actor;
use App\Models\Genre;
use App\Models\Country;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title',
        'release_date',
        'rating',
        'runtime',
        'image',
        'description',
    ];

    // Always query with these relations: 
    public $with = ['genres', 'countries', 'languages', 'actors'];

    public function genres():BelongsToMany{
        return $this->belongsToMany(Genre::class);
    }

    public function languages():BelongsToMany{
        return $this->belongsToMany(Language::class);
    }

    public function countries():BelongsToMany{
        return $this->belongsToMany(Country::class);
    }

    public function actors():BelongsToMany{
        return $this->belongsToMany(Actor::class);
    }

    public static function imageUpload(Request $request){
        // dd($request->files);
        $paths = [];
        foreach($request->all()['images'] as $image){
            $paths[] = $image->storeAs(
                'public/images', $image->getClientOriginalName()
            );
        }
        
    }
}

