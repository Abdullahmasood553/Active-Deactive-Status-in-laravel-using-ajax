<?php
use App\User;

use App\Notifications\MyFirstNotification;

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


// $user = User::find(1);
// User::find(1)->notify(new MyFirstNotification);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('markAsRead', 'HomeController@markAsRead')->name('markRead');



Route::get('user_listing', 'UserController@index');
Route::get('userFetchList', 'UserController@userFetchList');
Route::get('active_deactive_user/{id}', 'UserController@active_deactive_user');
