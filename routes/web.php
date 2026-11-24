<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::prefix('evidencias')->name('evidencias.')->group(function(){
    Route::get('/', function () { 
        return view ('index');
        })->name('index');

        Route::get('show/{id}', function ($id) { 
        return view('show', ['id' => $id]);
        })->name('show')->whereNumber('id');

        Route::get('create', function () { 
        return view('create');
        })->name('create');

        Route::get('edit/{id}', function ($id) { 
        return view('edit', ['id' => $id]);
        })->name('edit')->whereNumber('id');
});

Route::get('perfil/{id?}', function ($id = null){
    return view('perfil', ['id' => $id]);
 })->whereNumber('id')->name('perfil');


 Route::get('/acerca', function (){
     return [
        'aplicacion' => config('app.name'),
        'centro' => config('eportfolio.centro')];
 })->name('acerca');

Route::get('/pruebas', function () {
    return view('pruebas');
});