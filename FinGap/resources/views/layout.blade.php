<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container py-3">
    <header>
        <div class="header-div d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                <img src="{{ asset('/iconhome.png') }}" alt="Icon" style="width: 40px; height: 40px; margin-right: 10px;">

                <span class="fs-4 text-white">Школа финансовой грамотности &#171ФинПросвет&#187</span>
            </a>
            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 link-body-emphasis text-decoration-none text-white" href="/about">О нас</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none text-white" href="#">Все новости</a>
                <a class="me-3 py-2 link-body-emphasis text-decoration-none text-white" href="#">Отзывы</a>

                @if(Auth::check())
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="py-2 link-body-emphasis text-decoration-none btn btn-primary btn-logout">Выход</button>
                    </form>
                @else
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none text-white" href="/login">Вход</a>
                    <a class="py-2 link-body-emphasis text-decoration-none btn btn-primary" href="/register">Регистрация</a>
                @endif
            </nav>

        </div>
    </header>

    @yield('main_content')
</div>
</body>
</html>
