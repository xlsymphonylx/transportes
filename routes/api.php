<?php

use App\Http\Controllers\AccionController;
use App\Http\Controllers\BodegaController;
use App\Http\Controllers\CabezalController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PilotoController;
use App\Http\Controllers\TipoAccionController;
use App\Http\Controllers\TransportistaController;
use App\Http\Controllers\UbicacionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(CabezalController::class)->group(function () {
    Route::get('/cabezal', 'readAll');
    Route::patch('/cabezal/{id}', 'update');
    Route::post('/cabezal', 'create');
    Route::delete('/cabezal/{id}', 'delete');
});
Route::controller(UbicacionController::class)->group(function () {
    Route::get('/ubicacion', 'readAll');
    Route::patch('/ubicacion/{id}', 'update');
    Route::post('/ubicacion', 'create');
    Route::delete('/ubicacion/{id}', 'delete');
});
Route::controller(BodegaController::class)->group(function () {
    Route::get('/bodega', 'readAll');
    Route::patch('/bodega/{id}', 'update');
    Route::post('/bodega', 'create');
    Route::delete('/bodega/{id}', 'delete');
});
Route::controller(TransportistaController::class)->group(function () {
    Route::get('/transportista', 'readAll');
    Route::patch('/transportista/{id}', 'update');
    Route::post('/transportista', 'create');
    Route::delete('/transportista/{id}', 'delete');
});

Route::controller(AccionController::class)->group(function () {
    Route::get('/accion', 'readAll');
    Route::patch('/accion/{id}', 'update');
    Route::post('/accion', 'create');
    Route::delete('/accion/{id}', 'delete');
});
Route::controller(TipoAccionController::class)->group(function () {
    Route::get('/tipo-accion', 'readAll');
    Route::patch('/tipo-accion/{id}', 'update');
    Route::post('/tipo-accion', 'create');
    Route::delete('/tipo-accion/{id}', 'delete');
});
Route::controller(TipoAccionController::class)->group(function () {
    Route::get('/tipo-accion', 'readAll');
    Route::patch('/tipo-accion/{id}', 'update');
    Route::post('/tipo-accion', 'create');
    Route::delete('/tipo-accion/{id}', 'delete');
});
Route::controller(PilotoController::class)->group(function () {
    Route::get('/piloto', 'readAll');
    Route::patch('/piloto/{id}', 'update');
    Route::post('/piloto', 'create');
    Route::delete('/piloto/{id}', 'delete');
});
Route::controller(ContactoController::class)->group(function () {
    Route::get('/contacto', 'readAll');
    Route::patch('/contacto/{id}', 'update');
    Route::post('/contacto', 'create');
    Route::delete('/contacto/{id}', 'delete');
});
