<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'description',
        'tags',
        'categories',
        'img',
        'date_publish',
    ];

    protected $casts = [
        'date_publish' => 'date',
    ];
}
