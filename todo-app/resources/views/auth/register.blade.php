@extends('layouts.app')

@section('content')

    <form action="{{ route('storeRegister') }}" method="POST" class="max-w-md mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        @csrf
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Регистрация</h2>

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Имя:</label>
            <input type="text" id="name" name="name" required
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
        @error('name')
        <div class="text-red-500">{{ $message }}</div>
        @enderror

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
            <input type="email" id="email" name="email" required
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
        @error('email')
        <div class="text-red-500">{{ $message }}</div>
        @enderror

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Пароль:</label>
            <input type="password" id="password" name="password" required
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
        @error('password')
        <div class="text-red-500">{{ $message }}</div>
        @enderror

        <div class="mb-6">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Подтвердите пароль:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>
        @error('password_confirmation')
        <div class="text-red-500">{{ $message }}</div>
        @enderror

        <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md shadow-sm transition duration-300">
            Зарегистрироваться
        </button>
    </form>

@endsection
