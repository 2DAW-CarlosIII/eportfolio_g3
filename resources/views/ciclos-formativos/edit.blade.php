@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="col-12 offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">Modificar Ciclo Formativo</div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ action([App\Http\Controllers\CiclosFormativosController::class, 'putCreate'], ['id' => $ciclosFormativos->id]) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $ciclosFormativos->nombre }}">
                        </div>

                        <div class="form-group">
                            <label for="codigo">Código</label>
                            <input type="text" name="codigo" id="codigo" value="{{ $ciclosFormativos->codigo }}">
                        </div>

                        <div class="form-group">
                            <label for="grado">Grado</label>
                            <select name="grado" id="grado" value="{{ $ciclosFormativos->grado }}">
                                <option value="basico">Básico</option>
                                <option value="medio">Grado Medio</option>
                                <option value="superior">Grado Superior</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" cols="30" rows="5"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="100px;margin-top:25px; color:white;">
                                Modificar Ciclo Formativo
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
