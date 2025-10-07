<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registrar Nueva Cita
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-3xl mx-auto bg-white rounded shadow">
        <a href="{{ route('citas.index') }}" class="text-blue-600 hover:underline text-sm mb-4 inline-block">
            ← Volver al listado
        </a>

        <form method="POST" action="{{ route('citas.store') }}" class="grid gap-4">
            @csrf

            <div>
                <label class="block font-semibold mb-1">Mascota</label>
                <select name="mascota_id" class="border p-2 w-full rounded bg-white" required>
                    <option value="">Seleccione una mascota</option>
                    @foreach ($mascotas as $m)
                        <option value="{{ $m->id }}">{{ $m->nombre }} ({{ $m->especie }})</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block font-semibold mb-1">Motivo</label>
                <input type="text" name="motivo" class="border p-2 w-full rounded" required>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block font-semibold mb-1">Fecha</label>
                    <input type="date" name="fecha" class="border p-2 w-full rounded" required>
                </div>

                <div>
                    <label class="block font-semibold mb-1">Hora</label>
                    <input type="time" name="hora" class="border p-2 w-full rounded" required>
                </div>
            </div>

            <div>
                <label class="block font-semibold mb-1">Observaciones</label>
                <textarea name="observaciones" class="border p-2 w-full rounded"></textarea>
            </div>

            <button type="submit"
                class="bg-green-300 text-black px-5 py-2 rounded hover:bg-green-400 transition font-semibold shadow border border-green-700">
                Guardar Cita
            </button>
        </form>
    </div>
</x-app-layout>
