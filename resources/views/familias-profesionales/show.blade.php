@extends('layouts.master')

@section('content')

    <div class="row m-4">

        <div class="col-sm-4">
            {{-- TODO: Imagen de familias profesionales --}}
            <img src="{{ asset('/images/mp-logo.png') }}" alt="" style="width: 100px" />


        </div>
        <div class="col-sm-8">
            {{-- TODO: Datos de las familias profesionales --}}
            <h2>{{ $familiasProfesionales->codigo }}</h2>
            <h2>{{ $familiasProfesionales->nombre }}</h2>
            <div>
                @if ($familiasProfesionales->imagen)
                    <img width="300" style="height:300px" src="{{ Storage::url($familiasProfesionales->imagen) }}" alt="imagen" class="img-thumbnail">
                @else
                        <img width="300" style="height:300px" alt="Curriculum-vitae-warning-icon" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Curriculum-vitae-warning-icon.svg/256px-Curriculum-vitae-warning-icon.svg.png">
                @endif
            </div>
            <ul class="actions">
                @auth
                <li><a href="{{ action([App\Http\Controllers\FamiliasProfesionalesController::class, 'getEdit'], $familiasProfesionales->id) }}"
                        class="button alt">Editar familia profesinal</a>
                </li>
                @endauth
                <li><a href="{{ action([App\Http\Controllers\FamiliasProfesionalesController::class, 'getIndex']) }}"
                        class="button alt">Volver al listado</a>
                </li>
            </ul><br>
        </div>
    </div>

@stop
