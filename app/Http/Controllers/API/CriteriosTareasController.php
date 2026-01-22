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
    public function index(Request $request, Tarea $tarea)
    {
        return CriteriosTareasResource::collection(
            CriteriosTareas::where('tarea_id', $tarea->id)
                ->paginate($request->perPage)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Tarea $tarea)
    {
        $data = json_decode($request->getContent(), true);
        $data['tarea_id'] = $tarea->id;

        $criterioTarea = CriteriosTareas::create($data);
        return new CriteriosTareasResource($criterioTarea);
    }

    /**
     * Display the specified resource.
     */

    //----------------------------------------------
    // Codigo comentado ya que no se ve (show) ni se actualiza (update) esta
    // tabla directamente
    //----------------------------------------------

    /*public function show(CriteriosTareas $criteriosTareas)
    {
        return new CriteriosTareasResource($criteriosTareas);
    }*/
    /**
     * Update the specified resource in storage.
     */
    /*public function update(Request $request, CriteriosTareas $criteriosTareas)
    {
        $criteriosTareasData = json_decode($request->getContent(), true);
        $criteriosTareas->update($criteriosTareasData);

        return new CriteriosTareasResource($criteriosTareas);
    }*/

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarea $tarea, CriteriosTareas $criterioTarea)
    {
        abort_if($criterioTarea->tarea_id !== $tarea->id, 404);

        $criterioTarea->delete();
        return response()->json(null, 204);
    }
}
