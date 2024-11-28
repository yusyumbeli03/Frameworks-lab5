@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold mb-6">Создать новую задачу</h1>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Название</label>
                <input type="text" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" id="name" name="name" required>
            </div>
            @error('name')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Описание</label>
                <textarea class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" id="description" name="description"></textarea>
            </div>
            @error('description')
            <div class="text-red-500">{{ $message }}</div>
            @enderror

            <div class="mb-4">
                <label for="due_date" class="block text-sm font-medium text-gray-700">Дата выполнения</label>
                <input type="date" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" id="due_date" name="due_date" required value="{{ old('due_date') }}">
            </div>
            @error('due_date')
            <div class="text-red-500">{{ $message }}</div>
            @enderror

            <div class="mb-4">
                <label for="category_id" class="block text-sm font-medium text-gray-700">Категория</label>
                <select class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" id="category_id" name="category_id" required>
                    <option value="">Выберите категорию</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('category_id')
            <div class="text-red-500">{{ $message }}</div>
            @enderror

            <div class="mb-4">
                <label for="tags" class="block text-sm font-medium text-gray-700">Теги</label>
                <select class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" id="tags" name="tags[]" multiple>
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="w-full mt-4 px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Создать задачу</button>
        </form>
    </div>
@endsection
