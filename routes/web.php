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

//Aboutやプライバシーポリシー
Route::get('/', 'PagesController@getHome')->name('home');
Route::get('/about', 'PagesController@getAbout')->name('about');
Route::get('/privacy_policy', 'PagesController@getPrivacyPolicy')->name('privacy_policy');

//ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
});

//ユーザー検索ボタンを押すとSerachControllerのIndexメソッドを実行する
Route::get('Search', 'SearchController@index')->name('search');