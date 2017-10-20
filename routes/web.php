<?php
use App\Http\Middleware\UsuarioActivo;
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

Route::put('actualizar/{id}', 'controllerActualizar@update')->middleware(UsuarioActivo::class);
Route::post('/Crear', 'controllerActualizar@crear')->middleware(UsuarioActivo::class);
Route::delete('delete/{id}', 'controllerActualizar@delete')->middleware(UsuarioActivo::class);
Route::put('update/{id}', 'controllerActualizar@edit')->middleware(UsuarioActivo::class);
Route::put('actualizando/{id}', 'controllerActualizar@actualizar')->middleware(UsuarioActivo::class);
Route::get('/error', 'HomeController@error');