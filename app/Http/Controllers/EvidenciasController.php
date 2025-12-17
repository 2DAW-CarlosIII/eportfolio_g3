<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Evidencia;

class EvidenciasController extends Controller
{
    public function getIndex()
    {
        return view('evidencias.index')
            ->with('evidencias', Evidencia::all());
    }

    public function getShow($id)
    {
        return view('evidencias.show')
            ->with('evidencias', Evidencia::findOrFail($id))
            ->with('id', $id);

    }

    public function getCreate()
    {
        return view('evidencias.create');
    }

    public function getEdit($id)
    {
        return view('evidencias.edit')
            ->with('evidencias', Evidencia::findOrFail($id))
            ->with('id', $id);
    }

    public function store(Request $request): RedirectResponse
    {
       $evidencias = Evidencia::create($request->all());
       return redirect()->action([self::class, 'getShow'], ['id' => $evidencias->id]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $evidencias = Evidencia::findOrFail($id);

        $evidencias->tarea_id = $request->input('tarea_id');
        $evidencias->descripcion = $request->input('descripcion');
        $evidencias->estado_validacion = $request->estado_validacion;

        if ($request->hasFile('url')) {
            $path = $request->file('url')->store('documento', ['disk' => 'public']);
            $evidencias->url = $path;
        }

        $evidencias->save();
        return redirect()->action([self::class, 'getShow'], ['id' => $evidencias->id]);
    }
}
