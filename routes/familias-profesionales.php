<?php

use App\Http\Controllers\FamiliaProfesionalController;
use Illuminate\Support\Facades\Route;

Route::prefix('familias-profesionales')
    ->name('familias-profesionales.')
    ->controller(FamiliaProfesionalController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->whereNumber('id')->name('show');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->whereNumber('id')->name('edit');
        Route::put('/edit/{id}', 'update')->whereNumber('id')->name('update');
    });
