@extends('base')

@section('content')
<style>
    footer {
        position: absolute;
        bottom: 7%;
        width: 100%;
    }
</style>
<div class="container confirm">
    <div class="confirm__body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h2 class="confirm__title">Aloha Summer</h2>
        <h4>Rejestracja przebiegła pomyślnie i zostałeś zalogowany!</h4>
    </div>
</div>
@endsection
