<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[pagesController::class, 'index'])->name('inicio');

//////Admin/////
Route::get('/menu',[pagesController::class, 'indexMenu'])->name('menu');
Route::get('/reservaciones',[pagesController::class, 'indexReservaciones'])->name('reservaciones');
Route::get('/objetivos',[pagesController::class, 'indexObjetivos'])->name('objetivos');
Route::get('/nosotros',[pagesController::class, 'indexNosotros'])->name('nosotros');

////updatesInicio////
Route::put('/update_inicio',[InicioController::class, 'updateInicio'])->name('updateInicio');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
