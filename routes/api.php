<?php

use App\Http\Controllers\CabezalController;
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
