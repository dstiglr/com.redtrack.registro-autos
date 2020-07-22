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

Route::post('/registro', 'AutoController@registro')->name('auto_registro');
Route::post('/modifica/registro', 'AutoController@modificaRegistro')->name('modifica_registro');

Route::get('/', 'AutoController@registroView')->name('view_registro');
Route::get('/view/tabla', 'AutoController@tablaView')->name('view_tabala');
Route::get('/view/modifica/registro/{id}', 'AutoController@modificaRegistroView')->name('view_modifica_registro');