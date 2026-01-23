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

    Route::apiResource(
        'evidencias.comentarios',
        ComentariosController::class
    );

    Route::apiResource(
        'evidencias.asignaciones-revision',
        AsignacionesController::class
    );

    Route::get(
        'revisores/{revisor_id}/asignaciones-revision',
        [AsignacionesController::class, 'asignacionesPorRevisor']
    );
});

/*Route::any('/{any}', function (ServerRequestInterface $request) {
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

})->where('any', '.*');*/
