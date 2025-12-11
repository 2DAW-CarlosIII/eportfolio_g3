<?php

use App\Http\Controllers\CiclosFormativosController;
use App\Http\Controllers\CriteriosEvaluacionController;
use App\Http\Controllers\FamiliasProfesionalesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResultadosAprendizajesController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('familias-profesionales')->group(function () {
   Route::get('/', [FamiliasProfesionalesController::class, 'getIndex'])->name('home');
   Route::get('create', [FamiliasProfesionalesController::class, 'getCreate']);
   Route::get('show/{id}', [FamiliasProfesionalesController::class, 'getShow']) -> where('id', '[0-9]+');
   Route::get('edit/{id}', [FamiliasProfesionalesController::class, 'getEdit']) -> where('id', '[0-9]+');
   Route::get('show/{id}', [FamiliasProfesionalesController::class, 'getShow'])->where('id', '[0-9]+');
   Route::get('edit/{id}', [FamiliasProfesionalesController::class, 'getEdit'])->where('id', '[0-9]+');

   Route::post('store', [FamiliasProfesionalesController::class, 'store']);
   Route::put('update/{id}', [FamiliasProfesionalesController::class, 'update']) -> where('id', '[0-9]+');
   Route::put('update/{id}', [FamiliasProfesionalesController::class, 'update'])->where('id', '[0-9]+');
});


// ----------------------------------------
Route::prefix('criterios-evaluacion')->group(function () {
   Route::get('/', [CriteriosEvaluacionController::class, 'getIndex']);
   Route::get('create', [CriteriosEvaluacionController::class, 'getCreate']);
   Route::get('show/{id}', [CriteriosEvaluacionController::class, 'getShow']) -> where('id', '[0-9]+');
   Route::get('edit/{id}', [CriteriosEvaluacionController::class, 'getEdit']) -> where('id', '[0-9]+');
   Route::get('show/{id}', [CriteriosEvaluacionController::class, 'getShow'])->where('id', '[0-9]+');
   Route::get('edit/{id}', [CriteriosEvaluacionController::class, 'getEdit'])->where('id', '[0-9]+');

   Route::post('store', [CriteriosEvaluacionController::class, 'store']);
   Route::put('update/{id}', [CriteriosEvaluacionController::class, 'update']) -> where('id', '[0-9]+');
   Route::put('update/{id}', [CriteriosEvaluacionController::class, 'update'])->where('id', '[0-9]+');
});


// ----------------------------------------
Route::prefix('ciclos-formativos')->group(function () {
   Route::get('/', [CiclosFormativosController::class, 'getIndex']);
   Route::get('create', [CiclosFormativosController::class, 'getCreate']);
   Route::get('show/{id}', [CiclosFormativosController::class, 'getShow']) -> where('id', '[0-9]+');
   Route::get('edit/{id}', [CiclosFormativosController::class, 'getEdit']) -> where('id', '[0-9]+');
   Route::get('show/{id}', [CiclosFormativosController::class, 'getShow'])->where('id', '[0-9]+');
   Route::get('edit/{id}', [CiclosFormativosController::class, 'getEdit'])->where('id', '[0-9]+');

   Route::post('store', [CiclosFormativosController::class, 'store']);
   Route::put('update/{id}', [CiclosFormativosController::class, 'update']) -> where('id', '[0-9]+');
   Route::put('update/{id}', [CiclosFormativosController::class, 'update'])->where('id', '[0-9]+');
});


// ----------------------------------------
Route::prefix('resultados-aprendizaje')->group(function () {
   Route::get('/', [ResultadosAprendizajesController::class, 'getIndex']);
   Route::get('create', [ResultadosAprendizajesController::class, 'getCreate']);
   Route::get('show/{id}', [ResultadosAprendizajesController::class, 'getShow']) -> where('id', '[0-9]+');
   Route::get('edit/{id}', [ResultadosAprendizajesController::class, 'getEdit']) -> where('id', '[0-9]+');
   Route::get('show/{id}', [ResultadosAprendizajesController::class, 'getShow'])->where('id', '[0-9]+');
   Route::get('edit/{id}', [ResultadosAprendizajesController::class, 'getEdit'])->where('id', '[0-9]+');

   Route::post('store', [ResultadosAprendizajesController::class, 'store']);
   Route::put('update/{id}', [ResultadosAprendizajesController::class, 'update']) -> where('id', '[0-9]+');
   Route::post('store', [ResultadosAprendizajesController::class, 'postCreate']);
   Route::put('update/{id}', [ResultadosAprendizajesController::class, 'putCreate'])->where('id', '[0-9]+');
});
