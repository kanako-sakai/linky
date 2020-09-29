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
Route::get('/privacy', 'PagesController@getPrivacy')->name('privacy');
Route::get('/precaution', 'PagesController@getPrecaution')->name('precaution');
Route::get('/tokushoho', 'PagesController@getTokushoho')->name('tokushoho');

//ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
Route::post('register/pre_check', 'Auth\RegisterController@pre_check')->name('register.pre_check');
Route::get('register/verify/{token}', 'Auth\RegisterController@showForm')->name('register.form');
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
        
        //退会
        Route::get('cancel', 'UsersController@showCancelForm')->name('cancel_form');
        Route::post('cancel_confirmed', 'UsersController@cancel')->name('cancel_confirmed');
        
        //プロフィール写真
        Route::get('/picture', 'UsersController@showPictureForm')->name('edit.picture');
        Route::post('/picture', 'UsersController@upload')->name('upload');
        
        //オフィシャルメンターリクエストのチケット回数表示
        Route::get('official_status', 'OfficialRequestController@show_records')->name('official_status');
        Route::get('mentor_list', 'OfficialRequestController@show_mentors')->name('show_mentors');
    });
    
    //ユーザー一覧
        Route::resource('users', 'UsersController');
     
    //オフィシャルメンターリクエスト
        Route::get('official_mentors', 'OfficialRequestController@official_mentors')->name('official_mentors');
        Route::get('official_request/payment', 'OfficialRequestController@payment')->name('official.payment');
        Route::get('{id}/request_form_1', 'OfficialRequestController@request_form_1')->name('official.form1');
        Route::get('request_form_3', 'OfficialRequestController@request_form_3')->name('official.form3');
        Route::get('request_form_5', 'OfficialRequestController@request_form_5')->name('official.form5');
        Route::get('official_request/payment_failed', 'OfficialRequestController@payment_failed')->name('payment.failed');
        Route::post('official_request/confirm', 'OfficialRequestController@confirm')->name('official.confirm');
        Route::post('official_request/complete/payment', 'OfficialRequestController@complete')->name('official.complete');
        Route::get('official_request/complete', 'OfficialRequestController@paymentDone')->name('payment.done');
        Route::get('request_form', 'OfficialRequestController@request_form')->name('official.form');
        Route::post('official_request/confirm_add_request', 'OfficialRequestController@confirm_add_request')->name('official.confirm_add_request');
        Route::get('offical_mentors_maintenance', 'OfficialRequestController@maintenance')->name('offical_mentors_maintenance');
        Route::get('{id}/official/messages', 'UsersController@official_messages')->name('official_messages');
        Route::post('{id}/send_official_message', 'DirectMessageController@official_store')->name('official_store');
    //グループ座談会
        Route::get('group/index', 'GroupController@index')->name('group_index');
        Route::get('group/payment', 'GroupController@payment')->name('group_payment');
        Route::get('group/thankyou', 'GroupController@thankyou')->name('thankyou');
        
    //使い方
        Route::get('how_to', 'PagesController@getHowTo')->name('how_to');
});    

Route::group(['middleware' => ['auth'=>'can:admin-higher']], function () {        
    //開発者と公式メンターがアクセスできる画面
        Route::get('admin', 'AdminController@index')->name('admin');
        Route::get('records/{id}', 'AdminController@records')->name('records');
        Route::get('staff', 'AdminController@staff')->name('staff');
        Route::get('staff/schedule', 'AdminController@staffSchedule')->name('staff_schedule');
        Route::post('conducted/{id}', 'AdminController@conducted')->name('conducted');
        Route::delete('delete_schedule/{id}', 'AdminController@cancel_schedule')->name('delete_schedule');
        Route::get('schedule/{id}', 'AdminController@schedule')->name('schedule');
        Route::post('register_schedule', 'AdminController@register_schedule')->name('register_schedule');
        Route::get('schedule_index/{id}', 'AdminController@schedule_index')->name('schedule_index');
        Route::put('staff_auth/{id}', 'AdminController@staff_auth')->name('staff_auth');
});

Route::group(['middleware' => ['auth'=>'can:system-only']], function() {
        Route::post('confirm_payment1/{id}', 'AdminController@confirm_payment1')->name('confirm_payment1');
        Route::post('confirm_payment3/{id}', 'AdminController@confirm_payment3')->name('confirm_payment3');
        Route::post('confirm_payment5/{id}', 'AdminController@confirm_payment5')->name('confirm_payment5');
});
        

//お問い合わせ
Route::get('contact', 'ContactsController@index')->name('contact.index');
Route::post('contact/confirm', 'ContactsController@confirm')->name('contact.confirm');
Route::post('contact/complete', 'ContactsController@send')->name('contact.send');

//パスワードリセット
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@preCheck')->name('password.update');

