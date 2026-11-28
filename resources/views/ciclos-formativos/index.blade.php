{{-- cards conseguidas de https://flowbite.com/docs/components/card/  --}}
<x-layout>
    <div class="flex w-full flex-col">
        <div class="mb-6 flex items-center justify-between">
            <h1 class="mb-6 text-3xl font-bold">Ciclos formativos</h1>
            <a href="{{ route('ciclos-formativos.create') }}" class="bg-[#cff245] px-4 py-2 text-black rounded-xl text-sm font-medium">Añadir ciclo formativo</a>
        </div>
        <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
           @foreach ($ciclos as $id => $ciclo)
                <li>
                    {{--https://laravel.com/docs/13.x/routing#named-routes--}}
                        <a href="{{ route('ciclos-formativos.show', ['id' => $id]) }}" class="flex h-full flex-col justify-between rounded-3xl border border-gray-200 bg-white p-8 shadow-sm transition hover:shadow-md">
                        <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">
                            {{ $ciclo['nombre'] }}
                        </h5>
                        <dl class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div class="flex items-center gap-2">
                                <dt class="text-sm font-medium text-body">Grado:</dt>
                                {{-- estilos sacados de https://flowbite.com/docs/components/badge/ --}}
                                <dd @class([
                                    'inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium ring-1 ring-inset',
                                    'bg-green-100 text-green-800 ring-green-600/20' => ($ciclo['grado'] ?? '') === 'basico',
                                    'bg-orange-100 text-orange-800 ring-orange-600/20' => ($ciclo['grado'] ?? '') === 'medio',
                                    'bg-blue-100 text-blue-800 ring-blue-600/20' => ($ciclo['grado'] ?? '') === 'superior',
                                ])>{{ $ciclo['grado'] }}</dd>
                            </div>

                            <div class="flex items-center gap-2">
                                <dt class="text-sm font-medium text-body">Código:</dt>
                                <dd class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800 ring-1 ring-inset ring-gray-500/10">{{ $ciclo['codigo'] }}</dd>
                            </div>
                        </dl>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>