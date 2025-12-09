<?php

namespace App\Http\Controllers;

use App\Models\CicloFormativo;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CiclosFormativosController extends Controller
{
    public function getIndex()
    {
        return view('ciclos-formativos.index')
            ->with('ciclosFormativos', CicloFormativo::all());
    }

    public function getShow($id)
    {
        return view('ciclos-formativos.show')
            ->with('ciclosFormativos', CicloFormativo::findOrFail($id))
            ->with('id', $id);

    }

    public function getCreate()
    {
        return view('ciclos-formativos.create');
    }

    public function getEdit($id)
    {
        return view('ciclos-formativos.edit')
            ->with('ciclosFormativos', CicloFormativo::findOrFail($id))
            ->with('id', $id);
    }

    // -------------------------------------------------------------------------------
    public function postCreate(Request $request): RedirectResponse
    {
        $cicloFormativo = CicloFormativo::create($request->all());
        return redirect()->action([self::class, 'getShow'], ['id' => $cicloFormativo->id]);
    }

    public function putCreate(Request $request, $id): RedirectResponse
    {
       $cicloFormativo = CicloFormativo::findOrFail($id);
       $cicloFormativo->update($request->all());
       return redirect()->action([self::class, 'getShow'], ['id' => $cicloFormativo->id]);
    }
}
