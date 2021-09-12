<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }
    public function AdminChangePass()
    {
        return view('Admin.profile.change_password');
    }   public function AdminChangeProfile()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            if ($user) {
                return view('Admin.profile.profile_info',compact('user'));
            }
        }

    }

    public function AdminPassUpdate(request $request)
    {
        $validatedData = $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed']

        ]);
        $HashedPass = Auth::user()->password;
        if (Hash::check($request->current_password, $HashedPass)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            return redirect()->route('login')->with('succses', 'رمز عبور جدید ذخیره شد');
        } else {
            return redirect()->back()->with('error', 'رمز عبور اشتباه است');
        }

//       return view('Admin.profile.change_password');
    }

    public function AdminProfileUpdate(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if($user){
            $user->name=$request->name;
            $user->email=$request->email;
            if ($request->file('profile_photo_path')) {
                $file=$request->file('profile_photo_path');
                @unlink(public_path('upload/user_images/'.$user->profile_photo_path));
                $filename= time().$file->getClientOriginalName();
                $file->move(public_path('upload/user_images/'),$filename);
                $user->profile_photo_path=$filename;
            }
            $user->save();
            $notification=array(
                'messege'=>'اطلاعات بروزرسانی شد',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);

        }
        else{
            return redirect()->back();
        }
    }
}
