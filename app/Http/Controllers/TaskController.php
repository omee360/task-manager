<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Tasks ki list dikhata hai
    public function index()
    {
        // Sare tasks database se fetch karo
        $tasks = Task::all();

        // tasks/index view ko render karo aur tasks data pass karo
        return view('tasks.index', compact('tasks'));
    }

    // Naya task create karne ka form dikhata hai
    public function create()
    {
        // tasks/create view ko render karo
        return view('tasks.create');
    }

    // Naya task database mein save karta hai
    public function store(Request $request)
    {
        // Form data validate karo
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Naya task create karo
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Redirect to tasks list with success message
        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    // Task edit karne ka form dikhata hai
    public function edit(Task $task)
    {
        // tasks/edit view ko render karo aur task data pass karo
        return view('tasks.edit', compact('task'));
    }

    // Task ko update karta hai
    public function update(Request $request, Task $task)
    {
        // Form data validate karo
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Task update karo
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Redirect to tasks list with success message
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    // Task ko delete karta hai
    public function destroy(Task $task)
    {
        // Task delete karo
        $task->delete();

        // Redirect to tasks list with success message
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}
