<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandLogo extends Model
{
    use HasFactory;
    public function brands()
    {
        return $this->hasMany(\App\Models\Brand::class, 'brand_logos_id','id');
    }
    public function motifs()
    {
        return $this->hasMany(\App\Models\Motif::class);
    }
}
