<x-layout>
<div class="max-w-3xl mx-auto p-6 text-gray-900">
<h1 class="text-2xl font-bold mb-6">Nueva evidencia</h1>

<form action="{{ route('evidencias.store') }}" method="POST">
@csrf

<div class="mb-4">
<label for="estudiante_id" class="block text-sm font-medium text-gray-700 mb-1">Estudiante (ID)</label>
<input type="number" name="estudiante_id" id="estudiante_id" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('estudiante_id') border-red-500 @enderror" value="{{ old('estudiante_id') }}">
@error('estudiante_id')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>

<div class="mb-4">
<label for="tarea_id" class="block text-sm font-medium text-gray-700 mb-1">Tarea (ID)</label>
<input type="number" name="tarea_id" id="tarea_id" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('tarea_id') border-red-500 @enderror" value="{{ old('tarea_id') }}">
@error('tarea_id')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>

<div class="mb-4">
<label for="url" class="block text-sm font-medium text-gray-700 mb-1">Dirección (URL)</label>
<input type="url" name="url" id="url" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('url') border-red-500 @enderror" value="{{ old('url') }}">
@error('url')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>

<div class="mb-4">
<label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
<textarea name="descripcion" id="descripcion" rows="3" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('descripcion') border-red-500 @enderror">{{ old('descripcion') }}</textarea>
@error('descripcion')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>

<div class="mb-6">
<label for="estado_validacion" class="block text-sm font-medium text-gray-700 mb-1">Estado de validación</label>
<select name="estado_validacion" id="estado_validacion" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 @error('estado_validacion') border-red-500 @enderror">
<option value="">Selecciona un estado</option>
<option value="pendiente" {{ old('estado_validacion') == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
<option value="validada" {{ old('estado_validacion') == 'validada' ? 'selected' : '' }}>Validada</option>
<option value="rechazada" {{ old('estado_validacion') == 'rechazada' ? 'selected' : '' }}>Rechazada</option>
<option value="asignada" {{ old('estado_validacion') == 'asignada' ? 'selected' : '' }}>Asignada</option>
</select>
@error('estado_validacion')
<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
@enderror
</div>

<button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
Añadir evidencia
</button>
</form>
</div>
</x-layout>
