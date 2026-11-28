<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CicloFormativoController;

Route::prefix('ciclos-formativos')
    ->name('ciclos-formativos.')
    ->controller(CicloFormativoController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show')->whereNumber('id');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit')->whereNumber('id');
        Route::post('/', 'store')->name('store');
        Route::put('/edit/{id}', 'update')->name('update')->whereNumber('id');
    });