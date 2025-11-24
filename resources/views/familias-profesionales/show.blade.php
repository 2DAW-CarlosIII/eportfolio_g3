@extends('layouts.master')

@section('content')

    <div class="row m-4">

        <div class="col-sm-4">
            {{-- TODO: Imagen de familias profesionales --}}
            <img src="{{ asset('/images/mp-logo.png') }}" alt="" style="width: 100px" />


        </div>
        <div class="col-sm-8">
            {{-- TODO: Datos de las familias profesionales --}}
            <h2>{{ $familiaProfesional['codigo']}}</h2>
            <h2>{{ $familiaProfesional['nombre']}}</h2>
        </div>
    </div>

@stop
