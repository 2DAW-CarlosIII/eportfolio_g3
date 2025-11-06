<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hola', function()
{
    return '¡Hola mundo!';
});

Route::any('foo/bar', function()
{
    return '¡Hola mundo!';
});

// Funcion de prueba para saludar (con restriccion de solo letras y con el ? hacemos que sea opcional)
Route::get('saluda/{nombre?}', function($nombre = 'paloma')
{
    return '¡Hola ' . $nombre . '!';
}) ->where('nombre', '[A-Za-z]+');

// Función para sumar dos números (con restriccion de solo números)
Route::get('/suma/{num1}/{num2}', function($num1, $num2)
{
    $suma = $num1 + $num2;
    return "La suma de $num1 y $num2 es =  $suma";
})
->where(array('num1' => '[0-9]+', 'num2' => '[0-9]+'));


// Rutas
Route::get('/', function()
{
    return "Pantalla principal";
});

Route::get('login', function()
{
    return "Login usuario";
});
Route::get('logout', function()
{
    return "Logout usuario";
});

Route::get('familias-profesionales', function()
{
    return "Listado familias profesionales";
});

Route::get('familias-profesionales/show/{id}', function($id)
{
    return "Vista detalle familia profesional $id";
})->where('id', '[0-9]+');

Route::get('familias-profesionales/create', function()
{
    return "Añadir familia profesional";
})->where('id', '[0-9]+');

Route::get('familias-profesionales/edit/{id}', function($id)
{
    return "Modificar familia profesional $id";
})->where('id', '[0-9]+');

Route::get('perfil/{id?}', function($id = null)
{
    if($id){
        return "Visualizar el usuario de $id";
    } else {
        return "Visualizar el usuario propio";
    }
})->where('id', '[0-9]+');
