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

# Farmets App V. 0.1.1
# this shows how you can return arrays 
Route::get('/version', function () {
    $data = [];
    $data['version'] = '0.1.1';
    return view('welcomeOrig', $data);
});

# Facades (currently errors as db isnt setup .. )
Route::get('/facades/db', function () {
    return DB::select('SELECT * from table');
});

# ENCRYPT
Route::get('/facades/encrypt', function () {
    return Crypt::encrypt('123456789');
});

# DECRYPT
Route::get('/facades/decrypt', function() {
	return Crypt::decrypt('eyJpdiI6Ik8xSUVWZ1Rxejh4UzJaUGVYSHFlMXc9PSIsInZhbHVlIjoiOFVIajJ2ODhncTBLUVJENDBcL0ZcL0Z1Wlh5aWJRcW9sNTFoSmhLSFQwMFVzPSIsIm1hYyI6IjEyNjA0ZTMxNzlkNmYyYmMzMmQxNmY5YzdhZGRkZGJlNWJhZWRhZWY1NTVjNDExNGM3OTI3Y2RlOGEzNjhmZWEifQ==');
});

# using __METHOD__ as placeholder to show where __ is coming from.
// Route::get('/', 'ContentsController@home');
// Route::get('/clients', 'ClientController@index');
// Route::get('/clients/new', 'ClientController@newClient');
// Route::post('/clients/new', 'ClientController@create');
// Route::get('/clients/{client_id}', 'ClientController@show');
// Route::post('/clients/{client_id}', 'ClientController@modify');

// Route::get('/reservations/{client_id}', 'RoomsController@checkAvailableRooms');
// Route::post('/reservations/{client_id}', 'RoomsController@checkAvailableRooms');

// Route::get('/book/room/{client_id}/{room_id}/{date_in}/{date_out}', 'ReservationsController@bookRoom');






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