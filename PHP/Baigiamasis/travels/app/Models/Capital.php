<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Capital extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'capital',
        'population',
        'must_visit',
        'time_zone',
    ];
}
