<?php

namespace App\Models;

use App\Services\Model;

class Movie extends Model
{
    protected string $table = 'movies';

    // Columns that can be inserted or updated
    protected array $fillable = [
        'title',
        'release_date',
        'rating',
        'runtime',
        'image',
        'description',
    ];
}


?>