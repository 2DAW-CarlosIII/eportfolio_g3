<?php

namespace App\Http\Controllers;

use App\Models\CriterioEvaluacion;
use Illuminate\Http\Request;

class CriteriosEvaluacionController extends Controller
{
    public function getIndex()
    {
        return view('criterios-evaluacion.index')
            ->with('criteriosEvaluacion', CriterioEvaluacion::all());
    }

    public function getShow($id)
    {
        return view('criterios-evaluacion.show')
            ->with('criteriosEvaluacion', CriterioEvaluacion::findOrFail($id))
            ->with('id', $id);

    }

    public function getCreate()
    {
        return view('criterios-evaluacion.create');
    }

    public function getEdit($id)
    {
        return view('criterios-evaluacion.edit')
            ->with('criteriosEvaluacion', CriterioEvaluacion::findOrFail($id))
            ->with('id', $id);
    }

    public function postCreate(Request $request){
        $criterioEvaluacion = new CriterioEvaluacion();
        $criterioEvaluacion->resultado_aprendizaje_id = $request->input('resultado-aprendizaje');
        $criterioEvaluacion->codigo = $request->input('codigo');
        $criterioEvaluacion->descripcion = $request->input('descripcion');
        $criterioEvaluacion->peso_porcentaje = $request->input('porcentaje');
        $criterioEvaluacion->orden = $request->input('orden');
        $criterioEvaluacion->save();
        return redirect()->action([CriteriosEvaluacionController::class, 'getShow'], ['id' => $criterioEvaluacion->id]);
    }

    public function putCreate(Request $request){
        $criterioEvaluacion = CriterioEvaluacion::findOrFail($request->route('id'));
        $criterioEvaluacion->resultado_aprendizaje_id = $request->input('resultado-aprendizaje');
        $criterioEvaluacion->codigo = $request->input('codigo');
        $criterioEvaluacion->descripcion = $request->input('descripcion');
        $criterioEvaluacion->peso_porcentaje = $request->input('porcentaje');
        $criterioEvaluacion->orden = $request->input('orden');
        $criterioEvaluacion->save();
        return redirect()->action([CriteriosEvaluacionController::class, 'getShow'], ['id' => $criterioEvaluacion->id]);
    }
}
