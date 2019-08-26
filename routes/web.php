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


Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);

Route::get('register', 'Auth\RegisterController@getRegister');

Route::post('register', 'Auth\RegisterController@postRegister');

Route::get('logout', [ 'as' => 'logout', 'uses' => 'Auth\LogoutController@getLogout']);
Auth::routes();

Route::get('admin', 'AdminPageController@indexAdmin')->name('admin');
Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
            Route::get('/','UserController@index')->name('user.index');

            Route::get('/create','UserController@create')->name('user.create');
            Route::post('/create','UserController@store')->name('user.store');

            Route::get('/edit/{id}','UserController@edit')->name('user.edit');
            Route::post('/edit/{id}', 'UserController@update')->name('user.update');

            Route::get('/show/{id}', 'UserController@show')->name('user.show');

            Route::get('/destroy/{id}', 'UserController@destroy')->name('user.destroy');

        Route::resource('role', 'RoleController');

        Route::resource('project', 'ProjectController');

        Route::resource('assign', 'AssignController');

        Route::resource('customer', 'CustomerController');

        Route::resource('report', 'ReportController');

        Route::resource('task', 'TaskController');

        Route::resource('feedback', 'FeedbackController');

        Route::resource('report-task', 'ReportTaskController');
    });
});
//Route::get('/', 'PageHomeController@index')->name('page/home');
//
//Route::group(['prefix' => 'page'], function () {
//
//    Route::resource('web','PageHomeController');
//
//});



Route::get('/', 'HomeController@index')->name('home');

//Route::middleware(['auth'])->group(function () {
//
//    Route::prefix('user')->group(function () {
//
//        Route::get('/','UserController@index')->name('user.index');
//
//        Route::get('/create','UserController@create')->name('user.create');
//        Route::post('/create','UserController@store')->name('user.store');
//
//        Route::get('/edit/{id}','UserController@edit')->name('user.edit');
//        Route::post('/edit/{id}', 'UserController@update')->name('user.update');
//
//        Route::get('/show/{id}', 'UserController@show')->name('user.show');
//
//        Route::get('/destroy/{id}', 'UserController@destroy')->name('user.destroy');
//    });
//});