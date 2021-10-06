<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusBoking extends Model
{
    use HasFactory;
    public function user_boking()
    {
        return $this->hasMany(UserBoking::class,'status_boking_id','id');
    }
}