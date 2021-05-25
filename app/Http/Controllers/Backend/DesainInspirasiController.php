<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\DesainInspirasi;

class DesainInspirasiController extends Controller
{
    use DesainInspirasi;
    public function index()
    {
        $all_design = $this->all_desain();
        return view('backend.desain-inspirasi',compact('all_design'));
    }
    
    public function create(Request $request)
    {
        if($request->file())
        {
            $image_name = $this->upload_image($request->file('image'),'public/img/desain_inspirasi/');
            $this->create_desain([
                'name'=>$request->name,
                'image'=>'/img/desain_inspirasi/'.$image_name,
                'image_icon'=>$image_name,
                'status'=>$request->status,
                'void'=>1
            ]);
        }
        return back();
    }
}
