<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotoristasController;
use App\Http\Controllers\UnidadesController;
use App\Http\Controllers\RotacionesController;
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

Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('motoristas', MotoristasController::class);
Route::resource('unidades', UnidadesController::class);
Route::resource('rotaciones', RotacionesController::class);


