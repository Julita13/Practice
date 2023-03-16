<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Actor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'first_name', 
        'last_name', 
        'date_of_birth',
    ];

    // public $with = ['movies'];

    public function movies():BelongsToMany{
        return $this->belongsToMany(Movie::class);
    }
}
