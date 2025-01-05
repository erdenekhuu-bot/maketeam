<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
     protected $fillable = [
        'profile_id',
        'company',
        'role',
        'started',
        'ended',
        'is_current',
     ];

     public function profile(): BelongsTo 
     {
         return $this->belongsTo(Profile::class);
     }
}
