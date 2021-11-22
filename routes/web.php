<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Backend\LoginController;


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

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/about_us', [FrontendController::class, 'about_us'])->name('frontend.about_us');

Route::get('/product', [ProductController::class, 'index'])->name('frontend.product.index');

Route::get('/product/{slug}', [ProductController::class, 'single_product'])->name('frontend.product.single_product');
Route::get('/add_to_cart','App\Http\Controllers\Frontend\CartController@add_to_cart')->name('frontend.cart.add_to_cart');
Route::get('/cart','App\Http\Controllers\Frontend\CartController@index')->name('frontend.cart.index');
Route::get('/reduceByOne','App\Http\Controllers\Frontend\CartController@reduceByOne')->name('frontend.cart.reduceByOne');
Route::get('/addByOne','App\Http\Controllers\Frontend\CartController@addByOne')->name('frontend.cart.addByOne');
Route::get('/remove','App\Http\Controllers\Frontend\CartController@remove')->name('frontend.cart.remove');

Route::get('/default_page',function(){
    return view('frontend.default_page');
})->name('frontend.default');

Route::get('/payment',function(){
    return view('frontend.checkout.payment');
})->name('frontend.payment');

Route::group(['middleware' => 'guest'], function(){
    Route::get('/login','App\Http\Controllers\Frontend\LoginController@get_login')->name('frontend.login.get_login');
    Route::post('/login','App\Http\Controllers\Frontend\LoginController@post_login')->name('frontend.login.post_login');
    Route::get('/register','App\Http\Controllers\Frontend\RegisterController@get_register')->name('frontend.register.get_register');
    Route::post('/register','App\Http\Controllers\Frontend\RegisterController@post_register')->name('frontend.register.post_register');
    Route::get('/admin', [LoginController::class, 'get_login'])->name('backend.login.get_login');
    Route::post('/admin', [LoginController::class, 'post_login'])->name('backend.login.post_login');
});    

Route::group([ 'middleware' => 'auth'], function()
{
    Route::get('/account','App\Http\Controllers\Frontend\AccountController@index')->name('frontend.account.index');
    Route::get('/logout','App\Http\Controllers\Frontend\AccountController@logout')->name('frontend.account.logout');
    Route::get('/add_wishlist/{product_id}','App\Http\Controllers\Frontend\WishlistController@add_wishlist')->name('frontend.wishlist.add_wishlist');
    Route::get('/wishlist','App\Http\Controllers\Frontend\WishlistController@index')->name('frontend.wishlist.index');
    Route::get('/remove_wishlist/{product_id}','App\Http\Controllers\Frontend\WishlistController@remove')->name('frontend.wishlist.remove');
    Route::get('/shipping','App\Http\Controllers\Frontend\ShippingController@index')->name('frontend.shipping.index');
    Route::post('/post_shipping','App\Http\Controllers\Frontend\ShippingController@post_shipping')->name('frontend.shipping.post_shipping');
});

Route::group(['prefix' => 'admin',  'middleware' => ['auth','admin']], function()
{
    Route::get('dashboard',[LoginController::class, 'dashboard'])->name('backend.login.dashboard');

       //Products Route
       Route::get('products','App\Http\Controllers\Backend\ProductController@index')->name('backend.product.index');
       Route::get('product/add','App\Http\Controllers\Backend\ProductController@add')->name('backend.product.add');
       Route::get('product/getSubCategory','App\Http\Controllers\Backend\ProductController@getSubCategory')->name('backend.product.getSubCategory');
       Route::post('product/store','App\Http\Controllers\Backend\ProductController@store')->name('backend.product.store');
       Route::get('product/edit/{id}','App\Http\Controllers\Backend\ProductController@edit')->name('backend.product.edit');
       Route::post('product/update/{id}','App\Http\Controllers\Backend\ProductController@update')->name('backend.product.update');
       Route::get('product/delete/{id}','App\Http\Controllers\Backend\ProductController@destroy')->name('backend.product.destroy');
   
       //Category Route
       Route::get('category','App\Http\Controllers\Backend\CategoryController@index')->name('backend.category.index');
       Route::get('category/add','App\Http\Controllers\Backend\CategoryController@add')->name('backend.category.add');
       Route::post('category/store','App\Http\Controllers\Backend\CategoryController@store')->name('backend.category.store');
       Route::get('category/edit/{id}','App\Http\Controllers\Backend\CategoryController@edit')->name('backend.category.edit');
       Route::post('category/update/{id}','App\Http\Controllers\Backend\CategoryController@update')->name('backend.category.update');
       Route::get('category/delete/{id}','App\Http\Controllers\Backend\CategoryController@destroy')->name('backend.category.destroy');

       //Sub Category Route
       Route::get('sub_category','App\Http\Controllers\Backend\SubCategoryController@index')->name('backend.sub_category.index');
       Route::get('sub_category/add','App\Http\Controllers\Backend\SubCategoryController@add')->name('backend.sub_category.add');
       Route::post('sub_category/store','App\Http\Controllers\Backend\SubCategoryController@store')->name('backend.sub_category.store');
       Route::get('sub_category/edit/{id}','App\Http\Controllers\Backend\SubCategoryController@edit')->name('backend.sub_category.edit');
       Route::post('sub_category/update/{id}','App\Http\Controllers\Backend\SubCategoryController@update')->name('backend.sub_category.update');
       Route::get('sub_category/delete/{id}','App\Http\Controllers\Backend\SubCategoryController@destroy')->name('backend.sub_category.destroy');

       //Sub Category Route
       Route::get('orders','App\Http\Controllers\Backend\OrderController@index')->name('backend.orders.index');
       Route::get('order/add','App\Http\Controllers\Backend\OrderController@add')->name('backend.order.add');
       Route::post('order/store','App\Http\Controllers\Backend\OrderController@store')->name('backend.order.store');
       Route::get('order/edit/{id}','App\Http\Controllers\Backend\OrderController@edit')->name('backend.order.edit');
       Route::post('order/update/{id}','App\Http\Controllers\Backend\OrderController@update')->name('backend.order.update');
       Route::get('order/delete/{id}','App\Http\Controllers\Backend\OrderController@destroy')->name('backend.order.destroy');
   
   
   
       //Change Password Route
       Route::get('change_password','Admin\LoginController@change_password')->name('change_password');
       Route::post('post_change_password','Admin\LoginController@post_change_password')->name('post_change_password');
   
       //logout route
       Route::get('logout',[LoginController::class, 'logout'])->name('logout');
});