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


//Routes pour les utilisateurs
Route::get('/login','UserController@login');
Route::get('/register','UserController@create');
Route::post('/login',"UserController@processlogin");
Route::post('/user','UserController@store');
Route::get('/logout','UserController@logout');


//routes pour les events
Route::get('/event/create','EventController@create');
Route::post('/event','EventController@store');
Route::get('/event','EventController@index');
Route::get('/event/idea','EventController@idea');
Route::get('/event/show{event}','EventController@show');
Route::get('/event/{event}/edit','EventController@edit');

Route::put('/event/valide/{event}','EventController@accept');
Route::put('/event/annule/{event}','EventController@annule');
Route::delete('/event/{event}','EventController@delete');

//routes pour les products
Route::get('/product','ProductController@index');
Route::get('/product/create','ProductController@create');
Route::get('/product/order','ProductController@order');

Route::post('/product','ProductController@store');
Route::delete('/product/{product}','ProductController@delete');







Route::get('/test',function(){return view('test');});
