<?php




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Backend\GoogleController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Frontend\CommentController;
use App\Http\Controllers\Frontend\ItemAllController;
use App\Http\Controllers\Frontend\RattingController;
use App\Http\Controllers\Frontend\BrandAllController;
use App\Http\Controllers\Frontend\CheckOutController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\SinglePageController;
use App\Http\Controllers\Backend\SubCategorieController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Frontend\HistoryOrderUserController;
use App\Http\Controllers\Frontend\ProductSubcategoryController;
use App\Http\Controllers\userDashboard\UserDashboardController;

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



// =================CART ROUTE===============//
                      
Route::get('/cart', [CartController::class, 'cart'])->name('frontend.contant.Cart')->middleware("auth");
Route::post('/AddToCart', [CartController::class, 'AddToCart'])->name('frontend.contant.AddToCart')->middleware("auth");
Route::put('/UpdateCart', [CartController::class, 'UpdateCart'])->name('frontend.contant.UpdateCart')->middleware("auth");
Route::delete('/delete/{rowId}', [CartController::class, 'delete'])->name('frontend.contant.deleted')->middleware("auth");


//======================= CHECKOUT ROUTE======================//
Route:: middleware("auth")->prefix('/checkout')->controller(CheckOutController::class)->name('front.contant.')->group(
    function(){
        Route::get('/' ,'checkout')->name('checkout');
        Route::post('/processCheckout','processCheckout')->name('processCheckout');
        Route::get('/thanks/{orderId}','thanks')->name('thanks');
       

    }
);

//===============================WISHLIST ROUTE=================================//

Route::  middleware("auth")->prefix('/wishlist')->controller(WishlistController::class)->name('front.contant.')->group(
    function(){
        Route::get('/' ,'index')->name('Wishlist');
        Route::post('/add','WishlistAdd')->name('WishlistAdd');
        Route::post('/remove','removeWishlist')->name('removeWishlist');    

    }
);




//=========================USER PROFILE ROUTE========================//
Route::middleware("auth")->prefix('/userProfile')->controller(UserProfileController::class)->name('frontend.')->group(
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


//============================  USER DASHBOAR ROUTE START=========================//

Route::middleware('auth')->prefix('/dashboard')->controller(UserDashboardController::class)->name('userdashboard.')->group(function(){

    Route::get('/user','userDashboard')->name('user');

});

//============================  USER DASHBOAR ROUTE END=========================//

Route::get('/get-all-subcategories',[SubCategorieController::class,'getSubcategories'])->name('Subcategorie.get');



Route::get('/get-products', [ProductController::class, 'getProducts'])->name('relatedProduct');

//===================== RELATED PRODUCT AJAX ROUTE END======================//
Route::get('/relatedproduct',[ProductController::class,'getRelatedProducts'])->name('get.Product.related');
//===================== RELATED PRODUCT AJAX ROUTE END======================//

Route::get('/profile',[ProfileController::class,'showProfile'])->name('profile')->middleware("auth");
Route::put('/profile-update',[ProfileController::class,'updateProfile'])->name('profile.update')->middleware("auth");
Route::put('/password-update',[ProfileController::class,'updatepassword'])->name('profile.password.update')->middleware("auth");

Route::get('/HistoryOrderUser',[HistoryOrderUserController::class,'HistoryOrderUser'])->name('HistoryOrderUser')->middleware("auth");


//========================GOOGLE ROUTE======================//
Route::get('/google/redirect',[GoogleController::class,'googleLogin'])->name('Google.Login');
Route::get('/google/callback',[GoogleController::class,'googleRedirect'])->name('Google.Redirect');

