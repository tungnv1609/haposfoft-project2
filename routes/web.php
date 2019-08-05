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
    $customers = Customer::find(1);
    // foreach ($customers as $key => $value) {
    //     echo $value;
    // }
    foreach ($customers -> projects as $projects) {
        echo $projects->name;
    }
});


