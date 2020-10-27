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

Auth::routes();

Route::get('/home', 'User\HomeController@index')->name('home');

//profile
Route::group(['namespace' => 'User', 'prefix' => 'profile'], function (){
    $methods = ['index', 'store', 'update'];
    Route::resource('user', 'ProfileController')
        ->only($methods)
        ->names('profile.user');
});

//manage group
Route::group(['namespace' => 'User', 'prefix' => 'group'], function (){
    Route::resource('manage', 'GroupController')
        ->except('show')
        ->names('group.manage');
});

//msg_template
Route::get('/msg_template', 'User\MsgController@index')->name('msg_template');
Route::post('/msg_template', 'User\MsgController@store')->name('msg_template_post');

//mass-sending
Route::get('/mass-sending', 'User\MassSendingController@index')->name('mass-sending');
Route::post('/mass-sending', 'User\MassSendingController@send')->name('mass_sending_post');




