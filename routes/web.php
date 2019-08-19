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

Route::get('web', 'WebController@indexWeb')->name('page/home');

Route::group(['prefix' => 'page'], function () {

    Route::resource('web','PageHomeController');

});

Route::get('admin', 'AdminPageController@indexAdmin')->name('admin');

Route::group(['prefix' => 'admin'], function () {

    Route::resource('user','UserController');

    Route::resource('project', 'ProjectController');

    Route::resource('assign', 'AssignController');

    Route::resource('customer','CustomerController');

    Route::resource('report','ReportController');

    Route::resource('task','TaskController');

    Route::resource('feedback','FeedbackController');

    Route::resource('report-task', 'ReportTaskController');
});
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);

Route::get('register', 'Auth\RegisterController@getRegister');

Route::post('register', 'Auth\RegisterController@postRegister');

Route::get('logout', [ 'as' => 'logout', 'uses' => 'Auth\LogoutController@getLogout']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('test1', function () {
    return view('admin.layout.index');
});