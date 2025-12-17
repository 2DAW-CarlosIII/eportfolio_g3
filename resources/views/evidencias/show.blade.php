@extends('layouts.master')

@section('content')

    <div class="row m-4">

        <div class="col-sm-4">
            <img src="{{ asset('/images/mp-logo.png') }}" alt="" style="width: 100px" />


        </div>
        <div class="col-sm-8">
            <h2>{{ $evidencias->tarea_id }}</h2>
            <h2>{{ $evidencias->descripcion }}</h2>
            <ul class="actions">
                @auth
                <li><a href="{{ action([App\Http\Controllers\EvidenciasController::class, 'getEdit'], $evidencias->id) }}"
                        class="button alt">Editar evidencia</a>
                </li>
                @endauth
                <li><a href="{{ action([App\Http\Controllers\EvidenciasController::class, 'getIndex']) }}"
                        class="button alt">Volver al listado</a>
                </li>
            </ul><br>
        </div>
    </div>

@stop
