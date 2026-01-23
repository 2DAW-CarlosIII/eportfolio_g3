<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ComentariosResource;
use App\Models\Comentarios;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return ComentariosResource::collection(
            Comentarios::orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
            ->paginate($request->perPage));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comentario = json_decode($request->getContent(), true);

        $comentario = Comentarios::create($comentario);

        return new ComentariosResource($comentario);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comentarios $comentarios)
    {
         return new ComentariosResource($comentarios);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comentarios $comentarios)
    {
        $comentariosData = json_decode($request->getContent(), true);
        $comentarios->update($comentariosData);

        return new ComentariosResource($comentarios);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comentarios $comentarios)
    {
        try {
            $comentarios->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
