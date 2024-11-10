@extends('layouts.app')

@section('content')
    <h1>Создать новую задачу</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Название</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="category_id">Категория</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <option value="">Выберите категорию</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tags">Теги</label>
            <select class="form-control" id="tags" name="tags[]" multiple>
                <!-- Пример данных тегов -->
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Создать задачу</button>
    </form>
@endsection
