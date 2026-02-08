<?php

use Illuminate\Support\Facades\Route;

// Ruta sin middleware de sesión para la página estática
Route::middleware([])->get('/', function () {
    return view('welcome');
});
