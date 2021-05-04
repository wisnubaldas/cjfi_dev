<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;
class Motif extends Model
{
    use HasFactory;
    protected $fillable = ['nama'];
    public function brand()
    {
        return $this->hasMany(Brand::class,'motifs_id','id');
    }
}
