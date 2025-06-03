<?php

use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::view('/login', 'welcome')->name('login.form');   // só mostra a tela

Route::post('/login', [AuthController::class, 'auth'])->name('login.auth');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show-colaborador/{colaborador}', [ColaboradorController::class, 'show'])->name('colaborador.show');

Route::get('/create-colaborador', [ColaboradorController::class, 'create'])->name('colaborador.create');

Route::post('/store-colaborador', [ColaboradorController::class, 'store'])->name('colaborador.store');

Route::get('/edit-colaborador/{colaborador}', [ColaboradorController::class, 'edit'])->name('colaborador.edit');

Route::put('/update-colaborador/{colaborador}', [ColaboradorController::class, 'update'])->name('colaborador.update');

Route::get('/destroy-colaborador/{colaborador}', [ColaboradorController::class, 'destroy'])->name('colaborador.destroy');