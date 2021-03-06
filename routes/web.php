<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/tentang',function(){
	return view('about');
});

Route::get('/login', function(){
	return view('login');
});

Route::post('/login', 'LoginController@authenticate');


Route::get('/aboutCon','IndexController@about');

Route::get('contoh',function (){
	return 'Hello World';
});

Route::get('user/{id}',function ($id){
	return 'User ' .$id;
});

Route::get('register','RegisterController@index');
Route::post('register','RegisterController@store');




