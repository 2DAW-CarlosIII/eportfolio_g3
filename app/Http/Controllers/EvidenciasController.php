<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Evidencias;

class FamiliasProfesionalesController extends Controller
{
    public function getIndex()
    {
        return view('evidencias.index')
            ->with('Evidencias', Evidencias::all());
    }

    public function getShow($id)
    {
        return view('evidencias.show')
            ->with('Evidencias', Evidencias::findOrFail($id))
            ->with('id', $id);

    }

    public function getCreate()
    {
        return view('evidencias.create');
    }

    public function getEdit($id)
    {
        return view('evidencias.edit')
            ->with('Evidencias', Evidencias::findOrFail($id))
            ->with('id', $id);
    }

    public function postCreate(Request $request): RedirectResponse
    {
        $evidencias = Evidencias::create($request->all());
        return redirect()->action([self::class, 'getShow'], ['id' => $evidencias->id]);
    }

    public function putCreate(Request $request, $id): RedirectResponse
    {
       $evidencias = Evidencias::findOrFail($id);
       $evidencias->update($request->all());
       return redirect()->action([self::class, 'getShow'], ['id' => $evidencias->id]);
    }
}
