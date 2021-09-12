<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $coupon = Coupon::all();
        return view('Admin.Coupon.coupon_index',compact('coupon'));
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        $data = new Coupon();
        $data->coupon = $request->coupon;
        $data->discount = $request->discount;
        $data->save();
        $notification=array(
            'messege'=>'کد تخفیف اضافه شد',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $Coupon = Coupon::findorfail($id);

        return view('Admin.Coupon.coupon_edit',compact('Coupon'));
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'coupon' => 'required',
            'discount' => 'required',

        ]);
        $Coupon= Coupon::findorfail($id);
        $Coupon->coupon=$request->coupon;
        $Coupon->discount=$request->discount;
        $Coupon->save();
        $notification=array(
            'message'=>'کد تخفیف ویرایش  شد',
            'alert-type'=>'success'
        );
        return Redirect()->route('Coupon_index')->with($notification);
    }


    public function destroy($id)
    {
        Coupon::destroy($id);
        $notification=array(
            'message'=>'کد تخفیف حذف شد',
            'alert-type'=>'warning'
        );
        return Redirect()->back()->with($notification);
    }
}
