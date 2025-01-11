<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'web',
        'city',
        'logo',
        'cover',
        'gallery',
        'about',
        'description',
        'linkedin',
        'twitter',
        'facebook',
    ];

    protected $casts = [
        'city' => 'string',
    ];
}
