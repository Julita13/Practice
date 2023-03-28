<?php

namespace App\Models;

use App\Models\Language;
use App\Models\Operator;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
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

    public $with = ['operators', 'languages'];
    
    public function operators(): BelongsToMany
    {
        return $this->belongsToMany(Operator::class);
    }
    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class);
    }
}
