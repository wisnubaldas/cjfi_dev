<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBoking extends Model
{
    use HasFactory;
    public function status_boking()
    {
        return $this->hasOne(StatusBoking::class,'id','status_boking_id');
    }
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');

    }
}