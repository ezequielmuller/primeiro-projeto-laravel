<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VagaController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Tem que esta logado
Route::middleware('auth')->group(function () {

    //Rota das vagas
    Route::get('/vagas', [VagaController::class, 'index'])->name('vagas.index');

    Route::get('/vagas/create', [VagaController::class, 'create'])->name('vagas.create');
    Route::post('/vagas', [VagaController::class, 'store'])->name('vagas.store');

    //Rotas Usuário
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
