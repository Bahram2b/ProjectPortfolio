<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PhotoController extends Controller
{

    public function index()
    {
        $photo=Photo::latest()->paginate(6);
        return view('Admin.Photo.index',compact('photo'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $photo= new Photo();
        $photo->description=$request->description;
        $photo->title=$request->title;
        $photo->category=$request->category;
        $file=$request->file('image');
        if (!empty($file)) {
            $image = time() .$file->getClientOriginalName();
            $thumbnail = "thumbnail".$image;

            Image::make($file)->fit(300,180)->save('backend/img/photos/thumbnails/'.$thumbnail);
//            Image::make($file)->fit(800, 600, function ($constraint) {
//                $constraint->upsize()->save('backend/img/photos/thumbnails/'.$thumbnail);
//            });
            $file->move("backend/img/photos/originals/", $image);
            $photo->image = $image;

            $photo->thumbnail = $thumbnail;

        }
        $photo->save();
        $notification=array(
            'message'=>'عکس اضافه شد',
            'alert-type'=>'success'
        );
//        $photo=Slider::paginate(6);
        return redirect()->back()->with($notification);
//        return  view('Admin.slider.index',compact('slider'));
    }


    public function show(Photo $photo)
    {
        //
    }


    public function edit(Photo $photo)
    {
        //
    }


    public function update(Request $request, Photo $photo)
    {
        //
    }


    public function destroy($id)
    {
        {
            $photos=Photo::findorfail($id);
            $pathdelete="backend/img/photos/originals/".$photos->image;
            unlink($pathdelete);
            Photo::destroy($id);
            $notification=array(
                'message'=>'عکس حذف شد',
                'alert-type'=>'info'
            );
//        $photo=Slider::paginate(6);
            return redirect()->back()->with($notification);
        }
    }
}
