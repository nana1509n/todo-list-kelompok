<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $total = $tasks->count();
        $completed = $tasks->where('status', 'done')->count();
        $progress = $total ? round(($completed / $total) * 100) : 0;

        return view('tasks.index', compact('tasks', 'progress'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'status' => 'required|in:in_progress,done',
        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task berhasil ditambahkan!');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'status' => 'required|in:in_progress,done',
            'deadline' => 'nullable|date',
        ]);

        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task berhasil diperbarui!');
    }

    public function progress()
    {
        $total = Task::count();
        $done = Task::where('status', 'done')->count();
        $progress = $total > 0 ? round(($done / $total) * 100) : 0;

        return view('tasks.progress', compact('progress'));
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task berhasil dihapus!');
    }
}
