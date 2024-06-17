{{-- login.blade.php --}}
@extends('layout')

@section('main_content')
    <div class="container">
        <div class="row justify-content-center" style="height: 100vh;">
            <div class="col-md-6">
                <form method="POST" action="{{ route('login') }}" class="form">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal form-register" >Авторизация</h1>

                    <div class="mb-3 form-register-field">
                        <label for="floatingInput" class="form-label">e-mail:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="Введите e-mail..." required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="mb-3 form-register-field">
                        <label for="floatingPassword" class="form-label">Пароль:</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Введите пароль..." required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Запомнить меня
                        </label>
                    </div>

                    <button class="btn btn-primary w-100 py-2 form-register-field" type="submit">Войти</button>
                </form>
            </div>
        </div>
    </div>
@endsection
