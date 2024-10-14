@extends('layouts.app') <!-- Подключение макета -->

@section('title', 'Главная страница') <!-- Заголовок страницы -->

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center mb-4">Welcome to the To-Do App!</h1>
        <p class="text-lg text-center mb-6">It is a task management app specially designed for teamwork.</p>

        <ul class="flex flex-row justify-center items-center space-x-4">
            <li>
                <a href="{{ url('/tasks') }}" class="bg-purple-500 text-white rounded-lg px-4 py-2 shadow hover:bg-purple-600 transition duration-300">
                    List of tasks
                </a>
            </li>
            <li>
                <a href="{{ url('/tasks/create') }}" class="bg-purple-500 text-white rounded-lg px-4 py-2 shadow hover:bg-purple-600 transition duration-300">
                    Create a task
                </a>
            </li>
        </ul>
        
    </div>
@endsection
