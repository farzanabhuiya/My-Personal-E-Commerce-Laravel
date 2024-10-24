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
use App\Http\Controllers\Frontend\BrandAllController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckOutController;
use App\Http\Controllers\Frontend\CommentController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\ItemAllController;
use App\Http\Controllers\Frontend\ProductSubcategoryController;
use App\Http\Controllers\Frontend\RattingController;
use App\Http\Controllers\Frontend\SinglePageController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\userDashboard\UserDashboardController;
use App\Models\DiscountCoupon;

// Route::get('/', function () {
//     return view('frontend.contant.homepage');
// });



Route::get('/',[HomePageController::class,'homePage'])->name('frontend.contant.homepage');

              ///productSubcategory route
 Route::get('productSubcategory/{slug}',[ProductSubcategoryController::class,'productSubcategory'])->name('frontend.contant.ProductSubcategory');
            ////BranddAll route
 Route::get('BranddAll/{slug}',[BrandAllController::class,'Branddall'])->name('frontend.contant.BranddAll');
 Route::get('Item/{slug}',[ItemAllController::class,'Itemall'])->name('frontend.contant.ItemdAll');
Route::get('singlePage/{slug}',[SinglePageController::class,'singlePage'])->name('frontend.contant.singlePage');
Route::post('comment',[CommentController::class,'commentStore'])->name('frontend.contant.commentStore');
Route::post('/singlePage/{product}/ratting', [RattingController::class, 'store'])->name('frontend.contant.rattingStore');

Route::get('/cart', [CartController::class, 'cart'])->name('frontend.contant.Cart');
Route::post('/AddToCart', [CartController::class, 'AddToCart'])->name('frontend.contant.AddToCart');
Route::post('/UpdateCart', [CartController::class, 'UpdateCart'])->name('frontend.contant.UpdateCart');
Route::delete('/UpdateCart/{rowId}', [CartController::class, 'delete'])->name('frontend.contant.deleted');


Route::get('/checkout',[CheckOutController::class,'checkout'])->name('front.contant.checkout');
Route::post('/processCheckout',[CheckOutController::class,'processCheckout'])->name('front.contant.processCheckout');
Route::get('/thanks/{orderId}',[CheckOutController::class,'thanks'])->name('front.contant.thanks');

Route::get('/wishlist', [WishlistController::class, 'index'])->name('front.contant.Wishlist');
Route::post('/wishlist/add', [WishlistController::class, 'WishlistAdd'])->name('front.contant.WishlistAdd');
Route::post('/wishlist/remove', [WishlistController::class, 'removeWishlist'])->name('front.contant.removeWishlist');



Route::prefix('/userProfile')->controller(UserProfileController::class)->name('frontend.')->group(
    function(){
        Route::get('/' ,'index')->name('userProfile');
       // Route::get('/store' ,'store')->name('store');
       Route::get('/editUserProfile','editUserProfile')->name('editUserProfile');
        Route::get('/PasswordUpdate','PasswordUpdate')->name('PasswordUpdate');

     

    }
);


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




Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () { 
Route::prefix('/backend/category')->controller(CategoryController::class)->name('category.')->group(
    function(){
        Route::get('/' ,'index')->name('index');
        Route::get('/create' ,'create')->name('create');
        Route::get('/store' ,'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::delete('/delete/{id}','destroy')->name('delete');
   

    }
);
});



Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () { 

Route::prefix('/backend/subcategorie')->controller(SubCategorieController::class)->name('Subcategorie.')->group(
    function(){
        Route::get('/' ,'index')->name('index');
        Route::get('/story' ,'story')->name('story');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::delete('/delete/{id}','deleted')->name('delete');
   

    }
);
});

Route::get('/get-all-subcategories',[SubCategorieController::class,'getSubcategories'])->name('Subcategorie.get');


Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () { 

Route::prefix('/backend/brand')->controller(BrandController::class)->name('Brand.')->group(
    function(){
        Route::get('/' ,'index')->name('index');
        Route::get('/store' ,'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::delete('/delete/{id}','delete')->name('delete');
   

    }
);
});



Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () { 
Route::prefix('/backend/item')->controller(ItemController::class)->name('Item.')->group(
    function(){
        Route::get('/' ,'index')->name('index');
        Route::get('/store' ,'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::delete('/delete/{id}','delete')->name('delete');

    }
);
});





 /////////////////////product Route
 Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () { 
Route::prefix('/backend/productSize')->controller(ProductSizeController::class)->name('ProductSize.')->group(
    function(){
        Route::get('/' ,'index')->name('index');
        Route::get('/store' ,'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::delete('/delete/{id}','delete')->name('delete');

    }
);
});

Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () { 

Route::prefix('/backend/productcolour')->controller(ProductColourController::class)->name('ProductColour.')->group(
    function(){
        Route::get('/' ,'index')->name('index');
        Route::get('/store' ,'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::delete('/delete/{id}','delete')->name('delete');

    }
);
});

Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () { 
Route::prefix('/backend/product')->controller(ProductController::class)->name('Product.')->group(
    function(){
        Route::get('/' ,'index')->name('index');
        
        Route::get('/create/product','Create')->name('create');
        
        Route::post('/store' ,'store')->name('store');
        // Route::get('/edit/{id}','edit')->name('edit');
        // Route::delete('/delete/{id}','delete')->name('delete');
        // Route::get('/relatedproduct' ,'relatedproduct')->name('relatedproduct');


    }
);
});

Route::get('/get-products', [ProductController::class, 'getProducts'])->name('relatedProduct');

// relaed product ajax

Route::get('/relatedproduct',[ProductController::class,'getRelatedProducts'])->name('get.Product.related');



Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () { 
Route::prefix('/backend/discount')->controller(DiscountCouponController::class)->name('Discount.')->group(
    function(){
        Route::get('/' ,'index')->name('index');
        Route::get('/store' ,'store')->name('store');
        // Route::get('/edit/{id}','edit')->name('edit');
        // Route::delete('/delete/{id}','delete')->name('delete');
        


    }
);
});



////////////////route shipping
Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () { 
Route::prefix('/backend/shipping')->controller(ShippingController::class)->name('Shipping.')->group(
    function(){
        Route::get('/' ,'index')->name('index');
        Route::get('/store' ,'store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::delete('/delete/{id}','delete')->name('delete');
        


    }
);
});




Route::get('/profile',[ProfileController::class,'showProfile'])->name('profile');
Route::put('/profile-update',[ProfileController::class,'updateProfile'])->name('profile.update');
Route::put('/password-update',[ProfileController::class,'updatepassword'])->name('profile.password.update');


// ==================   ALL USER REALATED ROUTE HERE=========================================//

Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () { 
    Route::prefix('/dashboard')->controller(DashbordController::class)->name('dashboard.')->group(
        function(){
           
            Route::get('/all-user','allUser')->name('alluser');
            
    
    
        }
    );
    });