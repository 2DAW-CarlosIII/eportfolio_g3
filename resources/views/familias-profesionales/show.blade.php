@extends('layouts.master')

@section('content')
<<<<<<< HEAD

    <div class="row m-4">

        <div class="col-sm-4">
            {{-- TODO: Imagen de familias profesionales --}}
            <img src="{{ asset('/images/mp-logo.png') }}" alt="" style="width: 100px" />


        </div>
        <div class="col-sm-8">
            {{-- TODO: Datos de familias profesionales --}}
            <h2>{{$familiasProfesionales['docente_id']}}</h2>
            <h2>{{ $familiasProfesionales['nombre']}}</h2>
            <h2><a href="http://github.com/2DAW-CarlosIII/{{ $familiasProfesionales['dominio'] }}">
                http://github.com/2DAW-CarlosIII/{{ $familiasProfesionales['dominio'] }}</a></h2>

            @foreach ($familiasProfesionales['metadatos'] as $key => $metadato)
                <li>{{$key}} : {{$metadato}}</li>
            @endforeach

            @if ($familiasProfesionales['metadatos']['calificacion']>=5)
                <p>familia profesional aprobada</p>
                <button type="button" class="btn btn-success">Suspender familia profesional</button>
            @else
                <p>familia profesional suspensa</p>
                <button type="button" class="btn btn-primary" style="background-color: blue">Aprobar familia profesional </button>
            @endif
        </div>
    </div>

=======
    Vista familias profesionales con ID: {{ $id }}
>>>>>>> 1f40044c643565f9932617e5f5e9eefc57bf4cef
@stop
