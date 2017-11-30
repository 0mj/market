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

# --------------- pluralsight getting started w laravel --------------
Route::get('/', function () {
    return view('welcome');
});


Route::get('post/{id}', function () {
    return view('blog.post');
});

# --------------- code school ------------------- 
// Route::get('/', 'MarketController@index');
// Route::resource('markets', 'MarketController');

# NOT COMPLETE..
// Route::get('/', 'FarmController@index');
// Route::resource('farms', 'FarmController');
