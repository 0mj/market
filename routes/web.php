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
# -------------- Laravel basics Linkedin Learning -----------

# Dependency Injection 
Route::get('/di', 'ClientController@di'); 

# simple response..  returns php array and browser turns to JSON
# this is an oversimplified version of an API..
Route::get('/returnArray', function () {
    $ra = [];
    $ra['author'] = 'Matthew Jamison';
    $ra['version'] = '0.1.1';
    return $ra;
});



# -------------- laravel generic route --------------- 
Route::get('/', function () {
    return view('welcome');
})->name('welcome.index');

# --------------- pluralsight getting started w laravel --------------
Route::get('blog', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('post/{id}', function () {
    return view('blog.post');
})->name('blog.post');

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

		Route::get('admin', function () {
		    return view('admin.index');
		})->name('admin.index');

		Route::get('create', function () {
		    return view('admin.create');
		})->name('admin.create');

		// Route::post('create', function() {
		//     return "It works!";
		// })->name('admin.create');

Route::get('edit/{id}', function () {
    return view('admin.edit');
})->name('admin.edit');

// Route::get('post/{id}', function () {
//     return view('blog.post');
// });

# --------------- code school ------------------- 
// Route::get('/', 'MarketController@index');
Route::get('markets', 'MarketController@index');
Route::resource('markets', 'MarketController');

// Route::get('markets', function () {
//     return view('markets.index');
// })->name('markets.index');


Route::get('farms', 'FarmController@index');
Route::resource('farms', 'FarmController');


Route::get('pongers', 'PongerController@index');
Route::resource('pongers', 'PongerController');