<?php

use App\Http\Controllers\ProvinciaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProvinciaController::class, 'listar']);
