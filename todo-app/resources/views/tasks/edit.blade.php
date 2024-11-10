@extends('layouts.app')

@section('content')
    <h1>Редактировать задачу: {{ $task->name }}</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Название</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $task->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea class="form-control" id="description" name="description">{{ $task->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="category_id">Категория</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <option value="">Выберите категорию</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $task->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tags">Теги</label>
            <select class="form-control" id="tags" name="tags[]" multiple>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}"
                        {{ $task->tags->contains($tag->id) ? 'selected' : '' }}>
                        {{ $tag->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Сохранить изменения</button>
    </form>
@endsection
