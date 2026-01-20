<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\EvidenciaResource;
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
        return EvidenciaResource::collection(
            Evidencia::orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Evidencia $evidencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evidencia $evidencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evidencia $evidencia)
    {
        //
    }
}
