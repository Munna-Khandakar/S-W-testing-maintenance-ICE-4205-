<?php

use Illuminate\Support\Facades\Route;

Route::get('/sendemail', 'App\Http\Controllers\WebsiteController@sendemail')->name('sendemail');

Route::post('/confirm/order', 'App\Http\Controllers\WebsiteController@order')->name('order');

Route::get('/', 'App\Http\Controllers\WebsiteController@index')->name('index');
Route::get('/grocery', 'App\Http\Controllers\WebsiteController@grocery')->name('grocery');

Route::get('/about', function () {
    return view('website.about');
});
Route::get('/contact', function () {
    return view('website.contact');
});
Route::get('/thanks', function () {
    return view('thanks');
});



Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return 'successfull';
  //  return redirect()->back()->with('success', 'cache has been cleared'); 
});

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('/sell', 'App\Http\Controllers\SellController@index')->name('sell');
    
    Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('products');
    Route::get('/add/products', 'App\Http\Controllers\ProductController@create')->name('add_product');
    Route::post('/store/products', 'App\Http\Controllers\ProductController@store')->name('store_product');
    Route::get('/edit/products/{id}', 'App\Http\Controllers\ProductController@edit')->name('edit_product'); 
    Route::post('/update/product', 'App\Http\Controllers\ProductController@update')->name('update_product');
    Route::get('/delete/products/{id}', 'App\Http\Controllers\ProductController@delete')->name('delete_product'); 
    Route::get('/disable/products/{id}', 'App\Http\Controllers\ProductController@disable_product')->name('disable_product');


    Route::get('/members', 'App\Http\Controllers\MemberController@index')->name('members');
    Route::get('/restaurants', 'App\Http\Controllers\RestaurantController@index')->name('restaurants');
    Route::post('/add/restaurants', 'App\Http\Controllers\RestaurantController@create')->name('add_restaurant');

    Route::get('/order/cancel/{id}', 'App\Http\Controllers\DashboardController@order_cancel_action')->name('order_cancel_action'); 
    Route::get('/order/approve/{id}', 'App\Http\Controllers\DashboardController@order_approve_action')->name('order_approve_action');
    Route::get('/order/making/{id}', 'App\Http\Controllers\DashboardController@seller_making_action')->name('seller_making_action'); 
    Route::get('/order/finished/{id}', 'App\Http\Controllers\DashboardController@seller_finished_action')->name('seller_finished_action');   

});

require __DIR__.'/auth.php';
