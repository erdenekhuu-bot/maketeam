<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    public function profile():BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }
}
