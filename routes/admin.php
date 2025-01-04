<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ItemController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ShippingController;
use App\Http\Controllers\Dashbord\DashbordController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Backend\ProductSizeController;
use App\Http\Controllers\Backend\SubCategorieController;
use App\Http\Controllers\Backend\ProductColourController;
use App\Http\Controllers\Backend\DiscountCouponController;
// Route::get('/',[HomePageController::class,'homePage'])->name('frontend.contant.homepage');


// ===========ADMIN DASHBOARD======================//
Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () {


    Route::prefix('/dashboard')->controller(DashbordController::class)->name('dashbord.')->group(function () {

        Route::get('/admin', [DashbordController::class, 'dashboard'])->name('admin');
    });
});

// ====================== ALL CATEGORIE  ROUTE=========================// 
Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () {
    Route::prefix('/backend/category')->controller(CategoryController::class)->name('category.')->group(
        function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::get('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::delete('/delete/{id}', 'delete')->name('delete');
        }
    );
});








//====================ALL SUBCATEGORIE ROUTE=========================//

Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () {
    Route::prefix('/backend/subcategorie')->controller(SubCategorieController::class)->name('Subcategorie.')->group(
        function () {
            Route::get('/', 'index')->name('index');
            Route::get('/store', 'store')->name('story');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::delete('/delete/{id}', 'delete')->name('delete');
        }
    );
});





//=====================ALL BRAND ROUTE =========================//
Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () {
    Route::prefix('/backend/brand')->controller(BrandController::class)->name('Brand.')->group(
        function () {
            Route::get('/', 'index')->name('index');
            Route::get('/store', 'store')->name('store');
            Route::put('/edit/{id}', 'edit')->name('edit');
            Route::delete('/delete/{id}', 'delete')->name('delete');
        }
    );
});




// =========================ALL ITEM ROUTE=============================//
Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () {
    Route::prefix('/backend/item')->controller(ItemController::class)->name('Item.')->group(
        function () {
            Route::get('/', 'index')->name('index');
            Route::get('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::delete('/delete/{id}', 'delete')->name('delete');
        }
    );
});



// ====================ALL PRODUCT SIZE ROUTE=========================//
Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () {
    Route::prefix('/backend/productSize')->controller(ProductSizeController::class)->name('ProductSize.')->group(
        function () {
            Route::get('/', 'index')->name('index');
            Route::get('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::delete('/delete/{id}', 'delete')->name('delete');
        }
    );
});






//========================ALL PRODUCT COLOR ROUTE=========================//
Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () {
    Route::prefix('/backend/productcolour')->controller(ProductColourController::class)->name('ProductColour.')->group(
        function () {
            Route::get('/', 'index')->name('index');
            Route::get('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::delete('/delete/{id}', 'delete')->name('delete');
        }
    );
});



// ==================ALL PRODUCT ROUTE==================//
Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () { 
    Route::prefix('/backend/product')->controller(ProductController::class)->name('Product.')->group(
        function(){
            Route::get('/' ,'index')->name('index');      
            Route::get('/create/product','Create')->name('create'); 
            Route::post('/store' ,'store')->name('store');
            Route::get('/edit/{productId}','productEdit')->name('edit');
            Route::delete('/delete/{productId}','deleteProduct')->name('delete');
            // Route::get('/relatedproduct' ,'relatedproduct')->name('relatedproduct');
    
    
        }
    );
    });
    


//================================ALL DISCOUNT ROUTE==============================//
Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () { 
    Route::prefix('/backend/discount')->controller(DiscountCouponController::class)->name('Discount.')->group(
        function(){
            Route::get('/' ,'index')->name('index');
            Route::get('/store' ,'store')->name('store');
            // Route::get('/edit/{id}','edit')->name('edit');
            Route::delete('/delete/{id}','delete')->name('delete');
            
    
    
        }
    );
    });
    


    
  //===================ALL SHIPPING ROUTE=======================//
Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () { 
    Route::prefix('/admin/shipping')->controller(ShippingController::class)->name('Shipping.')->group(
        function(){


            Route::get('/' ,'index')->name('index');
            
            Route::get('/create' ,'store')->name('store');
            // Route::get('/store' ,'store')->name('store');


            Route::get('/edit/{id}','edit')->name('edit');
            Route::delete('/delete/{id}','delete')->name('delete');
            
    
    
        }
    );
    });


 // ==================   ALL USER REALATED ROUTE HERE=========================================//

Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () { 
    Route::prefix('/dashboard')->controller(DashbordController::class)->name('dashboard.')->group(
        function(){
           
            Route::get('/all-user','allUser')->name('alluser');
            Route::get('/assen-roll/{id}','assenRoll')->name('assenroll');

            Route::get('/add-roll','addRoll')->name('addroll');

            Route::get('/order-all','allOrder')->name('allOrder');

            
    
    
        }
    );
    });



//======================ALL ORDER LIST ROUTE==============================//
Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () { 
    Route::prefix('/backend/order')->controller(OrderController::class)->name('Order.')->group(
        function(){
            Route::get('/list' ,'orderList')->name('list');
            Route::get('/detail/{id}' ,'orderDetail')->name('detail');
       
        }
    );
    });




 //============================ALL PAGE ROUTE===============================//
Route::group(['middleware' => ['role:supper_admin|admin|writter']], function () { 
    Route::prefix('/backend/page')->controller(PageController::class)->name('Page.')->group(
        function(){
    
            Route::get('/' ,'index')->name('index');      
            Route::get('/story' ,'story')->name('story');
             Route::get('/edit/{id}','edit')->name('edit');
            Route::delete('/delete/{id}','delete')->name('delete');
            Route::get('/detail/{id}' ,'PageDetail')->name('detail');
       
    
        }
    );
    });
