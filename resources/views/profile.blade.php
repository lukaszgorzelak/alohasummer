@extends('base')
    @section('content')
        <section id="profile">
            <h1 class="title title--profile">Profil</h1>
            <div class="container mt">
                <div class="profile__go__back mb-4">
                    <a href="{{ route('start') }}"><i class="bi bi-arrow-left-circle"></i> Powrót</a>
                </div>
                <div class="wrapper__profile mb-10">
                    <div class="profile__user">
                        <h5 class="profile__tittle">Dane użytkownika</h5>
                        <ul class="profile__list profile__list--user">
                        {{--@foreach($phrases as $phrase)
                                @if ($loop->first)--}}
                                    <li class="profile__item">
                                        <p><span class="profile__item--name">IMIĘ:</span> <span> {{ $user_name }}</span></p>
                                    </li>
                                    <li class="profile__item">
                                        <p class="profile__item--email"><span class="profile__item--email">E-MAIL:</span> <span> {{ $user_email }}</span></p>
                                    </li>
                                    <li class="profile__item">
                                        <p class="profile__item--email"><span class="profile__item--email">ID:</span> <span> {{ $user_id }}</span></p>
                                    </li>
                                    {{--@endif
                            @endforeach--}}
                        </ul>
                    </div>
                    <div class="profile__user__phrase">
                        <h5 class="profile__tittle">Dodane zwroty</h5>
                        <ul class="profile__list profile__list--phrase">
                            <li class="profile__item">
                                <p class="profile__item">Road:
                                    <span class="profile__phrase__count"> 
                                        @if ($countRoadPhrase == 0 ) brak @else {{ $countRoadPhrase }}@endif
                                    </span>
                                </p>
                            </li>
                            <li class="profile__item">
                                <p class="profile__item">Ticket: 
                                    <span class="profile__phrase__count"> 
                                        @if ($countTicketPhrase == 0 ) brak @else {{ $countTicketPhrase }}@endif
                                    </span>
                                </p>
                            </li>
                            <li class="profile__item">
                                <p class="profile__item">Rent: 
                                    <span class="profile__phrase__count"> 
                                        @if ($countRentPhrase == 0 ) brak @else {{ $countRentPhrase }}@endif
                                    </span>
                                </p>
                            </li>
                            <li class="profile__item">
                                <p class="profile__item">Time: 
                                    <span class="profile__phrase__count"> 
                                        @if ($countTimePhrase == 0 ) brak @else {{ $countTimePhrase }}@endif
                                    </span>
                                </p>
                            </li>
                            <li class="profile__item">
                                <p class="profile__item">Airport: 
                                    <span class="profile__phrase__count"> 
                                        @if ($countAirportPhrase == 0 ) brak @else {{ $countAirportPhrase }}@endif
                                    </span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Phrases Section !-->
        @include('phrases')
        <!-- End Phrases Section !-->
    @endsection
