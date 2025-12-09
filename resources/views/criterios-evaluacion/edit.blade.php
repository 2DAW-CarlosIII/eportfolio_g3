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
                            <label for="codigo">código</label>
                            <input type="text" name="codigo" id="codigo" class="form-control"
                                value="{{ $criteriosEvaluacion->codigo }}">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" name="descripcion" id="descripcion"
                                value="{{ $criteriosEvaluacion->descripcion }}">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar criterio de evaluación
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
