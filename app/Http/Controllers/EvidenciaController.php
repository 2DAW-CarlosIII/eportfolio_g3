<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Http\Requests\EvidenciaRequest;

class EvidenciaController extends Controller
{
   private array $evidencias = [
    ['estudiante_id' => 1, 'tarea_id' => 1, 'url' => 'https://example.com/evidencias/1',
     'descripcion' => 'Instalación de Laravel y desarrollo colaborativo con GitHub', 'estado_validacion' => 'validada'],
    ['estudiante_id' => 1, 'tarea_id' => 2, 'url' => 'https://example.com/evidencias/2',
     'descripcion' => 'Configuración del proyecto y comando propio de Artisan', 'estado_validacion' => 'validada'],
    ['estudiante_id' => 1, 'tarea_id' => 3, 'url' => 'https://example.com/evidencias/3',
     'descripcion' => 'Rutas con nombre, grupos y restricciones', 'estado_validacion' => 'pendiente'],
    ['estudiante_id' => 2, 'tarea_id' => 1, 'url' => 'https://example.com/evidencias/4',
     'descripcion' => 'Instalación de Laravel en el ePortfolio del grupo', 'estado_validacion' => 'validada'],
    ['estudiante_id' => 2, 'tarea_id' => 2, 'url' => 'https://example.com/evidencias/5',
     'descripcion' => 'Fichero de configuración propio', 'estado_validacion' => 'rechazada'],
    ['estudiante_id' => 3, 'tarea_id' => 1, 'url' => 'https://example.com/evidencias/6',
     'descripcion' => 'Pull request revisado por un compañero', 'estado_validacion' => 'asignada'],
    ['estudiante_id' => 3, 'tarea_id' => 3, 'url' => 'https://example.com/evidencias/7',
     'descripcion' => 'Respuesta en JSON con la configuración', 'estado_validacion' => 'pendiente'],
    ['estudiante_id' => 4, 'tarea_id' => 2, 'url' => 'https://example.com/evidencias/8',
     'descripcion' => 'Layout con la plantilla del grupo', 'estado_validacion' => 'validada'],
];
public function index(): View 
{ 
   return view('index', [ 
      'evidencias' => $this->evidencias, 
      ]); 
} 
public function show(int $id): View 
{ 
   abort_unless(isset($this->evidencias[$id]), 404); 
   return view('show', [ 
      'id' => $id, 
      'evidencia' => $this->evidencias[$id], 
      ]); 
} 
public function create(): View 
{ 
   return view('create'); 
} 
public function edit(int $id): View 
{ 
   abort_unless(isset($this->evidencias[$id]), 404);
    return view('edit', [
         'id' => $id, 
         'evidencia' => $this->evidencias[$id], 
   ]); 
} 
public function store(EvidenciaRequest $request)
{
$datos = $request->validated(); 

return redirect()->route('evidencias.index')
->with('mensaje', 'Evidencia «' . $request->descripcion . '» creada.');
}

public function update(EvidenciaRequest $request, int $id)
{
abort_unless(isset($this->evidencias[$id]), 404);

$datos = $request->validated(); 

return redirect()->route('evidencias.show', $id)
->with('mensaje', 'Evidencia «' . $request->descripcion . '» actualizada.');
}


}
