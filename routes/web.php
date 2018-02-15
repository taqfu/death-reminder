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
Route::get('/admin', function(){
    return view('auth.login');
});
Route::get('/unsubscribe/{email}', 'SubscriptionController@unsubscribe_link')->name('subscription.unsubscribe_link');
Route::get('/subscription/{email}/{unsubscribe_key}/unsubscribe', 'SubscriptionController@unsubscribe')->name('subscription.unsubscribe');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource ("subscription", "SubscriptionController");
