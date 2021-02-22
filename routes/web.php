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

Route::get('/user', function () {
    return "<h1>HEllo World</h1>";
});

Route::get('/user1/{name}', function () {
    return view('user');
});

// Route::get('/home', function () {
//     return redirect("/user");
// });

Route::get('/post/{id?}/{name?}', function ($id=null, $name="Meiram") {
    return "Your ID is:  " .$id . "<br>   My nickname is: " .$name;
// })->where('id', '[\d]+');
});


