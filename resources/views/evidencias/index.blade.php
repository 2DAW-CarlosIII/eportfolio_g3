@extends('layouts.master')

@section('content')
    <div class="row">

        @foreach ($evidencias as $key => $evidencia)
            <div class="col-4 col-6-medium col-12-small">
                <section class="box">
                    <a href="#" class="image featured"><img src="{{ asset('/images/mp-logo.png') }}" alt="" /></a>
                    <header>
                        <h3>{{ $evidencia->tarea_id }}</h3>
                    </header>
                    <p>
                        <h3>{{ $evidencia->descripcion }}</h3>
                    </p>
                    <footer>
                        <ul class="actions">
                            <li><a href="{{ action([App\Http\Controllers\EvidenciasController::class, 'getShow'], $evidencia->id) }}"
                                    class="button alt">Más info</a></li>
                        </ul>
                    </footer>
                </section>
            </div>
        @endforeach
@stop
