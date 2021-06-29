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

Route::get('/', function () {
    return view('welcome');
});
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
    // 中略
    Route::get('index', 'HomeController@index')->name('index');
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
Route::get('product_states.index', 'Controller@index')->name('product_states.index');
