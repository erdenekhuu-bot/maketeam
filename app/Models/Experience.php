<?php

namespace App\Models;

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
}
