<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photo=Photo::latest()->paginate(6);
        return view('Admin.Photo.index',compact('photo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo= new Photo();
        $photo->description=$request->description;
        $photo->title=$request->title;
        $photo->category=$request->category;
        $file=$request->file('image');
        if (!empty($file)) {
            $image = time() .$file->getClientOriginalName();
//            \Intervention\Image\Facades\Image::make($file)->resize(1050,500)->save('backend/img/photos/'.$image);
//                $image = time() . $image;
            $file->move("backend/img/photos/", $image);
            $photo->image = $image;
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $photos=Photo::findorfail($id);
            $pathdelete="backend/img/photos/".$photos->image;
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
