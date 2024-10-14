@extends('layouts.app')

@section('title', 'Список задач')

@section('content')
    <h1 class="text-2xl font-bold mb-4 text-center">List of Tasks</h1>

    <ul class="flex space-x-10 justify-center">
        @foreach($tasks as $task)
            <li class="bg-purple-500 text-white rounded-lg shadow-lg p-4 hover:bg-purple-600 transition duration-300">
                <a href="{{ url('/tasks', $task['id']) }}" class="block text-center">
                    {{ $task['title'] }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
