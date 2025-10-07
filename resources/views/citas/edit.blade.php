<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Cita
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-3xl mx-auto bg-white rounded shadow">
        <a href="{{ route('citas.index') }}" class="text-blue-600 hover:underline text-sm mb-4 inline-block">
            ← Volver al listado
        </a>

        <form method="POST" action="{{ route('citas.update', $cita) }}" class="grid gap-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block font-semibold mb-1">Mascota</label>
                <select name="mascota_id" class="border p-2 w-full rounded" required>
                    @foreach ($mascotas as $m)
                        <option value="{{ $m->id }}" {{ $m->id == $cita->mascota_id ? 'selected' : '' }}>
                            {{ $m->nombre }} ({{ $m->especie }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block font-semibold mb-1">Motivo</label>
                <input type="text" name="motivo" value="{{ $cita->motivo }}" class="border p-2 w-full rounded" required>
            </div>

            <div>
                <label class="block font-semibold mb-1">Fecha</label>
                <input type="date" name="fecha" value="{{ $cita->fecha }}" class="border p-2 w-full rounded" required>
            </div>

            <div>
                <label class="block font-semibold mb-1">Hora</label>
                <input type="time" name="hora" value="{{ $cita->hora }}" class="border p-2 w-full rounded" required>
            </div>

            <div>
                <label class="block font-semibold mb-1">Observaciones</label>
                <textarea name="observaciones" class="border p-2 w-full rounded">{{ $cita->observaciones }}</textarea>
            </div>

            <button type="submit"
                class="bg-blue-400 text-black px-5 py-2 rounded hover:bg-blue-500 transition font-semibold shadow border border-blue-700">
                Actualizar Cita
            </button>
        </form>
    </div>
</x-app-layout>
