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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tour', function () {
    return view('tour');
});

Route::get('/hotel', function () {
    return view('hotel');
});

Route::get('/blog', 'BlogController@index');
Route::get('/blog/create', 'BlogController@create');
Route::post('/blog', 'BlogController@store');
Route::get('/blog/{id}', 'BlogController@show');

Route::post('/comment', 'CommentController@store');

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/hotel/{hotel}', 'HotelControler@getHotel');
Route::post('/hotel/{hotel}', 'HotelControler@setSales');

Route::get('/test', 'HotelControler@test');
Route::post('/test', 'HotelControler@testpost')->name('test.post');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
