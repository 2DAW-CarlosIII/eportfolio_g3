@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">Modificar criterio de evaluación</div>
                <div class="card-body" style="padding:30px">

                    <form
                        action="{{ action([App\Http\Controllers\CriteriosEvaluacionController::class, 'putCreate'], ['id' => $id]) }}"
                        method="POST">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="resultado-aprendizaje">Resultado de aprendizaje</label>
                            <input type="number" name="resultado-aprendizaje" id="resultado-aprendizaje" class="form-control"
                                value="{{ $criteriosEvaluacion->resultado_aprendizaje_id}}">
                        </div>

                        <div class="form-group">
                            <label for="codigo">Código</label>
                            <input type="text" name="codigo" id="codigo" class="form-control"
                                value="{{ $criteriosEvaluacion->codigo }}">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" name="descripcion" id="descripcion"
                                value="{{ $criteriosEvaluacion->descripcion }}">
                        </div>

                        <div class="form-group">
                            <label for="porcentaje">Porcentaje</label>
                            <input type="number" name="porcentaje" id="porcentaje"
                                value="{{ $criteriosEvaluacion->porcentaje }}">
                        </div>

                        <div class="form-group">
                            <label for="orden">Orden</label>
                            <input type="number" name="orden" id="orden"
                                value="{{ $criteriosEvaluacion->orden }}">
                        </div>


                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="margin-top:25px;">
                                Modificar criterio de evaluación
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
