<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\MatriculaResource;
use App\Models\Matricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MatriculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return MatriculaResource::collection(
            Matricula::orderBy($request->sort ?? 'id', $request->order ?? 'asc')
            ->paginate($request->per_page));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $matricula = json_decode($request->getContent(), true);

        $matricula = Matricula::create($matricula);

        return new MatriculaResource($matricula);
    }

    // Devuelve una colección de módulos formativos en los que el usuario autenticado tiene matrícula.
    public function modulosMatriculados(Request $request)
    {
        $emailAutenticado = Auth::user()->email;
        $usuarios = DB::table('users')->where('email', $emailAutenticado)->get();
        $usuario_id = $usuarios->id;

        $modulos_matriculados = DB::table('matriculas')->where('estudiante_id', $usuario_id);

        return ModeloFormativoResource::collection(
            ModeloFormativo::whereIn('id', $modulos_matriculados)
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Matricula $matricula)
    {
        return new MatriculaResource($matricula);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matricula $matricula)
    {
        $matriculaData = json_decode($request->getContent(), true);
        $matricula->update($matriculaData);

        return new MatriculaResource($matricula);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matricula $matricula)
    {
        try {
            $matricula->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 400);
        }
    }
}
