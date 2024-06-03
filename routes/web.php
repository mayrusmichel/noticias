<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Publicar;
use App\Http\Controllers\PublicarController;
use App\Http\Controllers\EditarNoticiaController;
use App\Models\Noticia;

Route::get('/', function () {
    return view('home');
})->name('public.home');


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

    Route::get('/editar-noticia/{id}', function ($id) {
        $noticia = Noticia::findOrFail($id);
        return view('livewire.editar-noticia', ['noticia' => $noticia]);
    })->name('editar-noticia');


    Route::post('/salvar-noticia/{id}', [EditarNoticiaController::class, 'save'])->name('salvar-noticia');


    Route::post('/publish', [PublicarController::class, 'publish'])->name('publish');




    // Route::get('/editar-noticia/{id}', [EditarNoticiaController::class, 'edit'])->name('editar_noticia');




});
