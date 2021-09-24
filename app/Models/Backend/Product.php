<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','code','brand_id','motif_id','tipe_id','ukuran_id','warna_id','surface','depth','weight','desc'];
    public function brand()
    {
        return $this->hasOne(\App\Models\Brand::class,'id','brand_id');
    }
    public function getTipeIdAttribute($value)
    {
        return json_decode($value,true);
    }
    public function getWarnaIdAttribute($value)
    {
        return json_decode($value,true);
    }
    public function image_product()
    {
        return $this->hasMany(ImageProduct::class,'product_id','id');
    }
}
