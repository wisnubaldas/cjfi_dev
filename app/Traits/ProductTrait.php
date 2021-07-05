<?php

namespace App\Traits;
use App\Models\Backend\Product;
use Yajra\Datatables\Datatables;
use Image;
use Illuminate\Support\Str;
trait ProductTrait
{
    public static function table()
    {
        $query = BrandModel::select('brands.*');
        return Datatables::of($query)
                // return  Datatables::of(Brand::with('brand_logo')->query())
                ->addColumn('action', function(BrandModel $brand) {
                    return "
                    <div class='btn-group'>
                    <a class='btn btn-warning btn-xs' href='/merek/edit/{$brand->id}'>Edit</a>
                    <a class='btn btn-danger btn-xs delete-data' href='javascript:;' data-link='/merek/destroy/{$brand->id}'>Delete</a>
                    </div>";
                })
                ->editColumn('logo',function($tbl){
                    // return $tbl->updated_at->format('d M Y - H:i:s');
                    return '<img src="'.url($tbl->logo).'" alt="" srcset="" width="100%">';

                })
                ->rawColumns(['action','logo'])
                ->make(true);
    }
    
}
