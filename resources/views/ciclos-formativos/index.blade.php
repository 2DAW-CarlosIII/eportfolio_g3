@extends('layouts.master')

@section('content')
    <div class="row">

        @foreach ($ciclosFormativos as $key => $ciclo)
            <div class="col-4 col-6-medium col-12-small">
                <section class="box">
                    <a href="#" class="image featured"><img src="{{ asset('/images/mp-logo.png') }}" alt="" /></a>
                    <header>
                        <h3>{{ $ciclo->codigo }}</h3>
                    </header>
                    <p>
                        <h3>{{ $ciclo->nombre }}</h3>
                    </p>
                    <footer>
                        <ul class="actions">
                            <li><a href="{{ action([App\Http\Controllers\CiclosFormativosController::class, 'getShow'], ['id' => $ciclo->id]) }}"
                                    class="button alt">Más info</a></li>
                        </ul>
                    </footer>
                </section>
            </div>
        @endforeach
@stop
