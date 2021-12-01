@extends('base')

@section('content')
<div class="container register">
    <h1 class="register__title">Rejestracja</h1>
   
    <form class="register__form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        
        <div class="register__form__card">
            <label for="name">Imię</label>
            <input id="name"  type="text" name="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" autofocus>
            @error('name')
                <div class="alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="register__form__card">
            <label for="email">Adres E-mail</label>
            <input id="email" type="email"  name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email">
            @error('email')
                <div class="alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="register__form__card">
            <label for="password"> Hasło</label>
            <input id="password" type="password" name="password" class="@error('password') is-invalid @enderror" autocomplete="new-password">
            @error('password')
                <div class="alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="register__form__card">
            <label for="password-confirm" >Powtórz hasło</label>
            <input id="password-confirm" type="password" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror" autocomplete="new-password">
            @error('password_confirmation')
                <div class="alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form__button mt">
            <button type="submit" class="form__button--register">
                Rejestracja
            </button>
        </div>
    </form>
</div>
  <!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>!-->
@endsection
