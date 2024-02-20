<?php

use App\http\Controllers\ProyectosController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('proyecto', ProyectosController::class);

Route::get('/inicio',[ProyectosController::class,'index'])->name('index.index');
Route::get('/crear',[ProyectosController::class,'create'])->name('crea.create');
Route::get('/edit/{id}',[ProyectosController::class,'edit'])->name('editar.edit');
Route::put('/actualizar/{id}',[ProyectosController::class,'update'])->name('update.update');
Route::post('/guardar',[ProyectosController::class,'store'])->name('guardar.store');

Route::delete('/destroy/{id}', [ProyectosController::class,'destroy'])->name('show.destroy');

