@props([
    'titulo' => null,
    'titulo0' => 'incio',
    'titulo1' => 'pagina1',
    'titulo2' => 'pagina2',
    'titulo3' => 'pagina3',
])
<x-sendit.layout :titulo="$titulo" :titulo0="$titulo0" :titulo1="$titulo1" :titulo2="$titulo2" :titulo3="$titulo3">
    {{-- div en columna para que la alerta salga arriba y no a la izq --}}
    <div class="flex w-full flex-1 flex-col gap-6">
        @if (session('mensaje'))
            <div class="flex items-start gap-3 rounded-xl border border-green-200 bg-green-50 p-4 text-sm text-green-800" role="alert">
                <i class="bi bi-check-circle-fill mt-0.5" aria-hidden="true"></i>
                <span><strong>{{ session('mensaje') }}</strong></span>
            </div>
        @endif

        {{ $slot }}
    </div>
</x-sendit.layout>