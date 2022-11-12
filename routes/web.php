<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitioController;


Route::get('/', [SitioController::class, 'index']);
Route::get('/contacto', [SitioController::class, 'contacto']);
Route::get('/contacto/{codigo}', [SitioController::class, 'contacto']);
Route::post('/contacto-recibe', [SitioController::class, 'store']);