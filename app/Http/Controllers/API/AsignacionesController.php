<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AsignacionesResource;
use App\Models\Asignaciones;
use App\Models\Evidencia;
use Illuminate\Http\Request;

class AsignacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Evidencia $evidencia)
    {
        return AsignacionesResource::collection(
            Asignaciones::where('evidencia_id', $evidencia->id)
                ->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
                ->paginate($request->perPage)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Evidencia $evidencia)
    {
        $asignacionData = json_decode($request->getContent(), true);
        $asignacionData['evidencia_id'] = $evidencia->id;

        $asignacion = Asignaciones::create($asignacionData);
        return new AsignacionesResource($asignacion);
    }

    /**
     * Display the specified resource.
     */
    public function show(Evidencia $evidencia, Asignaciones $asignacion)
    {
        abort_if($asignacion->evidencia_id !== $evidencia->id, 404);
        return new AsignacionesResource($asignacion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evidencia $evidencia, Asignaciones $asignacion)
    {
        abort_if($asignacion->evidencia_id !== $evidencia->id, 404);

        $asignacionData = json_decode($request->getContent(), true);
        $asignacion->update($asignacionData);

        return new AsignacionesResource($asignacion);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evidencia $evidencia, Asignaciones $asignacion)
    {
        abort_if($asignacion->evidencia_id !== $evidencia->id, 404);

        $asignacion->delete();
        return response()->json(null, 204);
    }

    public function asignacionUsuarios(Request $request, $user_id)
    {
        return AsignacionesResource::collection(
            Asignaciones::where('revisor_id', $user_id)
                ->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
                ->paginate($request->perPage)
        );
    }
}
