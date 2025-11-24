@extends('layouts.master')

@section('content')
<<<<<<< HEAD
    <div class="row">

        @foreach ($familiasProfesionales as $key => $proyecto)
            <div class="col-4 col-6-medium col-12-small">
                <section class="box">
                    <a href="#" class="image featured"><img src="{{ asset('/images/mp-logo.png') }}" alt="" /></a>
                    <header>
                        <h3>{{ $familiasProfesionales['nombre'] }}</h3>
                    </header>
                    <p>
                        <a href="http://github.com/2DAW-CarlosIII/{{ $familiasProfesionales['dominio'] }}">
                            http://github.com/2DAW-CarlosIII/{{ $familiasProfesionales['dominio'] }}
                        </a>
                    </p>
                    <footer>
                        <ul class="actions">
                            <li><a href="{{ action([App\Http\Controllers\ProyectosController::class, 'getShow'], ['id' => $key]) }}"
                                    class="button alt">Más info</a></li>
                        </ul>
                    </footer>
                </section>
            </div>
        @endforeach
=======
    Vista principal de familias profesionales
>>>>>>> 1f40044c643565f9932617e5f5e9eefc57bf4cef
@stop
