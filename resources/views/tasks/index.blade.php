@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
    <!-- Page heading -->
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Tasks</h1>
    <!-- Link to create new task -->
    <a href="{{ route('tasks.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mb-4">Add New Task</a>
    <!-- Tasks list -->
    @if($tasks->isEmpty())
        <p class="text-gray-600">Koi tasks nahi hain. Naya task banayein!</p>
    @else
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($tasks as $task)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <a href="{{ route('tasks.show', $task) }}" class="text-blue-600 hover:text-blue-900">{{ $task->title }}</a>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $task->description ?? 'N/A' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="{{ route('tasks.edit', $task) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                                <form action="{{ route('tasks.destroy', $task) }}" method="post" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 hover:cursor-pointer ml-4" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection