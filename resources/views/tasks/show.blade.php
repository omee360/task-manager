@extends('layouts.app')

@section('title', 'Task Details')

@section('content')
    <!-- Page heading -->
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Task Details</h1>
    <!-- Task details card -->
    <div class="bg-white shadow-md rounded px-6 py-6">
        <h2 class="text-xl font-semibold text-gray-700 mb-2">{{ $task->title }}</h2>
        <p class="text-gray-600 mb-4">{{ $task->description ?? 'No description provided' }}</p>
        <p class="text-sm text-gray-500">Created: {{ $task->created_at->format('d M Y H:i') }}</p>
        <p class="text-sm text-gray-500">Updated: {{ $task->updated_at->format('d M Y H:i') }}</p>
        <!-- Actions -->
        <div class="mt-6 flex space-x-4">
            <a href="{{ route('tasks.edit', $task) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure you want to delete this task??')">Delete</button>
            </form>
            <a href="{{ route('tasks.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">Back to Tasks</a>
        </div>
    </div>
@endsection