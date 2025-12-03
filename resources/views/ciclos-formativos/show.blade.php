@extends('layouts.master')

@section('content')

    <div class="row m-4">

        <div class="col-sm-4">
            {{-- TODO: Imagen de familias profesionales --}}
            <img src="{{ asset('/images/mp-logo.png') }}" alt="" style="width: 100px" />


        </div>
        <div class="col-sm-8">
            {{-- TODO: Datos de las familias profesionales --}}
            <h2>{{ $ciclosFormativos->codigo }}</h2>
            <h2>{{ $ciclosFormativos->nombre }}</h2>
            <ul class="actions">
                <li><a href="{{ action([App\Http\Controllers\CiclosFormativosController::class, 'getEdit'], ['id' => $ciclosFormativos->id]) }}"
                        class="button alt">Editar ciclo</a>
                </li>
                <li><a href="{{ action([App\Http\Controllers\CiclosFormativosController::class, 'getIndex']) }}"
                        class="button alt">Volver al listado</a>
                </li>
            </ul><br>
        </div>
    </div>

@stop
