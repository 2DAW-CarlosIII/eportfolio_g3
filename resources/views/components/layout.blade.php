@props([
    'titulo' => null,
    'titulo0' => 'incio',
    'titulo1' => 'pagina1',
    'titulo2' => 'pagina2',
    'titulo3' => 'pagina3',
])
<x-sendit.layout :titulo="$titulo" :titulo0="$titulo0" :titulo1="$titulo1" :titulo2="$titulo2" :titulo3="$titulo3">
    @session('mensaje')
        <div class="mb-6 rounded-lg border border-emerald-200 bg-emerald-50 p-4 text-sm font-medium text-emerald-800 shadow-sm" role="alert">
            {{ $value }}
        </div>
    @endsession

    {{ $slot }}
</x-sendit.layout>
