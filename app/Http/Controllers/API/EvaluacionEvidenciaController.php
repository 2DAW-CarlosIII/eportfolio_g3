<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\EvaluacionEvidenciaResource;
use App\Models\EvaluacionEvidencia;
use App\Models\Evidencia;
use Illuminate\Http\Request;

class EvaluacionEvidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Evidencia $evidencia)
    {
        return EvaluacionEvidenciaResource::collection(
            EvaluacionEvidencia::where('evidencia_id', $evidencia->id)
                ->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Evidencia $evidencia)
    {
        // Usuario dueño de la evidencia
        $user = Evidencia::find($evidencia->estudiante_id);

        $evaluacionEvidencia = json_decode($request->getContent(), true);
        $evaluacionEvidencia['evidencia_id'] = $evidencia->id;
        $evaluacionEvidencia['user_id'] = $user->id;
        $evaluacionEvidencia = EvaluacionEvidencia::create($evaluacionEvidencia);
        return new EvaluacionEvidenciaResource($evaluacionEvidencia);
    }

    /**
     * Display the specified resource.
     */
    public function show(Evidencia $evidencia, EvaluacionEvidencia $evaluacionEvidencia)
    {
        abort_if($evaluacionEvidencia->evidencia_id !== $evidencia->id, 404, "No se encuentra la evidencia");
        return new EvaluacionEvidenciaResource($evaluacionEvidencia);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evidencia $evidencia, EvaluacionEvidencia $evaluacionEvidencia)
    {
        abort_if($evaluacionEvidencia->evidencia_id !== $evidencia->id, 404, "No se encuentra la evidencia");
        $evaluacionEvidenciaData = json_decode($request->getContent(), true);
        $evaluacionEvidencia->update($evaluacionEvidenciaData);
        return new EvaluacionEvidenciaResource($evaluacionEvidencia);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evidencia $evidencia, EvaluacionEvidencia $evaluacionEvidencia)
    {
        try {
            abort_if($evaluacionEvidencia->evidencia_id !== $evidencia->id, 404, "No se encuentra la evidencia");
            $evaluacionEvidencia->delete();
            return response()->json(['message' => 'Evaluación de evidencia eliminada correctamente.'], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
