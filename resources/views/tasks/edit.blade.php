@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
    <!-- Page heading -->
    <h1 class="text-3xl font-bold text-gray-800 mb-4">Edit Task</h1>
    <!-- Task edit form -->
    <form action="{{ route('tasks.update', $task) }}" method="POST" class="bg-white shadow-md rounded px-6 py-6 mb-4">
        @csrf
        @method('PATCH')
        <!-- Title field -->
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none @error('title') border-red-500 @enderror"
                required>
            @error('title')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
        </div>
        <!-- Description field -->
        <div class="mb-6">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
            <textarea name="description" id="description"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description')
                border-red-500                    
                @enderror">{{ old('description', $task->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
        </div>
        <!-- Submit button -->
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Update Task
            </button>
            <a href="{{ route('tasks.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                Cancel
            </a>
        </div>
    </form>
@endsection
