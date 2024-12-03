<header>
    <h1 class='header-title'>To-Do App</h1>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Главная</a></li>
            <li><a href="{{ url('/about') }}">О нас</a></li>

            @auth
                @if (Auth::user()->isAdmin())
                    <li><a href="{{ route('admin.dashboards') }}">Все кабинеты</a></li>
                @endif
                <li><a href="{{ route('dashboard') }}">Личный кабинет</a></li>
{{--                    <li><a href="{{ route('dashboard', ['user' => Auth::id()]) }}">Личный кабинет</a></li>--}}

                    <li>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit"
                                class="bg-purple-500 text-white font-semibold py-2 px-4 rounded hover:bg-purple-600 transition-all">
                            Выйти
                        </button>
                    </form>
                </li>
            @else
                <li><a href="{{ route('login') }}">Войти</a></li>
                <li><a href="{{ route('register') }}">Регистрация</a></li>
            @endauth
        </ul>
    </nav>
</header>
