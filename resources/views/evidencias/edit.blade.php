@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">Modificar Evidencia</div>

                <div class="card-body" style="padding:30px">

                    <form action="{{ action([App\Http\Controllers\EvidenciasController::class, 'putCreate'], ['id' => $evidencia->id]) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="tarea_id">ID de Tarea</label>
                            <input type="number" name="tarea_id" id="tarea_id"
                                   class="form-control"
                                   value="{{ $evidencias->tarea_id }}">
                        </div>

                        <div class="form-group">
                            <label for="url">Docuemto de evidencia</label>
                            <input type="file" name="documento" id="documento" class="form-control" placeholder="documento">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" id="descripcion"
                                   class="form-control"
                                   value="{{ $evidencias->descripcion }}">
                        </div>

                        <div class="form-group">
                            <label for="estado_validacion">Estado de validación</label>
                            <select name="estado_validacion" id="estado_validacion" value="{{ $evidencias->estado_validacion }}">
                                <option value="pendiente">Pendiente</option>
                                <option value="validada">Validada</option>
                                <option value="rechazada">Rechazada</option>
                            </select>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Guardar Cambios
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
