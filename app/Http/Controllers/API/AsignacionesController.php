namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AsignacionesResource;
use App\Models\Asignaciones;
use App\Models\Evidencia;
use Illuminate\Http\Request;

class AsignacionesController extends Controller
{
    public function index(Request $request, Evidencia $evidencia)
    {
        return AsignacionesResource::collection(
            Asignaciones::where('evidencia_id', $evidencia->id)
                ->orderBy($request->sort ?? 'id', $request->order ?? 'asc')
                ->paginate($request->per_page)
        );
    }

    public function store(Request $request, Evidencia $evidencia)
    {
        $data = $request->validate([
            'revisor_id' => 'required|exists:users,id',
            'asignado_por_id' => 'required|exists:users,id',
            'fecha_limite' => 'required|date',
        ]);

        $data['evidencia_id'] = $evidencia->id;
        $data['estado'] = 'pendiente';

        $asignacion = Asignaciones::create($data);

        return new AsignacionesResource($asignacion);
    }

    public function show(Evidencia $evidencia, Asignaciones $asignacion)
    {
        abort_if($asignacion->evidencia_id !== $evidencia->id, 404);
        return new AsignacionesResource($asignacion);
    }

    public function update(Request $request, Evidencia $evidencia, Asignaciones $asignacion)
    {
        abort_if($asignacion->evidencia_id !== $evidencia->id, 404);

        $asignacionData = $request->validate([
            'revisor_id' => 'sometimes|exists:users,id',
            'asignado_por_id' => 'sometimes|exists:users,id',
            'fecha_limite' => 'sometimes|date',
            'estado' => 'sometimes|in:pendiente,completado,cancelado',
        ]);

        $asignacion->update($asignacionData);

        return new AsignacionesResource($asignacion);
    }

    public function destroy(Evidencia $evidencia, Asignaciones $asignacion)
    {
        abort_if($asignacion->evidencia_id !== $evidencia->id, 404);
        $asignacion->delete();
        return response()->json(null, 204);
    }

    public function asignacionesPorRevisor(Request $request, $revisor_id)
    {
        return AsignacionesResource::collection(
            Asignaciones::where('revisor_id', $revisor_id)
                ->orderBy($request->_sort ?? 'id', $request->_order ?? 'asc')
                ->paginate($request->per_page)
        );
    }
}
