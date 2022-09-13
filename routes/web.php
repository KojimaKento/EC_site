<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => 'admin'], function () {

  Route::get('/admin', function(){
      return 'OK';

  });
});

Route::get('/', 'ListingController@listing_index');
// 出品削除
Route::post('/', 'ListingController@delete')->name('delete');

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

Route::get('hello/show', 'HelloController@show');

Route::get('person', 'PersonController@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// クリエイター一覧
Route::get('/creators', 'ProfileController@find');
Route::post('/creators', 'ProfileController@search')->name('search');
// Route::get('/creators', 'ProfileController@search')->name('search');


// プロフィール編集
Route::get('/profile', 'ProfileController@edit');
Route::post('/profile', 'ProfileController@update')->name("profile.update");



// 出品機能
Route::get('/listing', 'ListingController@index')->name("listing.index");
Route::post('/listing', 'ListingController@post')->name("listing.post");

Route::get('/listing/listing_confirm', 'ListingController@confirm')->name("listing.confirm");
Route::post('/listing/listing_confirm', "ListingController@send")->name("listing.send");

Route::get('/lisitng/listing_complete', "ListingController@complete")->name("listing.complete");

// 出品一覧
Route::get('/listing_list', "ListingController@list")->name("listing.list");

// 出品詳細
Route::get('/listing_list/listing_show/{id}', "ListingController@show")->name("listing.show");

// 購入機能
Route::get('/buy/purchase/{id}', "BuyController@purchase")->name("buy.purchase");
Route::post('/buy/purchase/{id}', 'BuyController@post')->name("buy.post");

Route::get('/buy/purchase_confirm/{id}', 'BuyController@confirm')->name("buy.confirm");
Route::post('/buy/purchase_confirm/{id}', "BuyController@send")->name("buy.send");

Route::get('/buy/purchase_complete', "BuyController@complete")->name("buy.complete");

Route::get('/purchase_list', "BuyController@list")->name("buy.list");

