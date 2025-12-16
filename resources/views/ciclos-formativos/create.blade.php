@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="col-12 offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center"><h1>Añadir Ciclo Formativo</h1></div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ action([App\Http\Controllers\CiclosFormativosController::class, 'postCreate']) }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="codigo">Código</label>
                            <input type="text" name="codigo" id="codigo">
                        </div>

                        <div class="form-group">
                            <label for="grado">Grado</label>
                            <select name="grado" id="grado">
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
                            <button type="submit" class="btn btn-primary" style="margin-top:25px; color:white;">
                                Añadir Ciclo Formativo
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
