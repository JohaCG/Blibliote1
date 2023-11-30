<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;
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
Route::get('/', [AutorController::class, 'principal']);
Route::get('/indexAutor', [AutorController::class, 'index']);
Route::post('/autor', [AutorController::class, 'registrar']);
Route::put('/autor/{id}', [AutorController::class, 'actualizar']);
Route::delete('/autor/{id}', [AutorController::class, 'eliminar']);
Route::get('/autor/{id}', [AutorController::class, 'show']);
Route::get('/indexLibro', [LibroController::class, 'index']);
Route::post('/guardarLibro', [LibroController::class, 'saveLibro']);
Route::get('/datos', [LibroController::class, 'mostrar']);
Route::delete('/datos/{id}', [LibroController::class, 'eliminar']);
Route::put('/actualizarLibro/{id}', [LibroController::class, 'actualizar']);
Route::Put('/actualizar/{id}', [LibroController::class, 'updateLibro']);
Route::get('/filtrar', [LibroController::class, 'filtrar']);