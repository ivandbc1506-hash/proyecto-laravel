<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar Nuevo Estudiante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <form action="{{ route('estudiantes.store') }}" method="POST" class="mb-6">
                    @csrf
                    <div class="mb-4">
                        <label>Nombre del Estudiante:</label>
                        <input type="text" name="nombre" class="block w-full border-gray-300 rounded-md shadow-sm" placeholder="Ej: Juan Pérez" required>
                    </div>
                    <div class="mb-4">
                        <label>Código:</label>
                        <input type="text" name="codigo" class="block w-full border-gray-300 rounded-md shadow-sm" placeholder="Ej: 2024001" required>
                    </div>
                    <div class="mb-4">
                        <label>Carrera:</label>
                        <input type="text" name="carrera" class="block w-full border-gray-300 rounded-md shadow-sm" placeholder="Ej: Ingeniería" required>
                    </div>
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">
                        Guardar Estudiante
                    </button>
                </form>

                <hr class="my-6">

                <h5 class="text-lg font-bold mb-4">Estudiantes Registrados</h5>
                <table class="min-w-full table-auto border-collapse border border-green-500">
                    <thead>
                        <tr class="bg-green-600 text-white">
                            <th class="border p-2">Nombre</th>
                            <th class="border p-2">Código</th>
                            <th class="border p-2">Carrera</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($estudiantes as $estudiante)
                        <tr>
                            <td class="border p-2 text-center">{{ $estudiante->nombre }}</td>
                            <td class="border p-2 text-center">{{ $estudiante->codigo }}</td>
                            <td class="border p-2 text-center">{{ $estudiante->carrera }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>