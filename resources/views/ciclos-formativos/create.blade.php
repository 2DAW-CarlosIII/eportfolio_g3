<x-layout>
    <h1 class="mb-6 text-3xl font-bold">Nuevo ciclo formativo</h1>
    <form action="{{ route('ciclos-formativos.store') }}" method="POST" class="max-w-md space-y-4 rounded-3xl border border-gray-200 bg-white p-8 shadow-sm">
        @csrf
        @if ($errors->any())
        <div class="flex items-start gap-3 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-800" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li><i class="bi bi-x-circle-fill mt-0.5" aria-hidden="true"></i> {{ $error }}</li>
                @endforeach
            </ul>
        </div>    
        @endif        
        <div>
            <label for="nombre" class="mb-1 block text-sm font-medium text-gray-900">Nombre</label>
            <input id="nombre" name="nombre" type="text" value="{{ old('nombre') }}" class="w-full rounded-xl border border-gray-300 bg-white px-4 py-2 text-sm text-gray-900 placeholder-gray-400 focus:border-lime-500 focus:outline-none focus:ring-2 focus:ring-lime-300">
        </div>

        <div>
            <label for="codigo" class="mb-1 block text-sm font-medium text-gray-900">Código</label>
            <input id="codigo" name="codigo" type="text" value="{{ old('codigo') }}" class="w-full rounded-xl border border-gray-300 bg-white px-4 py-2 text-sm text-gray-900 placeholder-gray-400 focus:border-lime-500 focus:outline-none focus:ring-2 focus:ring-lime-300">
        </div>

        <div>
            <label for="codigo_familia" class="mb-1 block text-sm font-medium text-gray-900">Código de familia</label>
            <input id="codigo_familia" name="codigo_familia" type="text" value="{{ old('codigo_familia') }}" class="w-full rounded-xl border border-gray-300 bg-white px-4 py-2 text-sm text-gray-900 placeholder-gray-400 focus:border-lime-500 focus:outline-none focus:ring-2 focus:ring-lime-300">
        </div>

        <div>
        <label for="grado" class="mb-1 block text-sm font-medium text-gray-900">Grado</label>
        <select id="grado" name="grado" class="w-full rounded-xl border border-gray-300 bg-white px-4 py-2 text-sm text-gray-900 focus:border-lime-500 focus:outline-none focus:ring-2 focus:ring-lime-300">
            <option value="">Selecciona un grado</option>
            <option value="basico" @selected(old('grado') == 'basico')>basico</option>
            <option value="medio" @selected(old('grado') == 'medio')>medio</option>
            <option value="superior" @selected(old('grado') == 'superior')>superior</option>
        </select>
        </div>

        <div>
            <label for="descripcion" class="mb-1 block text-sm font-medium text-gray-900">Descripción</label>
            <textarea id="descripcion" name="descripcion" value="{{ old('descripcion') }}" class="w-full rounded-xl border border-gray-300 bg-white px-4 py-2 text-sm text-gray-900 placeholder-gray-400 focus:border-lime-500 focus:outline-none focus:ring-2 focus:ring-lime-300"></textarea>
        </div>
        
        <button type="submit" class="bg-[#cff245] px-4 py-2 text-black rounded-xl text-sm font-medium">
            Añadir ciclo formativo
        </button>        
    </form>

</x-layout>