@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">Añadir criterio de evaluación</div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ action([App\Http\Controllers\CriteriosEvaluacionController::class, 'postCreate']) }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <label for="resultado-aprendizaje">Resultado de aprendizaje</label>
                            <input type="number" name="resultado-aprendizaje" id="resultado-aprendizaje" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="codigo">Codigo</label>
                            <input type="text" name="codigo" id="codigo" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="porcentaje">Peso porcentaje</label>
                            <input type="number" name="porcentaje" id="porcentaje" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="orden">Orden</label>
                            <input type="number" name="orden" id="orden" class="form-control">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Añadir criterio de evaluación
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
