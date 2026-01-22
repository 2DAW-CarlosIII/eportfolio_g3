<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AsignacionesResource;
use App\Models\Asignaciones;
use Illuminate\Http\Request;

class AsignacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
         return AsignacionesResource::collection(
            Asignaciones::orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
            ->paginate($request->perPage));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $asignacion = json_decode($request->getContent(), true);

        $asignacion = Asignaciones::create($asignacion);

        return new AsignacionesResource($asignacion);
    }

    /**
     * Display the specified resource.
     */
    public function show(Asignaciones $asignaciones)
    {
        return new AsignacionesResource($asignaciones);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asignaciones $asignaciones)
    {
        $asignacionesData = json_decode($request->getContent(), true);
        $asignaciones->update($asignacionesData);

        return new AsignacionesResource($asignaciones);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asignaciones $asignaciones)
    {
        try {
            $asignaciones->delete();
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
            Asignaciones::where('user_id', $user_id)
            ->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
            ->paginate($request->perPage));
    }
}
