<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AsignacionesResource;
use App\Models\Asignaciones;
use App\Models\Evidencia;
use Illuminate\Http\Request;

class AsignacionesController extends Controller
{
    public function index(Request $request, Evidencia $evidencia)
    {
        return AsignacionesResource::collection(
            Asignaciones::where('evidencia_id', $evidencia->id)
                ->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
                ->paginate($request->perPage)
        );
    }

    public function store(Request $request, Evidencia $evidencia)
    {
        $asignacionData = json_decode($request->getContent(), true);
        $asignacionData['evidencia_id'] = $evidencia->id;

        $asignacion = Asignaciones::create($asignacionData);
        return new AsignacionesResource($asignacion);
    }

    public function show(Evidencia $evidencia, Asignaciones $asignaciones_revision)
    {
        abort_if($asignaciones_revision->evidencia_id !== $evidencia->id, 404);
        return new AsignacionesResource($asignaciones_revision);
    }

    public function update(Request $request, Evidencia $evidencia, Asignaciones $asignaciones_revision)
    {
        abort_if($asignaciones_revision->evidencia_id !== $evidencia->id, 404);
        $asignacionData = json_decode($request->getContent(), true);
        $asignaciones_revision->update($asignacionData);
        return new AsignacionesResource($asignaciones_revision);
    }

    public function destroy(Evidencia $evidencia, Asignaciones $asignaciones_revision)
    {
        try {
            abort_if($asignaciones_revision->evidencia_id !== $evidencia->id, 404);
            $asignaciones_revision->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }

    public function asignacionUsuarios(Request $request, $user_id)
    {
        return AsignacionesResource::collection(
            Asignaciones::where('asignado_por_id', $user_id)
                ->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
                ->paginate($request->per_page)
        );
    }
}
