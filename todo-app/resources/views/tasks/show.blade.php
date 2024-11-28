@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold mb-6">Задача: {{ $task->name }}</h1>

        <div class="mb-4">
            <strong class="text-gray-700">Описание:</strong> <span class="text-gray-600">{{ $task->description ?? 'Нет описания' }}</span>
        </div>

        <div class="mb-4">
            <strong class="text-gray-700">Категория:</strong> <span class="text-gray-600">{{ $task->category->name ?? 'Не указано' }}</span>
        </div>

        <div class="mb-4">
            <strong class="text-gray-700">Теги:</strong>
            @foreach($task->tags as $tag)
                <span class="inline-block bg-gray-200 text-gray-800 text-xs px-2 py-1 rounded-full mr-2">{{ $tag->name }}</span>
            @endforeach
        </div>

        <div class="mb-4">
            <strong class="text-gray-700">Дата выполнения:</strong>
            <span class="text-gray-600">{{ $task->due_date  ?? 'Не указана' }}</span>
        </div>


        <div class="mb-4">
            <strong class="text-gray-700">Дата создания:</strong> <span class="text-gray-600">{{ $task->created_at->toDateString() }}</span>
        </div>

        <div class="mb-4">
            <strong class="text-gray-700">Дата обновления:</strong> <span class="text-gray-600">{{ $task->updated_at->toDateString() }}</span>
        </div>

        <div class="mb-4">
            <strong class="text-gray-700">Статус:</strong> <span class="text-gray-600">{{ $task->status ? 'Завершена' : 'В процессе' }}</span>
        </div>

        <div class="flex space-x-4 mt-6">
            <a href="{{ route('tasks.index') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Назад к списку задач
            </a>
            <a href="{{ route('tasks.edit', $task->id) }}" class="px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                Редактировать
            </a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                    Удалить
                </button>
            </form>
        </div>
    </div>
@endsection
