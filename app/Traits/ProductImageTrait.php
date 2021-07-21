<?php
namespace App\Traits;
/**
 * 
 */
use App\Traits\ProductTrait;
use App\Models\Backend\Product;

trait ProductImageTrait
{
    public static function getProductByMotif($motif_id)
    {
        return Product::where('motif_id',$motif_id)->first();
    }
}
