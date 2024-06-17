{{-- register.blade.php --}}
@extends('layout')

@section('main_content')
    <div class="container">
        <div class="row justify-content-center" style="height: 100vh;">
            <div class="col-md-6 form-register">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal">Регистрация</h1>

                    <div class="mb-3 form-register-field">
                        <label for="name" class="form-label">Имя:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Введите ваше имя..." value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="mb-3 form-register-field">
                        <label for="email" class="form-label">E-mail адрес:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Введите e-mail" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="mb-3 form-register-field">
                        <label for="password" class="form-label">Пароль:</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Введите пароль..." required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="mb-3 form-register-field">
                        <label for="password-confirm" class="form-label">Введите пароль еще раз:</label>
                        <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Подтвердите пароль..." required autocomplete="new-password">
                    </div>

                    <button class="btn btn-primary w-100 py-2 form-register-field" type="submit">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </div>
@endsection
