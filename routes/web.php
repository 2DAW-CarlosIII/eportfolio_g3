<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// ----------------------------------------
Route::get('login', function () {
<<<<<<< HEAD
    return view('auth.login');
=======
    return view('auth/login');
>>>>>>> 1f40044c643565f9932617e5f5e9eefc57bf4cef
});
Route::get('logout', function () {
    return "Logout usuario";
});


// ----------------------------------------
Route::prefix('familias-profesionales')->group(function () {
    Route::get('/', function () {
        return view('familias-profesionales.index');
    });

    Route::get('create', function () {
        return view('familias-profesionales.create');
    });

    Route::get('show/{id}', function ($id) {
<<<<<<< HEAD
        return view('familias-profesionales.show', array('id'=> $id));
    }) -> where('id', '[0-9]+');

    Route::get('edit/{id}', function ($id) {
        return view('familias-profesionales.edit', array('id'=> $id));
=======
        return view('familias-profesionales.show', array('id' => $id));
    }) -> where('id', '[0-9]+');

    Route::get('edit/{id}', function ($id) {
        return view('familias-profesionales.edit', array('id' => $id));
>>>>>>> 1f40044c643565f9932617e5f5e9eefc57bf4cef
    }) -> where('id', '[0-9]+');
});


// ----------------------------------------
Route::get('perfil/{id?}', function ($id = null) {
    if ($id == null)
        return 'Visualizar el usuario propio';
    else
        return 'Visualizar el usuario de ' . $id;
}) -> where('id', '[0-9]+');

