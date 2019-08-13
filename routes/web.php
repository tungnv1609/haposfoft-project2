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

use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'page'], function () {

    Route::get('/', 'PageHomeController@indexPageHome')->name('page/home');

    Route::get('/show','PageHomeController@showUser')->name('page/show');
});

Route::get('page', 'PageHomeController@indexPageHome')->name('page/home');

Route::get('page.show','PageHomeController@showUser')->name('page/show');

Route::get('admin', 'AdminPageController@indexAdmin')->name('admin');

Route::group(['prefix' => 'admin'], function () {

    Route::resource('user','UserController');

    Route::resource('report','ReportController');

    Route::resource('task','TaskController');

    Route::get('relative', function ()
    {
       return view('admin.relative');
    });

});

Route::get('/home', 'HomeController@getIndex');

Route::get('login', 'LoginController@getLogin');
Route::post('login', 'LoginController@postLogin');

Route::get('register', 'Auth\RegisterController@getRegister');
Route::post('register', 'Auth\RegisterController@postRegister');

Route::get('logout', 'Auth\LogoutController@postRegister');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
