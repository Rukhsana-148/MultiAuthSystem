<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/dashboard', [AuthController:: class, "welcome"]);
Route::get('/', [AuthController:: class, "welcome"]);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/nothing', function () {
        return view('dashboard');
    })->name('dashboard');
});
