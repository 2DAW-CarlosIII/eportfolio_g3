<x-layout>
<div class="max-w-3xl mx-auto p-6 text-gray-900">
<h1 class="text-2xl font-bold">Modificar evidencia</h1>

<form action="{{ route('evidencias.update', $id ?? 1) }}" method="POST" class="mt-4">
@csrf
@method('PUT')

<div class="mb-3">
<label for="estudiante_id" class="form-label">Estudiante (ID)</label>
<input type="number" name="estudiante_id" id="estudiante_id" class="form-control @error('estudiante_id') is-invalid @enderror" value="{{ old('estudiante_id', $evidencia['estudiante_id'] ?? '') }}">
@error('estudiante_id')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>

<div class="mb-3">
<label for="tarea_id" class="form-label">Tarea (ID)</label>
<input type="number" name="tarea_id" id="tarea_id" class="form-control @error('tarea_id') is-invalid @enderror" value="{{ old('tarea_id', $evidencia['tarea_id'] ?? '') }}">
@error('tarea_id')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>

<div class="mb-3">
<label for="url" class="form-label">Dirección (URL)</label>
<input type="url" name="url" id="url" class="form-control @error('url') is-invalid @enderror" value="{{ old('url', $evidencia['url'] ?? '') }}">
@error('url')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>

<div class="mb-3">
<label for="descripcion" class="form-label">Descripción</label>
<textarea name="descripcion" id="descripcion" class="form-control @error('descripcion') is-invalid @enderror" rows="3">{{ old('descripcion', $evidencia['descripcion'] ?? '') }}</textarea>
@error('descripcion')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>

<div class="mb-3">
<label for="estado_validacion" class="form-label">Estado de validación</label>
<select name="estado_validacion" id="estado_validacion" class="form-select @error('estado_validacion') is-invalid @enderror">
<option value="pendiente" {{ old('estado_validacion', $evidencia['estado_validacion'] ?? '') == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
<option value="validada" {{ old('estado_validacion', $evidencia['estado_validacion'] ?? '') == 'validada' ? 'selected' : '' }}>Validada</option>
<option value="rechazada" {{ old('estado_validacion', $evidencia['estado_validacion'] ?? '') == 'rechazada' ? 'selected' : '' }}>Rechazada</option>
<option value="asignada" {{ old('estado_validacion', $evidencia['estado_validacion'] ?? '') == 'asignada' ? 'selected' : '' }}>Asignada</option>
</select>
@error('estado_validacion')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>

<button type="submit" class="btn btn-primary mt-3">Modificar evidencia</button>
</form>
</div>
</x-layout>
