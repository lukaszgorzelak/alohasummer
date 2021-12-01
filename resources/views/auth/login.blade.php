@extends('base')


@section('content')

<div class="container login">
    <h1 class="login__title">Logowanie</h1>
   
    <form class="login__form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        
        <div class="login__form__card">
            <label for="email">Adres E-mail</label>
            <input id="email" type="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email">
            @error('email')
                <div class="alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="login__form__card">
            <label for="password"> Hasło</label>
            <input id="password" type="password" name="password" class="@error('password') is-invalid @enderror" autocomplete="new-password">
            @error('password')
                <div class="alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="login__form__card login__form__card--remember-me">
                <input class="input__remember-me" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label for="remember">
                    Zapamiętaj Mnie
                </label>
        </div>
        <div class="form__button">
            <button type="submit" class="form__button--login">
               Zaloguj
            </button>
        </div>
        <div class="login__form__card login__form__card--forgot-password">
            @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}">
                    <!-- Zapomniałeś hasła? -->
                </a>
            @endif
        </div>
    </form>
</div>

<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>!-->
@stop