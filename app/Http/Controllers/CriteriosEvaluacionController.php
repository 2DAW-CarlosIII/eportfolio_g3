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
}
