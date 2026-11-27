<x-layout>
    <div class="w-full max-w-2xl mx-auto py-10 px-4 text-gray-900">
        <h1 class="text-3xl font-bold mb-6 text-black">Modificar familia profesional {{ $id }}</h1>


        <form action="{{ route('familias-profesionales.update', $id) }}" method="POST" class="space-y-5 bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
            @csrf
            @method('PUT')

            <div>
                <label for="codigo" class="block text-sm font-semibold text-gray-700 mb-1">Código</label>
                <input type="text" id="codigo" name="codigo" value="{{ old('codigo', $familia['codigo']) }}"
                    class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
                @error('codigo')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="nombre" class="block text-sm font-semibold text-gray-700 mb-1">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $familia['nombre']) }}"
                    class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">
                @error('nombre')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="descripcion" class="block text-sm font-semibold text-gray-700 mb-1">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="4"
                    class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500">{{ old('descripcion', $familia['descripcion'] ?? '') }}</textarea>
                @error('descripcion')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center gap-4 pt-2">
                <button type="submit" class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700 cursor-pointer">
                    Modificar familia profesional
                </button>
                <a href="{{ route('familias-profesionales.show', $id) }}" class="rounded-lg border border-gray-300 bg-gray-100 px-4 py-2 text-sm font-semibold text-gray-800 hover:bg-gray-200">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</x-layout>
