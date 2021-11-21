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
   
       //Acts and regulations Route
       Route::get('acts_and_regulations','Admin\ActsRegulationController@get_acts_and_regulations')->name('get_acts_and_regulations');
       Route::get('add_acts_and_regulation','Admin\ActsRegulationController@add_acts_and_regulation')->name('add_acts_and_regulation');
       Route::post('post_acts_and_regulation','Admin\ActsRegulationController@post_acts_and_regulation')->name('post_acts_and_regulation');
       Route::get('acts_and_regulation','Admin\ActsRegulationController@edit_acts_and_regulation')->name('edit_acts_and_regulation');
       Route::post('update_acts_and_regulation','Admin\ActsRegulationController@update_acts_and_regulation')->name('update_acts_and_regulation');
       Route::get('delete_acts_and_regulation','Admin\ActsRegulationController@delete_acts_and_regulation')->name('delete_acts_and_regulation');
   
           //Acts and regulations Route
       Route::get('acts_and_regulations','Admin\ActsRegulationController@get_acts_and_regulations')->name('get_acts_and_regulations');
       Route::get('add_acts_and_regulation','Admin\ActsRegulationController@add_acts_and_regulation')->name('add_acts_and_regulation');
       Route::post('post_acts_and_regulation','Admin\ActsRegulationController@post_acts_and_regulation')->name('post_acts_and_regulation');
       Route::get('acts_and_regulation','Admin\ActsRegulationController@edit_acts_and_regulation')->name('edit_acts_and_regulation');
       Route::post('update_acts_and_regulation','Admin\ActsRegulationController@update_acts_and_regulation')->name('update_acts_and_regulation');
       Route::get('delete_acts_and_regulation','Admin\ActsRegulationController@delete_acts_and_regulation')->name('delete_acts_and_regulation');
   
       //Member List Route
       Route::get('member_lists','Admin\MemberListController@get_member_lists')->name('get_member_lists');
       Route::get('add_member_list','Admin\MemberListController@add_member_list')->name('add_member_list');
       Route::post('post_member_list','Admin\MemberListController@post_member_list')->name('post_member_list');
       Route::get('member_list','Admin\MemberListController@edit_member_list')->name('edit_member_list');
       Route::post('update_member_list','Admin\MemberListController@update_member_list')->name('update_member_list');
       Route::get('delete_member_list','Admin\MemberListController@delete_member_list')->name('delete_member_list');
   
       //News and Update
       Route::get('news_and_updates','Admin\NewsUpdateController@get_news_and_updates')->name('get_news_and_updates');
       Route::get('add_news_and_update','Admin\NewsUpdateController@add_news_and_update')->name('add_news_and_update');
       Route::post('post_news_and_update','Admin\NewsUpdateController@post_news_and_update')->name('post_news_and_update');
       Route::get('news_and_update','Admin\NewsUpdateController@edit_news_and_update')->name('edit_news_and_update');
       Route::post('update_news_and_update','Admin\NewsUpdateController@update_news_and_update')->name('update_news_and_update');
       Route::get('delete_news_and_update','Admin\NewsUpdateController@delete_news_and_update')->name('delete_news_and_update');
   
       //Gallery Route
       Route::get('get_gallery','Admin\GalleryController@get_gallery')->name('get_gallery');
       Route::get('add_gallery','Admin\GalleryController@add_gallery')->name('add_gallery');
       Route::post('post_gallery','Admin\GalleryController@post_gallery')->name('post_gallery');
       Route::get('gallery','Admin\GalleryController@edit_gallery')->name('edit_gallery');
       Route::post('update_gallery','Admin\GalleryController@update_gallery')->name('update_gallery');
       Route::get('delete_gallery','Admin\GalleryController@delete_gallery')->name('delete_gallery');
   
       //CentralBankMessage Rote
       Route::get('get_message','Admin\CentralBankMessageController@get_message')->name('get_message');
       Route::get('add_message','Admin\CentralBankMessageController@add_message')->name('add_message');
       Route::post('post_message','Admin\CentralBankMessageController@post_message')->name('post_message');
       Route::get('message','Admin\CentralBankMessageController@edit_message')->name('edit_message');
       Route::post('update_message','Admin\CentralBankMessageController@update_message')->name('update_message');
       Route::get('delete_message','Admin\CentralBankMessageController@delete_message')->name('delete_message');
   
       //Partner Rote
       Route::get('partners','Admin\PartnerController@get_partner')->name('get_partners');
       Route::get('add_partner','Admin\PartnerController@add_partner')->name('add_partner');
       Route::post('post_partner','Admin\PartnerController@post_partner')->name('post_partner');
       Route::get('partner','Admin\PartnerController@edit_partner')->name('edit_partner');
       Route::post('update_partner','Admin\PartnerController@update_partner')->name('update_partner');
       Route::get('delete_partner','Admin\PartnerController@delete_partner')->name('delete_partner');
   
       //Change Password Route
       Route::get('change_password','Admin\LoginController@change_password')->name('change_password');
       Route::post('post_change_password','Admin\LoginController@post_change_password')->name('post_change_password');
   
       //logout route
       Route::get('logout',[LoginController::class, 'logout'])->name('logout');
});