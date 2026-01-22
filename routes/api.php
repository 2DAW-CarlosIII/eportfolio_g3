<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Psr\Http\Message\ServerRequestInterface;
use Tqdev\PhpCrudApi\Api;
use Tqdev\PhpCrudApi\Config\Config;
use App\Http\Controllers\API\ComentariosController;
use App\Http\Controllers\API\AsignacionesController;
use App\Http\Controllers\API\CriteriosTareasController;
use App\Http\Controllers\EvidenciasController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    // ------------------------------------------------
    // COMENTARIOS
    Route::apiResource('evidencias.comentarios', ComentariosController::class)
        ->parameters([
            'evidencias' => 'evidencia_id',
            'comentarios' => 'comentario_id'
        ]);

    // ------------------------------------------------
    // ASIGNACIONES
    Route::apiResource('evidencias.asignaciones-revision', AsignacionesController::class)
        ->parameters([
            'evidencias' => 'evidencias_id',
            'asignaciones-revision' => 'asignacion-revision_id'
        ]);

    // ------------------------------------------------
    // USER-ASIGNACIONES
    Route::get('users/{user_id}/asignaciones-revision', [AsignacionesController::class, 'asignacionUsuarios']);
});

Route::any('/{any}', function (ServerRequestInterface $request) {
    $config = new Config([
        'address'  => env('DB_HOST', '127.0.0.1'),
        'database' => env('DB_DATABASE', 'forge'),
        'username' => env('DB_USERNAME', 'forge'),
        'password' => env('DB_PASSWORD', ''),
        'basePath' => '/api',
    ]);

    $api = new Api($config);
    $response = $api->handle($request);

    try {
        $records = json_decode($response->getBody()->getContents())->records;
        $response = response()->json(
            $records,
            200,
            ['X-Total-Count' => count($records)]
        );
    } catch (\Throwable $th) {
    }

    return $response;

})->where('any', '.*');
