<?php

use App\Http\Controllers\AccionController;
use App\Http\Controllers\AuthController;
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

Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout');
    Route::get('/userInfo', 'userInfo')->middleware('auth:sanctum');
    Route::get('/users', 'getAll')->middleware('auth:sanctum');
});

Route::controller(CabezalController::class)->middleware('auth:sanctum')->group(function () {
    Route::get('/cabezal', 'readAll');
    Route::patch('/cabezal/{id}', 'update');
    Route::get('/cabezal/{id}', 'readOne');
    Route::post('/cabezal', 'create');
    Route::delete('/cabezal/{id}', 'delete');
});
Route::controller(UbicacionController::class)->middleware('auth:sanctum')->group(function () {
    Route::get('/ubicacion', 'readAll');
    Route::get('/ubicacion/{id}', 'readOne');
    Route::patch('/ubicacion/{id}', 'update');
    Route::post('/ubicacion', 'create');
    Route::delete('/ubicacion/{id}', 'delete');
});
Route::controller(BodegaController::class)->middleware('auth:sanctum')->group(function () {
    Route::get('/bodega', 'readAll');
    Route::get('/bodega/{id}', 'readOne');
    Route::patch('/bodega/{id}', 'update');
    Route::post('/bodega', 'create');
    Route::delete('/bodega/{id}', 'delete');
});
Route::controller(TransportistaController::class)->middleware('auth:sanctum')->group(function () {
    Route::get('/transportista', 'readAll');
    Route::get('/transportista/{id}', 'readOne');
    Route::patch('/transportista/{id}', 'update');
    Route::post('/transportista', 'create');
    Route::delete('/transportista/{id}', 'delete');
});

Route::controller(AccionController::class)->middleware('auth:sanctum')->group(function () {
    Route::get('/accion', 'readAll');
    Route::get('/accion/{id}', 'readOne');
    Route::patch('/accion/{id}', 'update');
    Route::post('/accion', 'create');
    Route::delete('/accion/{id}', 'delete');
});
Route::controller(TipoAccionController::class)->middleware('auth:sanctum')->group(function () {
    Route::get('/tipo-accion', 'readAll');
    Route::get('/tipo-accion/{id}', 'readOne');
    Route::patch('/tipo-accion/{id}', 'update');
    Route::post('/tipo-accion', 'create');
    Route::delete('/tipo-accion/{id}', 'delete');
});
Route::controller(PilotoController::class)->middleware('auth:sanctum')->group(function () {
    Route::get('/piloto', 'readAll');
    Route::get('/piloto/{id}', 'readOne');
    Route::patch('/piloto/{id}', 'update');
    Route::post('/piloto', 'create');
    Route::delete('/piloto/{id}', 'delete');
});
Route::controller(ContactoController::class)->middleware('auth:sanctum')->group(function () {
    Route::get('/contacto', 'readAll');
    Route::get('/contacto/{id}', 'readOne');
    Route::patch('/contacto/{id}', 'update');
    Route::post('/contacto', 'create');
    Route::delete('/contacto/{id}', 'delete');
});
