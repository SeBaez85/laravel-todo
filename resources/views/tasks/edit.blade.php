<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            Editar tarea: {{$task->name}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg pb-5">
                    <div class="p-4">
                    <button type="button" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    <a href="{{route('tasks.index')}}">
                            Volver al listado
                        </a>
                    </button>
                        
                    </div>
                    @include('tasks.partials.form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>