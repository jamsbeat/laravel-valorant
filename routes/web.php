<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/admin', 'admin');

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::controller(AgentController::class)->group(function () {
    Route::get('/agents', 'index');
    Route::get('/agents/{agent}', 'show');
});

Route::controller(MapController::class)->group(function () {
    Route::get('/maps','index');
});
