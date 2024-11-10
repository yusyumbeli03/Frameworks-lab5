@extends('layouts.app')

@section('content')
    <h1>Задача: {{ $task->name }}</h1>

    <div class="mb-3">
        <strong>Описание:</strong> {{ $task->description ?? 'Нет описания' }}
    </div>

    <div class="mb-3">
        <strong>Категория:</strong> {{ $task->categories->name ?? 'Не указано' }}
    </div>

    <div class="mb-3">
        <strong>Теги:</strong>
        @foreach($task->tags as $tag)
            <span class="badge badge-secondary">{{ $tag->name }}</span>
        @endforeach
    </div>

    <div class="mb-3">
        <strong>Дата создания:</strong> {{ $task->created_at->toDateString() }}
    </div>

    <div class="mb-3">
        <strong>Дата обновления:</strong> {{ $task->updated_at->toDateString() }}
    </div>

    <div class="mb-3">
        <strong>Статус:</strong> {{ $task->status ? 'Завершена' : 'В процессе' }}
    </div>

    <a href="{{ route('tasks.index') }}" class="btn btn-primary">Назад к списку задач</a>
    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Редактировать</a>
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
@endsection
