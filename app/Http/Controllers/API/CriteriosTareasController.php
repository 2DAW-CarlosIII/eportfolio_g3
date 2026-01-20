<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CriteriosTareasResource;
use App\Models\CriteriosTareas;
use Illuminate\Http\Request;

class CriteriosTareasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
         return CriteriosTareasResource::collection(
            CriteriosTareas::orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
            ->paginate($request->perPage));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $criteriosTareas = json_decode($request->getContent(), true);

        $criteriosTareas = CriteriosTareas::create($criteriosTareas);

        return new CriteriosTareasResource($criteriosTareas);
    }

    /**
     * Display the specified resource.
     */
    public function show(CriteriosTareas $criteriosTareas)
    {
        return new CriteriosTareasResource($criteriosTareas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CriteriosTareas $criteriosTareas)
    {
        $criteriosTareasData = json_decode($request->getContent(), true);
        $criteriosTareas->update($criteriosTareasData);

        return new CriteriosTareasResource($criteriosTareas);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CriteriosTareas $criteriosTareas)
    {
        try {
            $criteriosTareas->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
