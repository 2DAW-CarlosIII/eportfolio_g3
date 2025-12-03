<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResultadoAprendizaje;

class ResultadosAprendizajesController extends Controller
{
    public function getIndex()
    {
        // Obtener todos los registros
        $resultados = ResultadoAprendizaje::all();

        return view('resultados-aprendizaje.index')
            ->with('resultadosAprendizajes', $resultados);
    }

    public function getShow($id)
    {
        $resultado = ResultadoAprendizaje::findOrFail($id);

        return view('resultados-aprendizaje.show')
            ->with('resultado', $resultado);
    }

    public function getCreate()
    {
        return view('resultados-aprendizaje.create');
    }

    public function getEdit($id)
    {

        $resultado = ResultadoAprendizaje::findOrFail($id);

        return view('resultados-aprendizaje.edit')
            ->with('resultado', $resultado);
    }
}
