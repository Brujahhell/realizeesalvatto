<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/', [\App\Http\Controllers\Controller::class, 'index']);
Route::get('/cadastrar', [\App\Http\Controllers\Controller::class, 'cadastro']);
Route::post('/minhamarca', [\App\Http\Controllers\UserController::class, 'cadastrarmarca']);
Route::get('/minhamarca', [\App\Http\Controllers\UserController::class, 'maisdetalhes']);


require __DIR__ . '/auth.php';
