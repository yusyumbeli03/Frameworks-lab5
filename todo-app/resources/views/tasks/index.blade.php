@extends('layouts.app')

@section('content')
    <h1>Список задач</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Создать задачу</a>
    <table class="table mt-3">
        <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Категория</th>
            <th>Теги</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->name }}</td>
                <td>{{ $task->category->name ?? 'Не указано' }}</td>
                <td>
                    @foreach($task->tags as $tag)
                        <span class="badge badge-secondary">{{ $tag->name }}</span>
                    @endforeach
                </td>
                <td>
                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info btn-sm">Просмотр</a>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">Редактировать</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

