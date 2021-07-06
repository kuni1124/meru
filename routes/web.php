<?php

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

Route::get('/', 'WelcomesController@index')->name('/');
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
    // 中略
    Route::get('home.index', 'HomesController@index')->name('home.index');

        Route::get('users.index', 'UserFollowController@index')->name('users.index');
        Route::post('follow/{id}', 'UserFollowController@store')->name('user.follow');
        Route::delete('unfollow/{id}', 'UserFollowController@destroy')->name('user.unfollow');
        Route::get('followings', 'UsersController@followings')->name('users.followings');
        Route::get('followers', 'UsersController@followers')->name('users.followers');
    
    Route::get('product.index', 'ProductsController@index')->name('product.index');
    Route::get('product.create', 'ProductsController@create')->name('product.create');
    Route::post('product.store', 'ProductsController@store')->name('product.store');
    Route::get('/product.show/{id}', 'ProductsController@show')->name('product.show');
    Route::get('/product.edit/{id}', 'ProductsController@edit')->name('product.edit');
    Route::delete('/product.delete/{id}', 'ProductsController@destroy')->name('product.delete');
    Route::put('/product.update/{id}', 'ProductsController@update')->name('product.update');
    Route::get('transaction.index', 'ProductsController@transaction')->name('transaction.index');
    Route::get('cancel/{id}', 'ProductsController@cancel')->name('cancel');

    Route::get('buys.index/{id}', 'BuysController@index')->name('buys.index');
    Route::get('buys.create/{id}', 'BuysController@create')->name('buys.create');
    Route::post('buys.store/{id}', 'BuysController@store')->name('buys.store');
    Route::get('buys.show/{id}', 'BuysController@show')->name('buys.show');
    
    Route::get('buymotions.index', 'BuymotionsController@index')->name('buymotions.index');
    Route::get('buymotions.destroy/{id}', 'BuymotionsController@destroy')->name('buymotions.destroy');
    

    Route::get('delivery_destination.create', 'Delivery_destinationsController@create')->name('delivery_destination.create');
    Route::post('delivery_destination.store', 'Delivery_destinationsController@store')->name('delivery_destination.store');
    Route::get('/delivery_destination.edit/{id}', 'Delivery_destinationsController@edit')->name('delivery_destination.edit');
    Route::put('/delivery_destination.update/{id}', 'Delivery_destinationsController@update')->name('delivery_destination.update');
});

Route::get('regist.index', 'RegistrationController@index')->name('regist.index');

//カテゴリ
Route::get('kategorys.index', 'KategorysController@index')->name('kategorys.index');
Route::get('kategorys.create', 'KategorysController@create')->name('kategorys.create');
Route::post('kategorys.store', 'KategorysController@store')->name('kategorys.store');
Route::delete('kategorys.delete/{id}', 'KategorysController@destroy')->name('kategorys.delete');

//都道府県
Route::get('prefectures.index', 'PrefecturesController@index')->name('prefectures.index');
Route::get('prefectures.create', 'PrefecturesController@create')->name('prefectures.create');
Route::post('prefectures.store', 'PrefecturesController@store')->name('prefectures.store');
Route::delete('prefectures.delete/{id}', 'PrefecturesController@destroy')->name('prefectures.delete');

//発送日時
Route::get('deliverys.index', 'DeliverysController@index')->name('deliverys.index');
Route::get('deliverys.create', 'DeliverysController@create')->name('deliverys.create');
Route::post('deliverys.store', 'DeliverysController@store')->name('deliverys.store');
Route::delete('deliverys.delete/{id}', 'DeliverysController@destroy')->name('deliverys.delete');

//商品状態
Route::get('product_states.index', 'Product_statesController@index')->name('product_states.index');
Route::get('product_states.create', 'Product_statesController@create')->name('product_states.create');
Route::post('product_states.store', 'Product_statesController@store')->name('product_states.store');
Route::delete('product_states.delete/{id}', 'Product_statesController@destroy')->name('product_states.delete');