<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar Nuevo Estudiante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                
                <hr class="my-6">

                <h5 class="text-lg font-bold mb-4">Estudiantes Registrados</h5>
                <table class="min-w-full table-auto border-collapse border border-gray-200">
                    <thead>
                        <tr class="bg-green-1000 text-white">
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