<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Publicar;
use App\Http\Controllers\PublicarController;
use App\Http\Controllers\EditarNoticiaController;

Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/publicar', function () {
        return view('livewire.publicar');
    })->name('publicar');

    Route::get('/editar-noticia/{id}', function () {
        return view('livewire.editar-noticia');
    })->name('editar_noticia');

    Route::post('/publish', [PublicarController::class, 'publish'])->name('publish');




    // Route::get('/editar-noticia/{id}', [EditarNoticiaController::class, 'edit'])->name('editar_noticia');




});
