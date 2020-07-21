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
Route::post('register/pre_check', 'Auth\RegisterController@pre_check')->name('register.pre_check');
Route::get('register/verify/{token}', 'Auth\RegisterController@showForm');
Route::post('register/main_check', 'Auth\RegisterController@mainCheck')->name('register.main.check');
Route::post('register/main_register', 'Auth\RegisterController@mainRegister')->name('register.main.registered');

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'users/{id}'], function () {
        //リクエスト送信
        Route::post('mentor_request', 'MentorRequestController@store')->name('user.mentor.request');
        Route::delete('undo_request', 'MentorRequestController@destroy')->name('user.undo.request');
        Route::get('mentor_requestings', 'UsersController@mentor_requestings')->name('users.mentor_requestings');
        Route::get('requesters', 'UsersController@requesters')->name('users.requesters');
        //リクエスト承認・拒否
        Route::put('accept', 'MentorRequestController@accept')->name('accept');
        Route::put('decline', 'MentorRequestController@decline')->name('decline');
        Route::get('matches', 'UsersController@matches')->name('matches');
       
        // ダイレクトメッセージ
        Route::post('send_message', 'DirectMessageController@store')->name('send.message');
        Route::delete('delete_message', 'DirectMessageController@destroy')->name('delete.message');
        Route::get('direct_messages', 'UsersController@show_messages')->name('show.messages');
    });
    
    //ユーザー一覧
        Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
});

//お問い合わせ
Route::get('contact', 'ContactsController@index')->name('contact.index');
Route::post('contact/confirm', 'ContactsController@confirm')->name('contact.confirm');
Route::post('contact/complete', 'ContactsController@complete')->name('contact.complete');

//パスワードリセット
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');