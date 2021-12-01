@extends('base')

@section('content')

<section id="verified" class="mt-10">
    <h2 class="title">Weryfikacja</h2>
    <div class="container">
        <div class="wrapper__verified mt">
            <div class="verified__mesaage">
                <p class="verified__paragraph">Zweryfikuj swój adres e-mail</p>
                <p class="verified__paragraph verified__paragraph--small">Zanim przejdziesz dalej, sprawdź swój adres email na który został wysłany link weryfikacyjny.</p>
                <p class="verified__paragraph verified__paragraph--small">Jeśli wiadomość nie dotarła kliknij w poniższy link.</p>
                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="verified__button">Link weryfikacyjny</button>.
                </form>
                @if (session('resent'))
                    <div class="verified__mesaage--success" role="alert">
                        <p>Nowy link weryfikacyjny został wysłany na twój adres email</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
