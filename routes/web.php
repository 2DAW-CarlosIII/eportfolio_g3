<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('hola', function() {
    return '¡Hola mundo!';
});

Route::any('foo/bar', function() {
    return '¡Hola mundo!';
});

Route::get('login', function() {
    return view('auth.login');
});

Route::get('logout', function() {
    return "Logout usuario";
});

Route::get('familias-profesionales', function () {
    return view('familias_profesionales.index');
});

Route::get('familias-profesionales/show/{id}', function($id) {
    return view('familias_profesionales.show', array('id'=>$id));

})->where('id', '[0-9]+');

Route::get('familias-profesionales/create', function() {
    return view('familias_profesionales.create');

})->where('id', '[0-9]+');

Route::get('familias-profesionales/edit/{id}', function($id) {
    return view('familias_profesionales.edit');

})->where('id', '[0-9]+');

Route::get('perfil/{id?}', function($id = null) {
    if($id){
        return "Visualizar el perfil de $id";
    } else {
        return "Visualizar el perfil propio";
    }
})->where('id', '[0-9]+');

// ----------------------------------------
Route::prefix('familias-profesionales')->group(function () {
   Route::get('/', [FamiliasProfesionalesController::class, 'getIndex']);


   Route::get('create', [FamiliasProfesionalesController::class, 'getCreate']);


   Route::get('show/{id}', [FamiliasProfesionalesController::class, 'getShow']) -> where('id', '[0-9]+');


   Route::get('edit/{id}', [FamiliasProfesionalesController::class, 'getEdit']) -> where('id', '[0-9]+');

   Route::post('store', [FamiliasProfesionalesController::class, 'store']);

   Route::put('update/{id}', [FamiliasProfesionalesController::class, 'update']) -> where('id', '[0-9]+');
});
