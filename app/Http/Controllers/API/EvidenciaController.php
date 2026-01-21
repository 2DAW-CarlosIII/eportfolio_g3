<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CriteriosEvaluacionResource;
use App\Http\Resources\EvidenciaResource;
use App\Models\CriterioEvaluacion;
use App\Models\Evidencia;
use App\Models\Tarea;
use Illuminate\Http\Request;

class EvidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Tarea $tarea)
    {
        $criterios = CriterioEvaluacion::find($tarea->criterios_evaluacion_id);
        return EvidenciaResource::collection(
            Evidencia::where('criterio_evaluacion_id', $criterios->id)
                ->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page));
    }

    public function showUserEvidencias(Request $request, $parent_id)
    {
        return EvidenciaResource::collection(
            Evidencia::where('estudiante_id', $parent_id)
                ->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Tarea $tarea)
    {
        // Obtener el criterio de evaluación asociado a la tarea introducida
        $criterio = CriterioEvaluacion::find($tarea->criterios_evaluacion_id);

        $evidencia = json_decode($request->getContent(), true);
        $evidencia['criterio_evaluacion_id'] = $criterio->id;
        $evidencia = Evidencia::create($evidencia);
        return new EvidenciaResource($evidencia);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarea $tarea, Evidencia $evidencia)
    {
        $criterio = CriterioEvaluacion::find($tarea->criterios_evaluacion_id);
        abort_if($evidencia->criterio_evaluacion_id !== $criterio->id, 404, "No se encuentra la evidencia");
        return new EvidenciaResource($evidencia);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarea $tarea, Evidencia $evidencia)
    {
        $criterio = CriterioEvaluacion::find($tarea->criterios_evaluacion_id);
        abort_if($evidencia->criterio_evaluacion_id !== $criterio->id, 404, "No se encuentra la evidencia");

        $evidenciaData = json_decode($request->getContent(), true);
        $evidencia->update($evidenciaData);
        return new EvidenciaResource($evidencia);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarea $tarea, Evidencia $evidencia)
    {
        try {
            $criterio = CriterioEvaluacion::find($tarea->criterios_evaluacion_id);
            abort_if($evidencia->criterio_evaluacion_id !== $criterio->id, 404, "No se encuentra la evidencia");
            $evidencia->delete();
            return response()->json(['message' => 'Evidencia eliminada correctamente.'], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
