<?php

namespace App\Http\Controllers;

use App\Models\CicloFormativo;
use Illuminate\Http\Request;

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
}
