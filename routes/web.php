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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('registro');
});

Route::post('/registro', 'AutoController@registro')->name('auto_registro');
Route::get('/view/registro', 'AutoController@registroView')->name('view_registro');
Route::get('/view/tabla', 'AutoController@tablaView')->name('view_tabala');