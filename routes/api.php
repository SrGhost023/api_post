<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacionController;

Route::get('/publicacion', [PublicacionController::class, 'ListarTodas']);
Route::get('/publicacion/{d}', [PublicacionController::class, 'ListarUna']);
Route::post('/publicacion', [PublicacionController::class, 'Crear']);
Route::put('/publicacion/{d}', [PublicacionController::class, 'Modificar']);
Route::delete('/publicacion', [PublicacionController::class, 'Eliminar']);