<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ukuran;
use App\Helpers\UploadFile;
use App\Models\Backend\Slide;
use App\Models\BrandLogo;
use Image;
use Yajra\Datatables\Datatables;
class SliderController extends Controller
{
    public function index()
    {
        $size = Ukuran::all();
        return view('backend.slider',compact('size'));
    }
    public function save(Request $request)
    {
        // return $request->all();
        if($request->file())
        {
            $file = $request->file('image');
            $image = Image::make($file->getRealPath()); // not sure about needing "getRealPath()" but hey, it works
            $imageName = UploadFile::make_name().'.'.explode('/',$image->mime())[1];
            $image->resize(940, 420)
                    ->save(base_path('public/img/slider/'.$imageName));
            $slide = new Slide;
            $slide->name = $request->name;
            $slide->desc = $request->desc;
            $slide->size = $request->ukuran;
            $slide->brand = $request->brand;
            $slide->link = $request->link;
            $slide->image = $imageName;
            $slide->status = true;
            $slide->save();
        }
        return back();
    }
    public function getBasicData()
    {
        return Datatables::of(Slide::query())->make();
    }
}
