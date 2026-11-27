<x-layout>
    <div class="max-w-3xl mx-auto py-12 px-4" style="color: #111827;">
        <span class="font-bold text-sm uppercase tracking-wider" style="color: #15803d;">
            {{ $familia['codigo'] }}
        </span>
        
        <h1 class="text-3xl font-bold mt-1 mb-4" style="color: #000000;">
            {{ $familia['nombre'] }}
        </h1>
        
        <p class="mb-8 text-base leading-relaxed" style="color: #374151;">
            {{ $familia['descripcion'] }}
        </p>

        <div class="flex gap-4">
            <a href="{{ route('familias-profesionales.edit', $id) }}" 
               class="font-semibold px-4 py-2 rounded" 
               style="background-color: #d9f99d; color: #000000; border: 1px solid #84cc16;">
                Editar familia
            </a>
            
            <a href="{{ route('familias-profesionales.index') }}" 
               class="font-semibold px-4 py-2 rounded" 
               style="background-color: #f3f4f6; color: #111827; border: 1px solid #9ca3af;">
                Volver al listado
            </a>
        </div>
    </div>
</x-layout>
