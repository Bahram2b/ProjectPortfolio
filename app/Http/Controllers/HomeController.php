<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Faker\Provider\Image;
class HomeController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }
 public function HomeSlider()
 {

     $slider=Slider::paginate(6);
     return view('Admin.slider.index',compact('slider'));
 }
    public function SliderStore(Request $request)
    {
        $slider= new Slider();
        $slider->description=$request->description;
        $slider->title=$request->title;
        $file=$request->file('image');
        if (!empty($file)) {
            $image = time() .$file->getClientOriginalName();
            \Intervention\Image\Facades\Image::make($file)->resize(1050,500)->save('backend/img/sliders/'.$image);
//                $image = time() . $image;
//            $file->move("backend/img/sliders", $image);
            $slider->image = $image;
        }
        $slider->save();
        $notification=array(
            'message'=>'اسلاید اضافه شد',
            'alert-type'=>'success'
        );
        $slider=Slider::paginate(6);
        return redirect()->back()->with($notification);
//        return  view('Admin.slider.index',compact('slider'));
    }
    public function SliderDestroy($id)

    {
        $sliders=Slider::findorfail($id);
        $pathdelete="backend/img/sliders/".$sliders->image;
        unlink($pathdelete);
        Slider::destroy($id);
        session()->flash("Sliderdelete","اسلاید مورد نظر حذف شد");
        return redirect()->route('home.slider');
    }
}
