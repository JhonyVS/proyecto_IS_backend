<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\NegocioController;
use App\Http\Controllers\ProductoController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categorias', [CategoriaController::class, 'index']);

Route::middleware('auth:sanctum')->post('/registro/producto', [ProductoController::class, 'store']);
Route::get('/producto/{id}', [ProductoController::class, 'show']);
// Route::post('/registro/producto', [ProductoController::class, 'store']);
// Route::post('/logout', [NegocioController::class, 'logout']);

Route::get('/destacados', [ProductoController::class, 'index']);

Route::post('/registro/negocio', [NegocioController::class, 'store']);

Route::post('/login/negocio', [NegocioController::class, 'login']);

Route::get('/images/{id}', [ImageController::class, 'show']);