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

//route untuk memanggil view adminlte
Route::get('/adminlte/', function () {
    return view('admin.adminlte');
});

Route::get('/data/', ['as' => 'back.data', 'uses' => 'UserController@getUser']);
