<?php

use App\Models\Product;
use App\Models\ProductColour;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ItemController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DiscountCouponController;
use App\Http\Controllers\Dashbord\DashbordController;
use App\Http\Controllers\Backend\ProductSizeController;
use App\Http\Controllers\Backend\SubCategorieController;
use App\Http\Controllers\Backend\ProductcolourController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\ShippingController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\userDashboard\UserDashboardController;
use App\Models\DiscountCoupon;

// Route::get('/', function () {
//     return view('frontend.contant.homepage');
// });


Route::get('/',[HomePageController::class,'homePage'])->name('frontend.contant.homepage');




// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () { 


    Route::prefix('/dashboard')->controller(DashbordController::class)->name('dashbord.')->group(function(){

        Route::get('/admin',[DashbordController::class,'dashboard'])->name('admin');
    
    
    
    
    
    
    
    });
    


 });


//  USER DASHBOAR

Route::middleware('auth')->prefix('/dashboard')->controller(UserDashboardController::class)->name('userdashboard.')->group(function(){

    Route::get('/user','userDashboard')->name('user');

});





Route::get('/category',[CategoryController::class,'index'])->name('category.index');
Route::get('/category-create',[CategoryController::class,'create'])->name('category.create');
Route::get('/category-store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category-edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::delete('/category-delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');








Route::get('/subcategorie',[SubCategorieController::class,'index'])->name('Subcategorie.index');
// Route::post('/subcategorie-create',[SubCategorieController::class,'create'])->name('Subcategorie.create');
Route::get('/subcategorie-story',[SubCategorieController::class,'story'])->name('Subcategorie.story');
Route::get('/subcategorie-edit/{id}',[SubCategorieController::class,'edit'])->name('Subcategorie.edit');
Route::delete('/subcategorie-delete/{id}',[SubCategorieController::class,'deleted'])->name('Subcategorie.delete');
Route::get('/get-all-subcategories',[SubCategorieController::class,'getSubcategories'])->name('Subcategorie.get');



Route::prefix('/backend/brand')->controller(BrandController::class)->name('Brand.')->group(
    function(){
        Route::get('/' ,'index')->name('index');
        Route::get('/store' ,'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::delete('/delete/{id}','delete')->name('delete');
   

    }
);




Route::prefix('/backend/item')->controller(ItemController::class)->name('Item.')->group(
    function(){
        Route::get('/' ,'index')->name('index');
        Route::get('/store' ,'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::delete('/delete/{id}','delete')->name('delete');

    }
);





 /////////////////////product Route

Route::prefix('/backend/productSize')->controller(ProductSizeController::class)->name('ProductSize.')->group(
    function(){
        Route::get('/' ,'index')->name('index');
        Route::get('/store' ,'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::delete('/delete/{id}','delete')->name('delete');

    }
);


Route::prefix('/backend/productcolour')->controller(ProductColourController::class)->name('ProductColour.')->group(
    function(){
        Route::get('/' ,'index')->name('index');
        Route::get('/store' ,'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::delete('/delete/{id}','delete')->name('delete');

    }
);


Route::prefix('/backend/product')->controller(ProductController::class)->name('Product.')->group(
    function(){
        Route::get('/' ,'index')->name('index');
        Route::get('/store' ,'store')->name('store');
        // Route::get('/edit/{id}','edit')->name('edit');
        // Route::delete('/delete/{id}','delete')->name('delete');
        // Route::get('/relatedproduct' ,'relatedproduct')->name('relatedproduct');


    }
);
Route::get('/relatedproduct',[ProductController::class,'relatedproduct'])->name('Product.related');


Route::prefix('/backend/discount')->controller(DiscountCouponController::class)->name('Discount.')->group(
    function(){
        Route::get('/' ,'index')->name('index');
        Route::get('/store' ,'store')->name('store');
        // Route::get('/edit/{id}','edit')->name('edit');
        // Route::delete('/delete/{id}','delete')->name('delete');
        


    }
);



////////////////route shipping

Route::prefix('/backend/shipping')->controller(ShippingController::class)->name('Shipping.')->group(
    function(){
        Route::get('/' ,'index')->name('index');
        Route::get('/store' ,'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::delete('/delete/{id}','delete')->name('delete');
        


    }
);


Route::get('/profile',[ProfileController::class,'showProfile'])->name('profile');
Route::put('/profile-update',[ProfileController::class,'updateProfile'])->name('profile.update');
Route::put('/password-update',[ProfileController::class,'updatepassword'])->name('profile.password.update');