<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index(): View
    {
        $tasks = Task::latest('id')->paginate(10);
        return view('tasks.index', compact('tasks'));
    }

    public function create(): View
    {
        return view('tasks.create', [
            'task' => new Task(),
            'method' => 'POST',
            'actionUrl' => route('tasks.store'),
            'submitButtonText' => 'Crear tarea'
        ]);
    }

    public function store(TaskRequest $request): RedirectResponse
    {
        Task::create($request->validated());
        return redirect(route('tasks.index'));
    }

    public function edit(Task $task): View
    {
        return view('tasks.edit', [
            'task' => $task,
            'method' => 'PUT',
            'actionUrl' => route('tasks.update', $task),
            'submitButtonText' => 'Actualizar tarea'
        ]);
    }

    public function update(TaskRequest $request, Task $task): RedirectResponse
    {
        $task->update($request->validated());
        return redirect(route('tasks.index'));
    }

    public function toggle(Task $task): RedirectResponse
    {
        $task->update([
            'completed' => ! $task->completed
        ]);

        return redirect(route('tasks.index'));
    }

    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();
        return redirect(route('tasks.index'));
    }
}
