@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Личный кабинет</h1>
        <p class="text-lg">Добро пожаловать, {{ $user->name }}!</p>
        <p class="text-gray-700">Ваш email: {{ $user->email }}</p>
        <p class="text-gray-700">Роль: {{ $user->role }}</p>

        <div class="mt-6">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                        class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600">
                    Выйти
                </button>
            </form>
        </div>
    </div>
@endsection
