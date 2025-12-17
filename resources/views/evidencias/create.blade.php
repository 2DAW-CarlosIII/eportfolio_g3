@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">Añadir Evidencia</div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ action([App\Http\Controllers\EvidenciasController::class, 'store']) }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="tarea_id">ID de Tarea</label>
                            <input type="number" name="tarea_id" id="tarea_id" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="url">Docuemto de evidencia</label>
                            <input type="file" name="url" id="url" class="form-control" placeholder="documento">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="estado_validacion">Estado de validación</label>
                            <select name="estado_validacion" id="estado_validacion">
                                <option value="pendiente">Pendiente</option>
                                <option value="validada">Validada</option>
                                <option value="rechazada">Rechazada</option>
                            </select>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Añadir evidencia
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
