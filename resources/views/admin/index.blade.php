@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.create') }}" class="btn btn-success">New Post</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <p><strong>Learning Laravel</strong> <a href="{{ route('admin.edit', ['id' => 1]) }}">Edit</a></p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <code>artisan route:list</code>
            <pre>
+--------+-----------+-----------------------+-----------------+-----------------------------------------------+--------------+
| Domain | Method    | URI                   | Name            | Action                                        | Middleware   |
+--------+-----------+-----------------------+-----------------+-----------------------------------------------+--------------+
|        | GET|HEAD  | /                     | welcome.index   | Closure                                       | web          |
|        | GET|HEAD  | about                 | other.about     | Closure                                       | web          |
|        | GET|HEAD  | admin                 | admin.index     | Closure                                       | web          |
|        | GET|HEAD  | api/user              |                 | Closure                                       | api,auth:api |
|        | GET|HEAD  | blog                  | blog.index      | Closure                                       | web          |
|        | GET|HEAD  | create                | admin.create    | Closure                                       | web          |
|        | GET|HEAD  | edit/{id}             | admin.edit      | Closure                                       | web          |
|        | GET|HEAD  | facades/db            |                 | Closure                                       | web          |
|        | GET|HEAD  | facades/decrypt       |                 | Closure                                       | web          |
|        | GET|HEAD  | facades/encrypt       |                 | Closure                                       | web          |
|        | GET|HEAD  | farms                 | farms.index     | App\Http\Controllers\FarmController@index     | web          |
|        | POST      | farms                 | farms.store     | App\Http\Controllers\FarmController@store     | web          |
|        | GET|HEAD  | farms/create          | farms.create    | App\Http\Controllers\FarmController@create    | web          |
|        | GET|HEAD  | farms/{farm}          | farms.show      | App\Http\Controllers\FarmController@show      | web          |
|        | DELETE    | farms/{farm}          | farms.destroy   | App\Http\Controllers\FarmController@destroy   | web          |
|        | PUT|PATCH | farms/{farm}          | farms.update    | App\Http\Controllers\FarmController@update    | web          |
|        | GET|HEAD  | farms/{farm}/edit     | farms.edit      | App\Http\Controllers\FarmController@edit      | web          |
|        | GET|HEAD  | markets               | markets.index   | App\Http\Controllers\MarketController@index   | web          |
|        | POST      | markets               | markets.store   | App\Http\Controllers\MarketController@store   | web          |
|        | GET|HEAD  | markets/create        | markets.create  | App\Http\Controllers\MarketController@create  | web          |
|        | GET|HEAD  | markets/{market}      | markets.show    | App\Http\Controllers\MarketController@show    | web          |
|        | PUT|PATCH | markets/{market}      | markets.update  | App\Http\Controllers\MarketController@update  | web          |
|        | DELETE    | markets/{market}      | markets.destroy | App\Http\Controllers\MarketController@destroy | web          |
|        | GET|HEAD  | markets/{market}/edit | markets.edit    | App\Http\Controllers\MarketController@edit    | web          |
|        | GET|HEAD  | pongers               | pongers.index   | App\Http\Controllers\PongerController@index   | web          |
|        | POST      | pongers               | pongers.store   | App\Http\Controllers\PongerController@store   | web          |
|        | GET|HEAD  | pongers/create        | pongers.create  | App\Http\Controllers\PongerController@create  | web          |
|        | GET|HEAD  | pongers/{ponger}      | pongers.show    | App\Http\Controllers\PongerController@show    | web          |
|        | PUT|PATCH | pongers/{ponger}      | pongers.update  | App\Http\Controllers\PongerController@update  | web          |
|        | DELETE    | pongers/{ponger}      | pongers.destroy | App\Http\Controllers\PongerController@destroy | web          |
|        | GET|HEAD  | pongers/{ponger}/edit | pongers.edit    | App\Http\Controllers\PongerController@edit    | web          |
|        | GET|HEAD  | post/{id}             | blog.post       | Closure                                       | web          |
|        | GET|HEAD  | returnArray           |                 | Closure                                       | web          |
|        | GET|HEAD  | version               |                 | Closure                                       | web          |
+--------+-----------+-----------------------+-----------------+-----------------------------------------------+--------------+

            </pre>            
        </div>

    </div>
@endsection