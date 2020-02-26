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
    return view('welcome');
});
Route::get('/home-page', function () {
    return view('home-page');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/get-start', function () {
    return view('get-start');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::resource('/documents', 'PostController');
//contact
Route::get('insert','contactController@insertform');
Route::post('create','contactController@insert');
//get start controller
Route::get('get', 'GetstartController@get');
Route::post('start', 'GetstartController@start');

//security authentication
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//login
Route::get('/login', function () {
    return view('login');
});
Route::post('/logins', "LoginController@formLogin");
//logout
Route::get('/logout', function () {
    return view('logout');
});
Route::get('/delete', 'GetstartController@logout');


Route::get('/products', 'ProductController@index')->name('index');
Route::get('/products/{id}/show', 'ProductController@show')->name('show');
Route::get('/product/{id}/edit','ProductController@edit')->name('edit');
Route::get('/product/{id}/delete','ProductController@destroy')->name('destroy');
Route::get('/create','ProductController@create')->name('create');
Route::post('/create','ProductController@store')->name('store');
Route::post('/product/update','ProductController@update')->name('update');
