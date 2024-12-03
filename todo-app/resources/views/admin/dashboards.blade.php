@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6 bg-gray-100 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Кабинеты пользователей</h1>
        <ul>
            @foreach ($users as $user)
                <li>
                    <a href="{{ route('dashboard', $user->id) }}" class="text-blue-500 hover:underline">
                        {{ $user->name }} ({{ $user->role }})
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
