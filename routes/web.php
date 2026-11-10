<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login']);

Route::post('/login', [PageController::class, 'prosesLogin']);

Route::get('/dashboard', [PageController::class, 'dashboard'])
    ->name('dashboard');

Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);

Route::get('/profile', [PageController::class, 'profile']);
