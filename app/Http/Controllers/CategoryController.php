<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
class CategoryController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {


        $category = Category::paginate(6);
        return view('admin.category.Index',compact('category'));

    }    public function dash()
    {

        return view('admin.index');

    }
        public function Logout()
    {

        Auth::logout();
        $notification=array(
            'messege'=>'Successfully Logout',
            'alert-type'=>'success'
        );
        return Redirect()->route('login')->with($notification);

    }
    public function AddCat(Request $request){

        $validateData = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ],
            [
                'category_name.required' => 'نام دسته بندی جدید را وارد کنید'
            ]
        );

        //$data=array();
        //$data['category_name']=$request->category_name;
        //DB::table('categories')->insert($data);


        $category = new Category();
        $category->category_name =$request->category_name;
        $category->user_id =Auth::user()->id;
//        $category->created_at =Carbon::now;
        $category->save();
        $notification=array(
            'message'=>'دسته بندی جدید اضافه شد',
            'alert-type'=>'success'
        );

        return Redirect()->back()->with($notification);
//        return Redirect()->back()->with('success','اضاف شد');

    }
    public function Deletecategory($id){
        Category::destroy($id);
        $notification=array(
            'message'=>'دسته بندی حذف شد',
            'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
    }



    public function Editcategory($id){
        $category = Category::findOrNew($id);
        return view('Admin.Category.category_edit',compact('category'));
    }
    public function Updatecategory(Request $request, $id){
        $validateData = $request->validate([
            'category_name' => 'required|max:255',
        ]);

        $data=Category::findOrNew($id);
        $data->category_name=$request->category_name;
        $data->save();
        $notification=array(
                'message'=>'دسته بندی ویرایش شد',
                'alert-type'=>'success'
            );
            return Redirect()->route('cat_index')->with($notification);
//        $update=DB::table('categories')->where('id',$id)->update($data);
//        if ($update) {
//            $notification=array(
//                'messege'=>'Category Updated Successfully',
//                'alert-type'=>'success'
//            );
//            return Redirect()->route('categories')->with($notification);
//        }else{
//            $notification=array(
//                'messege'=>'Nothing To Update',
//                'alert-type'=>'error'
//            );
//            return Redirect()->route('categories')->with($notification);



    }
}
