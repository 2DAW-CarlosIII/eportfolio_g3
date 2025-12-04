@extends('layouts.master')

@section('content')

    <div class="row m-4">

        <div class="col-sm-4">
            {{-- TODO: Imagen de criterios de evaluacion --}}
            <img src="{{ asset('/images/mp-logo.png') }}" alt="" style="width: 100px" />


        </div>
        <div class="col-sm-8">
            {{-- TODO: Datos de criterios de evaluacion --}}
            <h2>RA.{{$criteriosEvaluacion->resultado_aprendizaje_id}} {{ $criteriosEvaluacion->codigo}}</h2>
            <h2>{{ $criteriosEvaluacion->descripcion}} orden: {{$criteriosEvaluacion->orden}}</h2>
            <ul class="actions">
                <li><a href="{{ action([App\Http\Controllers\CriteriosEvaluacionController::class, 'getEdit'], ['id' => $criteriosEvaluacion->id]) }}"
                        class="button alt">Editar proyecto</a>
                </li>
                <li><a href="{{ action([App\Http\Controllers\CriteriosEvaluacionController::class, 'getIndex']) }}"
                        class="button alt">Volver al listado</a>
                </li>
            </ul><br>
        </div>
    </div>

@stop
