<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    protected $primaryKey = 'profile_id';

    protected $fillable = [
        'users_id',
        'fullname',
        'profile',
        'about',
        'linkedin',
        'twitter',
        'facebook',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
