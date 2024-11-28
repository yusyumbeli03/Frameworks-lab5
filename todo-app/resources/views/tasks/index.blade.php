@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold mb-6">Список задач</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-4 mb-4 rounded-md">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('tasks.create') }}" class="inline-block mb-4 px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            Создать задачу
        </a>

        <table class="min-w-full table-auto bg-white border-collapse">
            <thead>
            <tr class="bg-gray-100 text-left">
                <th class="px-4 py-2 font-medium text-gray-700">ID</th>
                <th class="px-4 py-2 font-medium text-gray-700">Название</th>
                <th class="px-4 py-2 font-medium text-gray-700">Категория</th>
                <th class="px-4 py-2 font-medium text-gray-700">Теги</th>
                <th class="px-4 py-2 font-medium text-gray-700">Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $task->id }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $task->name }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $task->category->name ?? 'Не указано' }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">
                        @foreach($task->tags as $tag)
                            <span class="inline-block bg-gray-200 text-gray-800 text-xs px-2 py-1 rounded-full mr-2">{{ $tag->name }}</span>
                        @endforeach
                    </td>
                    <td class="px-4 py-2 text-sm text-gray-700">
                        <a href="{{ route('tasks.show', $task->id) }}" class="inline-block px-3 py-1 bg-blue-500 text-white text-xs font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Просмотр
                        </a>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="inline-block px-3 py-1 bg-yellow-500 text-white text-xs font-semibold rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                            Редактировать
                        </a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 py-1 bg-purple-600 text-white text-xs font-semibold rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                                Удалить
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
