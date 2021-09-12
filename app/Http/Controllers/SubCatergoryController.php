<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCatergoryController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $category =DB::table('categories')->get();
        $subcat = DB::table('sub_categories')
            ->join('categories','sub_categories.category_id','categories.id')
            ->select('sub_categories.*','categories.category_name')
            ->get();
        return view('Admin.Category.sub_category_index',compact('category','subcat'));
    }





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
        $validateData = $request->validate([
            'category_id' => 'required',
            'subcategory_name' => 'required',

        ]);
        $subcat= new SubCategory();
        $subcat->category_id=$request->category_id;
        $subcat->subcategory_name=$request->subcategory_name;
        $subcat->save();
        $notification=array(
            'message'=>'زیر دسته بندی اضافه شد',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcat = SubCategory::findorfail($id);
        $category = Category::all();
        return view('Admin.Category.sub_category_edit',compact('subcat','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'category_id' => 'required',
            'subcategory_name' => 'required',

        ]);
        $subcat= SubCategory::findorfail($id);
        $subcat->category_id=$request->category_id;
        $subcat->subcategory_name=$request->subcategory_name;
        $subcat->save();
        $notification=array(
            'message'=>'زیر دسته بندی ویرایش  شد',
            'alert-type'=>'success'
        );
        return Redirect()->route('sub_cat_index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      SubCategory::destroy($id);
        $notification=array(
            'message'=>'زیر دسته بندی حذف شد',
            'alert-type'=>'warning'
        );
        return Redirect()->back()->with($notification);
    }
}
