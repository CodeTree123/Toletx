<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
class Exibution_Center extends Model
{
    use HasFactory;
    use SoftDeletes;
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
