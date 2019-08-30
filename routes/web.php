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

Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'haposoft'], function () {

        Route::resource('user', 'UserController')->middleware('checkacl:user->user_list');
//        Route::get('user/','UserController@index')->name('user.index');
//
//        Route::get('user/create','UserController@create')->name('user.create');
//        Route::post('user/create','UserController@store')->name('user.store');
//
//        Route::get('user/edit/{id}','UserController@edit')->name('user.edit');
//        Route::post('user/edit/{id}', 'UserController@update')->name('user.update');
//
//        Route::get('user/show/{id}', 'UserController@show')->name('user.show');
//
//        Route::get('user/destroy/{id}', 'UserController@destroy')->name('user.destroy');
        Route::resource('role', 'RoleController');

        Route::resource('project', 'ProjectController');

        Route::resource('department', 'DepartmentController');

        Route::resource('feedback', 'FeedbackController');

        Route::resource('permission', 'PermissionController');

        Route::resource('assign', 'AssignController');

        Route::resource('report', 'ReportController');

        Route::resource('task', 'TaskController');

        Route::resource('report-task', 'ReportTaskController');
    });
});

Route::get('/', 'HomeController@index')->name('home');
