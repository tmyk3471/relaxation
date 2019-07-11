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

Route::get('/', 'ToppageController@index');

Route::resource('/', 'ToppageController');

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

// セラピスト一覧
Route::get('therapist/', 'TherapistController@index')->name('therapist');

// ニュース一覧
Route::get('news', function () { return view('news');});
// Route::get('news/', 'ArticleController@index')->name('news');

// 店舗一覧
Route::get('shop', function () { return view('shop');});
// Route::get('shop/', 'ShopController@index')->name('shop');