<?php

use App\Http\Controllers\CatecoriaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ObjetivoController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\PlatillosController;
use App\Http\Controllers\ReservacionController;
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
Route::get('/reservaciones',[pagesController::class, 'indexReservaciones'])->name('reservaciones');
Route::get('/objetivos',[pagesController::class, 'indexObjetivos'])->name('objetivos');
Route::get('/nosotros',[pagesController::class, 'indexNosotros'])->name('nosotros');

////updatesInicio////
Route::put('/update_inicio',[InicioController::class, 'updateInicio'])->name('updateInicio');


////Objetivos////
Route::post('/agregarObjetivo',[ObjetivoController::class, 'storeObjetivo'])->name('agregarObjetivo');
Route::put('/update/inicio_objetivo',[ObjetivoController::class, 'updateInicioObjetivo'])->name('upInObjetivo');

////Objetivos////
Route::post('/agregarMision',[NosotrosController::class, 'storeMision'])->name('agregarMision');
Route::put('/update/inicio_Nosotros',[NosotrosController::class, 'updateInicioNosotros'])->name('upInNosotros');


////Menu////
Route::get('/menu',[pagesController::class, 'indexMenu'])->name('menu');
Route::get('/categorias',[pagesController::class, 'indexCategorias'])->name('categorias');
Route::post('/agregarCategoria',[CatecoriaController::class, 'storeCategoria'])->name('agregarCategoria');
Route::post('/agregarPlatillo',[PlatillosController::class, 'storePlatillo'])->name('agregarPlatillo');
Route::get('/editPlatillo_{id}',[PlatillosController::class, 'editPlatillo'])->name('editarPlatillo');
Route::put('/update/platillo/{id}',[PlatillosController::class, 'updatePlatillo'])->name('upPlatillo');
Route::delete('/delete/platillo/{id}',[PlatillosController::class, 'destroyPlatillo'])->name('destroyPlatillo');

////Reservaciones////
Route::post('/agregarReservacion',[ReservacionController::class, 'storeReservacion'])->name('agregarReservacion');
Route::get('/verSolicitud_{id}',[ReservacionController::class, 'verSolicitud'])->name('verSolicitud');
Route::put('/solicitud_rechazada_{id}',[ReservacionController::class, 'rechazarSoli'])->name('solicitudRechazada');
Route::put('/solicitud_aprobada_{id}',[ReservacionController::class, 'aprobarSoli'])->name('solicitudAprobada');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
