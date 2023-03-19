<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;
    protected $guarded = [];

    function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    function back_user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
