<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Mascotas
        </h2>
    </x-slot>

    <div class="py-8 px-6 max-w-7xl mx-auto">
        {{-- Sección superior con búsqueda y botón --}}
        <div class="w-full flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">
            
            {{-- Formulario de búsqueda --}}
            <form method="GET" class="flex gap-2 w-full sm:w-auto">
                <input type="text" name="q" value="{{ $q }}" placeholder="Buscar..." 
                       class="border rounded px-3 py-2 w-full sm:w-64 focus:ring focus:ring-blue-300">
                <button type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Buscar
                </button>
            </form>

            {{-- Botón Nueva Mascota --}}
            <div class="w-full sm:w-auto text-right">
               <a href="{{ route('mascotas.create') }}" 
   class="inline-block bg-green-300 text-black px-5 py-2 rounded hover:bg-green-400 transition font-semibold shadow border border-green-700">
    + Nueva Mascota
</a>

            </div>
        </div>

        {{-- Mensaje de éxito --}}
        @if(session('ok'))
            <div class="bg-green-100 text-green-800 p-2 mb-3 rounded shadow">{{ session('ok') }}</div>
        @endif

        {{-- Tabla --}}
        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="min-w-full text-center border-collapse">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="p-2 border">Nombre</th>
                        <th class="p-2 border">Especie</th>
                        <th class="p-2 border">Raza</th>
                        <th class="p-2 border">Edad</th>
                        <th class="p-2 border">Dueño</th>
                        <th class="p-2 border">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($mascotas as $m)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-2 border">{{ $m->nombre }}</td>
                        <td class="p-2 border">{{ $m->especie }}</td>
                        <td class="p-2 border">{{ $m->raza }}</td>
                        <td class="p-2 border">{{ $m->edad }}</td>
                        <td class="p-2 border">{{ $m->dueno }}</td>
                        <td class="p-2 border">
                            <a href="{{ route('mascotas.edit',$m) }}" class="text-blue-600 hover:underline">Editar</a> |
                            <form action="{{ route('mascotas.destroy',$m) }}" method="POST" class="inline"
                                  onsubmit="return confirm('¿Eliminar esta mascota?')">
                                @csrf @method('DELETE')
                                <button class="text-red-600 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-gray-500 p-4">No hay mascotas registradas</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">{{ $mascotas->links() }}</div>
    </div>
</x-app-layout>
