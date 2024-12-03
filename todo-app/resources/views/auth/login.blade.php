@extends('layouts.app')

@section('content')

    <form action="{{ route('storeLogin') }}" method="POST" class="max-w-md mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        @csrf
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Авторизация</h2>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
            <input type="email" id="email" name="email" required
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
        @error('email')
        <div class="text-red-500">{{ $message }}</div>
        @enderror

        <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-gray-700">Пароль:</label>
            <input type="password" id="password" name="password" required
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
        @error('password')
        <div class="text-red-500">{{ $message }}</div>
        @enderror

        <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md shadow-sm transition duration-300">
            Войти
        </button>

        <p class="mt-3">
            Нет аккаунта?
            <a href="{{ route('storeRegister') }}" class="text-blue-500 hover:text-blue-700 underline">
                Зарегистрируйтесь здесь
            </a>
        </p>

    </form>
@endsection
