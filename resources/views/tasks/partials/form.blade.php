<form action="{{$actionUrl}}" method="POST" class="max-w-sm mx-auto">
    @csrf
    @method($method)
    <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de la tarea</label>
        <input type="text" name="name" id="name" value="{{old('name', $task->name)}}" placeholder="Escribe el título de la tarea" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
        @error('name')
        <span class="text-red-500 text-sm">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-5">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
        <textarea id="description" name="description" placeholder="Escribe tu tarea" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        {{old('description', $task->description)}}
        </textarea>
        @error('description')
        <span class="text-red-500 text-sm">{{$message}}</span>
        @enderror
    </div>
    <div class="flex items-start mb-5">
        <div class="flex items-center h-5">
            <input id="completed" name="completed" {{old('completed', $task->completed) ? 'checked' : ''}} type="checkbox" value="1" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
        </div>
        <label for="completed" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">¿Completada?</label>
    </div>
    <button type="submit" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">{{$submitButtonText}}</button>
</form>