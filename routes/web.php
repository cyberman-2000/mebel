<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');
//....................Contact Routes.......................................................
Route::get('/contact','ContactController@index')->name('contact');
Route::post('/contact','ContactController@message')->name('send_message');


Route::post('test','TestController@test')->name('test');
//........................Login Routes....................................................

Route::group(['middleware'=>'auth'], function (){
    Route::get('logout','LoginAndRegistrationController@logout')->name('logout');
    Route::post('/makeOrder','ShoppingCartController@makeOrder')->name('makeOrder');

});
//........................Registration Routes....................................................

Route::group(['middleware'=>'guest'],function (){
Route::get('/registration','LoginAndRegistrationController@registration')->name('registration');
Route::post('/registration','LoginAndRegistrationController@createuser')->name('create');
Route::get('/login','LoginAndRegistrationController@login')->name('login');
Route::post('/login','LoginAndRegistrationController@check')->name('check');
});
//..............................Box-Shop........................................
Route::get('/add_to_boxshop','ShoppingCartController@addCart')->name('addBox');
Route::get('/add_to_boxshop/{id}','ShoppingCartController@remove_to_cart')->name('remove');

// .................................Shop Routes.................................................................

Route::prefix('shop')->group(function (){
    Route::get('/product_category','ProductCategoryController@index')->name('product_category');
    Route::get('/product_category/filter','ProductCategoryController@filter')->name('filter');
    Route::get('/product_details/{id}','SingleProductController@index')->name('product_details');
    Route::get('/shopping_cart','ShoppingCartController@index')->name('shopping_cart');
    Route::get('/order_confirmation','OrderConfirmationController@index')->name('order_confirmation');
});

//..........................................Admin Routes...........................................................
Route::prefix('podshox')->group(function (){
    Route::get('/','Admin/MainController@index');
});
//..................................Comment Rout..........................................
Route::post('/send_comment','SingleProductController@comment')->middleware('auth')->name('comment');


