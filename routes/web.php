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
    return view('route');
})->name('home');
Route::get('/route/', function () {
    return view('route');
})->name('home');



Route::get('/tickets/', function () {
    return view('tickets');
})->name('tickets');

Route::get('/about/', function () {
    return view('about');
})->name('about');

Route::get('/failed/', function () {
    return view('failed');
})->name('failed');

Route::get('/liveboard/', function () {
    return view('liveboard');
})->name('liveboard');

Route::post('route', 'routeController@getRoutes');
Route::post('liveboard', 'LiveboardController@getBoard');
