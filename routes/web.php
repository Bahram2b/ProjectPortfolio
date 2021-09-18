<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCatergoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Photo;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $portraits=Photo::where('category',"Portrait")->get();
    $manipulation=Photo::where('category',"Photo Manipulation")->get();
    $product=Photo::where('category',"Product Photography")->get();

//    $product=Photo::where('category',27)->where('status',1)->get();
//    $manipulation=Photo::where('category',1)->where('status',1)->get();


    return view('home',compact('portraits','product','manipulation'));


});
//Route::get('/olddashboard', function () {
//    return view('dashboard');
//});
Route::get('/landing', function () {
    return view('welcome');
});
Route::get('/category/logout', [CategoryController::class,'Logout'])->name('user.logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

        $user = User::find(Auth::user()->id);

            return view('admin.index',compact('user'));


})->name('dashboard');
// Admin routes
Route::middleware(['auth:sanctum', 'verified'])->get('/photo', [PhotoController::class,'index'])->name('Photo.index');
Route::post('/photo/Add', [PhotoController::class,'store'])->name('Photo.Store');
Route::middleware(['auth:sanctum', 'verified'])->get('delete/photo/{id}', [PhotoController::class,'destroy'])->name('Photo.Destroy');
//Admin Profile
Route::get('/Admin/ChangePassword/', [ProfileController::class,'AdminChangePass'])->name('admin.pass');
Route::get('/Admin/ChangeProfile/', [ProfileController::class,'AdminChangeProfile'])->name('admin.profile');
Route::post('/Admin/UpdatePassword/', [ProfileController::class,'AdminPassUpdate'])->name('password.update');
Route::post('/Admin/UpdateProfile/', [ProfileController::class,'AdminProfileUpdate'])->name('profile.update');
//Categories
Route::get('/category/index', [CategoryController::class,'index'])->name('cat_index');
Route::get('/category/dash', [CategoryController::class,'dash'])->name('dash_index');
Route::post('/category/Add', [CategoryController::class,'AddCat'])->name('store.category');
Route::get('edit/category/{id}', [CategoryController::class,'Editcategory']);
Route::post('update/category/{id}', [CategoryController::class,'Updatecategory']);
Route::get('delete/category/{id}',  [CategoryController::class,'Deletecategory']);
//SubCategories
Route::get('/category/SubCatIndex', [SubCatergoryController::class,'index'])->name('sub_cat_index');
Route::post('/category/SubCatStore', [SubCatergoryController::class,'store'])->name('SubCategory.Store');
Route::get('delete/SubCategory/{id}',  [SubCatergoryController::class,'destroy']);
Route::get('Edit/SubCategory/{id}',  [SubCatergoryController::class,'edit']);
Route::post('Update/SubCategory/{id}',  [SubCatergoryController::class,'update']);
//Coupons
Route::get('/Coupon/Index', [CouponController::class,'index'])->name('Coupon_index');
Route::post('/Coupon/ُStore', [CouponController::class,'store'])->name('Coupon_Store');
Route::get('Delete/Coupon/{id}',  [CouponController::class,'destroy']);
Route::get('Edit/Coupon/{id}',  [CouponController::class,'edit']);
Route::post('Update/Coupon/{id}',  [CouponController::class,'update']);
// For Show Sub category with ajax
Route::get('get/subcategory/{category_id}', [ProductController::class,'GetSubcat']);
//Products
Route::get('Product/index',  [ProductController::class,'index'])->name('Product.Index');
Route::get('Product/add', [ProductController::class,'create'])->name('Product.Create');
Route::post('/Product/ُStore', [ProductController::class,'store'])->name('Product.Store');
Route::get('active/product/{id}',  [ProductController::class,'active']);
Route::get('inactive/product/{id}',  [ProductController::class,'inactive']);
Route::get('delete/product/{id}',  [ProductController::class,'destroy']);
Route::get('view/product/{id}',  [ProductController::class,'show']);
Route::get('edit/product/{id}',  [ProductController::class,'edit']);
Route::post('update/product/withoutphoto/{id}',  [ProductController::class,'UpdateProductWithoutPhoto']);
Route::post('update/product/photo/{id}',  [ProductController::class,'UpdateProductPhoto']);
