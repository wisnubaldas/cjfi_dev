<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    public function ukuran()
    {
        return $this->hasOne(\App\Models\Ukuran::class,'id','ukurans_id');
    }
    public function tipe()
    {
        return $this->hasOne(\App\Models\Tipe::class,'id','types_id');
    }
    public function motif()
    {
        return $this->hasOne(\App\Models\Motif::class,'id','motifs_id');
    }
    public function image_asset()
    {
        return $this->hasMany(\App\Models\ImageAsset::class, 'brands_id');
    }
}