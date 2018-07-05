<?php

use App\User;
use App\Http\Resources\User as UserResource;

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
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/{id}', function ($id) {
    return new UserResource(User::find($id));
});

Route::get('/all_user', function () {
    return UserResource::collection(User::all());
});
