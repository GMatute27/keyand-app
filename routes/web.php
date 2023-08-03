<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LoginController;
use App\Models\Categoria;

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
/*Route::get('/productos', function () {
    return view('productos.index');
});
Route::get('/productos/nuevo',[ProductoController::class,'create']);*/

Route::resource('productos',ProductoController::class)->middleware('auth');

Route::resource('categoria',CategoriaController::class)->middleware('auth');
Route::view('/home',"home")->name('home')->middleware('auth');
Route::view('/login',"login")->name('login');
Route::view('/registro',"register")->name('registro');
Route::post('/validar-registro',[LoginController::class,'register'])->name('/validar-registro');
Route::post('/inicia-sesion',[LoginController::class,'login'])->name('/inicia-sesion');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

