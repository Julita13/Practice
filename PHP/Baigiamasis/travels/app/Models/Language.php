<?php

namespace App\Models;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Language extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'language', 
        'abbr', 
        'language_family',
    ];

    // public $with = ['destinations'];

    public function destinations():BelongsToMany{
        return $this->belongsToMany(Destination::class);
    }
}
