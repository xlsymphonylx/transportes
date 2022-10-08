<?php

use App\Http\Controllers\BodegaController;
use App\Http\Controllers\CabezalController;
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