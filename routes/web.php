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
    return view('welcome2'); // return view('welcome');
})->name('welcome');


Route::get('/user/{name}', function ($name) {
    return view('user');
});

Route::get('/home', function () {
    return redirect("/user");
});

Route::get('/post/{id?}/{name?}', function ($id=null, $name1="Meirambek") {
    return "Your ID is:  " .$id . "<br>   My nickname is: " .$name1;
// })->where('id', '[\d]+');
});

Route::get('/miko', function () {
    return "Helo World";
});

