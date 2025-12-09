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

    public function postCreate(Request $request) {
        $resultados_aprendizaje = new ResultadoAprendizaje();
        $resultados_aprendizaje -> codigo = $request -> input('codigo');
        $resultados_aprendizaje -> modulo_formativo_id = $request -> input('modulo_formativo_id');
        $resultados_aprendizaje -> descripcion = $request -> input('descripcion');
        $resultados_aprendizaje -> peso_porcentaje = $request -> input('peso_porcentaje');
        $resultados_aprendizaje -> orden = $request -> input('orden');
        return redirect() -> action([ResultadosAprendizajesController::class, 'getShow'], ['id' => $resultados_aprendizaje -> id]);
    }

    public function putCreate(Request $request, $id) {
        $resultados_aprendizaje = ResultadoAprendizaje::findOrFail($id);
        $resultados_aprendizaje -> codigo = $request -> input('codigo');
        $resultados_aprendizaje -> modulo_formativo_id = $request -> input('modulo_formativo_id');
        $resultados_aprendizaje -> descripcion = $request -> input('descripcion');
        $resultados_aprendizaje -> peso_porcentaje = $request -> input('peso_porcentaje');
        $resultados_aprendizaje -> orden = $request -> input('orden');
        $resultados_aprendizaje -> save();
        return redirect() -> action([ResultadosAprendizajesController::class, 'getShow'], ['id' => $resultados_aprendizaje -> id]);
    }
}
