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
use App\Customer;
Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    $users = \App\User::find(7);
    foreach ($users->porjects as $projects)
    {
        echo $projects->name;
    }

});

Route::get('admin', function () {
	return view('admin.layout.index');
});

//Route::resource('user','UserController');


Route::group(['prefix'=>'admin'], function () {

    Route::group(['prefix'=>'user'], function (){
        Route::get('list/user', 'ListUser@listUser');
        Route::get('edit/user', 'ListUser@editUser');
        Route::get('delete/user', 'ListUser@deleteUser');
    });

});

Route::get('/home','HomeController@getIndex');

Route::get('login', 'LoginController@getLogin');
Route::post('login', 'LoginController@postLogin');

Route::get('register', 'Auth\RegisterController@getRegister');
Route::post('register', 'Auth\RegisterController@postRegister');

Route::get('logout', 'Auth\LogoutController@postRegister');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
