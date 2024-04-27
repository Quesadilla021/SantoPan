<?php

use App\Http\Controllers\CatecoriaController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ObjetivoController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\PersonalController;
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
Route::get('/inicio',[pagesController::class, 'indexInicio'])->name('inicio');
Route::get('/ubicaciones',[pagesController::class, 'indexUbicacion'])->name('ubicaciones');
Route::get('/eventos',[pagesController::class, 'indexEventos'])->name('eventos');
Route::get('/personal',[pagesController::class, 'indexPersonal'])->name('personal');

////updatesInicio////
Route::put('/update_inicio',[InicioController::class, 'updateInicio'])->name('updateInicio');


////Objetivos////
Route::post('/agregarObjetivo',[ObjetivoController::class, 'storeObjetivo'])->name('agregarObjetivo');
Route::put('/update/inicio_objetivo',[ObjetivoController::class, 'updateInicioObjetivo'])->name('upInObjetivo');
Route::delete('/delete/objetivo/{id}',[ObjetivoController::class, 'destroyObjetivo'])->name('destroyObjetivo');

////Nosotros////
Route::post('/agregarMision',[NosotrosController::class, 'storeMision'])->name('agregarMision');
Route::put('/update/inicio_Nosotros',[NosotrosController::class, 'updateInicioNosotros'])->name('upInNosotros');
Route::get('/editNosotros_{id}',[NosotrosController::class, 'editNosotros'])->name('editarNosotros');
Route::put('/update/nosotros/{id}',[NosotrosController::class, 'updateNosotros'])->name('upNosotros');
Route::delete('/delete/nosotros/{id}',[NosotrosController::class, 'destroyNosotros'])->name('destroyNosotros');


////Menu////
Route::get('/menu',[pagesController::class, 'indexMenu'])->name('menu');
Route::get('/categorias',[pagesController::class, 'indexCategorias'])->name('categorias');
Route::post('/agregarCategoria',[CatecoriaController::class, 'storeCategoria'])->name('agregarCategoria');
Route::delete('/delete/categoria/{id}',[CatecoriaController::class, 'destroyCategoria'])->name('destroyCategoria');


Route::post('/agregarPlatillo',[PlatillosController::class, 'storePlatillo'])->name('agregarPlatillo');
Route::get('/editPlatillo_{id}',[PlatillosController::class, 'editPlatillo'])->name('editarPlatillo');
Route::put('/update/platillo/{id}',[PlatillosController::class, 'updatePlatillo'])->name('upPlatillo');
Route::delete('/delete/platillo/{id}',[PlatillosController::class, 'destroyPlatillo'])->name('destroyPlatillo');

////Reservaciones////
Route::post('/agregarReservacion',[ReservacionController::class, 'storeReservacion'])->name('agregarReservacion');
Route::get('/verSolicitud_{id}',[ReservacionController::class, 'verSolicitud'])->name('verSolicitud');
Route::put('/solicitud_rechazada_{id}',[ReservacionController::class, 'rechazarSoli'])->name('solicitudRechazada');
Route::put('/solicitud_aprobada_{id}',[ReservacionController::class, 'aprobarSoli'])->name('solicitudAprobada');

////Ubicaciones////

/////Eventos/////
Route::post('/agregarEvento',[EventoController::class, 'storeEvento'])->name('agregarEvento');
Route::put('/update/inicio_evento',[EventoController::class, 'updateInicioEvento'])->name('upInEventos');
Route::get('/editEvento_{id}',[EventoController::class, 'editEvento'])->name('editarEvento');
Route::put('/update/evento/{id}',[EventoController::class, 'updateEvento'])->name('upEvento');
Route::delete('/delete/evento/{id}',[EventoController::class, 'destroyEvento'])->name('destroyEvento');


/////Personal/////
Route::put('/update/inicio_personal',[PersonalController::class, 'updateInPersonal'])->name('upInPersonal');
Route::post('/agregarPersonal',[PersonalController::class, 'storePersonal'])->name('agregarPersonal');
Route::get('/editPersonal_{id}',[PersonalController::class, 'editPersonal'])->name('editarPersonal');
Route::put('/update/personal/{id}',[PersonalController::class, 'updatePersonal'])->name('upPersonal');
Route::delete('/delete/personal/{id}',[PersonalController::class, 'destroyPersonal'])->name('destroyPersonal');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
