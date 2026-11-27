<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;

Route::get('/', HomeController::class);

require __DIR__ . '/modulos-formativos.php';

require __DIR__ . '/evidencias.php';

Route::get('/perfil/{id?}', PerfilController::class)->name('perfil')->whereNumber('id');

 Route::get('/acerca', function (){
     return [
        'aplicacion' => config('app.name'),
        'centro' => config('eportfolio.centro')];
 })->name('acerca');

Route::get('/pruebas', function () {
    return view('pruebas');
});
require __DIR__.'/familias-profesionales.php';

require __DIR__.'/ciclos-formativos.php';

Route::get('/prueba-mensaje', function(){
    return redirect()->route('evidencias.index')->with('mensaje', 'Esto es un mensaje de prueba');
});