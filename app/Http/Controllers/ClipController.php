<?php

namespace App\Http\Controllers;

use App\Models\Clip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ClipController extends Controller
{

    public function index()
    {
        $clip=Clip::latest()->paginate(11);
        return view('Admin.Clip.index',compact('clip'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $clip= new Clip();
        $clip->description=$request->description;
        $clip->title=$request->title;
        $clip->link=$request->link;
        $file=$request->file('thumbnail');
        if (!empty($file)) {
            $thumbnail = time() .$file->getClientOriginalName();
            $thumbnail = "thumbnail".$thumbnail;

            Image::make($file)->fit(300,180)->save('backend/img/clips/thumbnails/'.$thumbnail);
//            Image::make($file)->fit(800, 600, function ($constraint) {
//                $constraint->upsize()->save('backend/img/clips/thumbnails/'.$thumbnail);
//            });

            $clip->thumbnail = $thumbnail;

        }
        $clip->save();
        $notification=array(
            'message'=>'ویدیو اضافه شد',
            'alert-type'=>'success'
        );
//        $clip=Slider::paginate(6);
        return redirect()->back()->with($notification);
//        return  view('Admin.slider.index',compact('slider'));
    }


    public function show(Clip $clip)
    {
        //
    }

    public function edit(Clip $clip)
    {
        //
    }

    public function update(Request $request, $id)
    {

        $data=Clip::findOrNew($id);
        $data->category=$request->category;
        $data->title=$request->title;
        $data->description=$request->description;
        $data->link=$request->link;
        $data->save();
        $notification=array(
            'message'=>'مشخصات ویدیو ویرایش شد',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function destroy($id)
    {
        {
            $clips=Clip::findorfail($id);
            $pathdelete="backend/img/clips/thumbnails/".$clips->thumbnail;
            unlink($pathdelete);
            Clip::destroy($id);
            $notification=array(
                'message'=>'ویریو حذف شد',
                'alert-type'=>'info'
            );
//        $clip=Slider::paginate(6);
            return redirect()->back()->with($notification);
        }
    }
}
