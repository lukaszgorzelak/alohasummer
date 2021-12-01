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
                                <p class="profile__item">Road: <span class="profile__phrase__count"> {{ $countRoadPhrase }}</span></p>
                            </li>
                            <li class="profile__item">
                                <p class="profile__item">Ticket: <span class="profile__phrase__count"> {{ $countTicketPhrase }}</span></p>
                            </li>
                            <li class="profile__item">
                                <p class="profile__item">Rent: <span class="profile__phrase__count"> {{ $countRentPhrase }}</span></p>
                            </li>
                            <li class="profile__item">
                                <p class="profile__item">Time: <span class="profile__phrase__count"> {{ $countTimePhrase }}</span></p>
                            </li>
                            <li class="profile__item">
                                <p class="profile__item">Airport: <span class="profile__phrase__count"> {{ $countAirportPhrase }}</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Road Section !-->
        <section id="road" class="mb-10">
            <h2 class="title road__title mt-10">Road</h2>
            <div class="container mt">
                <div class="wrapper">
                    @foreach($phrases as $phrase)
                        <div class="card">
                            <p class="card__heading">Zwrot:</p> 
                            <p class="card__content">{{ $phrase->phrase }}</p>
                            <p class="card__heading">Tłumaczenie:</p>  
                            <p class="card__content">{{ $phrase->translation }}</p>
                            <div class="card__action">
                                <div class="card__action--close">
                                    @include('Modals/removeRoadPhrase',['id' => "$phrase->id"] ) 
                                    <a href="" class="card__action__road-remove"><i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>  
                                </div>
                                <div class="card__action--edit">
                                    @include('Modals/editRoadPhrase',['id' => "$phrase->id"] ) 
                                    <a href="" class="card__action__edit"><i class="fa fa-edit" aria-hidden="true"></i>
                                    </a>  
                                </div>
                            </div>    
                        </div>
                    @endforeach
                </div>
                <div class="card__add mt">
                    @include('Modals/addRoadPhrase')
                    <button class="card__add-btn card__add-btn--road">Dodaj zwrot</button>
                </div>
            </div>
        </section>
        <!-- End Road Section !-->

        <!--Ticket Section !-->
        <section id="ticket" class="mt-10">
                <h2 class="title">Ticket</h2>
                <div class="container mt">
                    <div class="wrapper">
                        @foreach($tickets as $ticket)
                            <div class="card">
                                <p class="card__heading">Zwrot:</p> 
                                <p class="card__content">{{ $ticket->phrase }}</p>
                                <p class="card__heading">Tłumaczenie:</p>  
                                <p class="card__content">{{ $ticket->translation }}</p>
                                <div class="card__action">
                                    <div class="card__action--close">
                                        @include('Modals/removeTicketPhrase',['id' => "$ticket->id"] ) 
                                        <a href="" class="card__action__road-remove"><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>  
                                    </div>
                                    <div class="card__action--edit">
                                        @include('Modals/editTicketPhrase',['id' => "$ticket->id"] ) 
                                        <a href="" class="card__action__edit"><i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>  
                                    </div>
                                </div>    
                            </div>
                        @endforeach
                    </div>
                    <div class="card__add mt">
                        @include('Modals/addTicketPhrase')
                        <button class="card__add-btn card__add-btn--ticket">Dodaj zwrot</button>
                    </div>
                </div>
            </section>
            <!-- End Ticket Section !-->

            <!--Rent Section !-->
            <section id="rent" class="mt-10">
                <h2 class="title">Rent</h2>
                <div class="container mt">
                    <div class="wrapper">
                        @if( $countRentPhrase > 9)
                            <div class="expand">
                                <p class="expand__paragraph">
                                    <i class="bi bi-arrow-down-circle"></i>
                                </p>
                            </div>
                            <div class="collapse">
                                <p class="collapse__paragraph">
                                    <i class="bi bi-arrow-up-circle"></i>
                                </p>
                            </div>
                        @endif
                        @foreach($rents as $rent)
                            <div class="card">
                                <p class="card__heading">Zwrot:</p> 
                                <p class="card__content">{{ $rent->phrase }}</p>
                                <p class="card__heading">Tłumaczenie:</p>  
                                <p class="card__content">{{ $rent->translation }}</p>
                                <div class="card__action">
                                    <div class="card__action--close">
                                        @include('Modals/removeRentPhrase',['id' => "$rent->id"] ) 
                                        <a href="" class="card__action__road-remove"><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>  
                                    </div>
                                    <div class="card__action--edit">
                                        @include('Modals/editRentPhrase',['id' => "$rent->id"] ) 
                                        <a href="" class="card__action__edit"><i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>  
                                    </div>
                                </div>    
                            </div>
                        @endforeach
                    </div>
                    <div class="card__add mt">
                        @include('Modals/addRentPhrase')
                        <button class="card__add-btn card__add-btn--rent">Dodaj zwrot</button>
                    </div>
                </div>
            </section>
            <!-- End Rent Section !-->

            <!-- Time Section !-->
            <section id="time" class="mt-10">
                <h2 class="title">Time</h2>
                <div class="container mt">
                    <div class="wrapper">
                        @if( $countTimePhrase > 9)
                            <div class="expand">
                                <p class="expand__paragraph">
                                    <i class="bi bi-arrow-down-circle"></i>
                                </p>
                            </div>
                            <div class="collapse">
                                <p class="collapse__paragraph">
                                    <i class="bi bi-arrow-up-circle"></i>
                                </p>
                            </div>
                        @endif
                        @foreach($times as $time)
                            <div class="card card--time">
                                <p class="card__heading">Zwrot:</p> 
                                <p class="card__content">{{ $time->phrase }}</p>
                                <p class="card__heading">Tłumaczenie:</p>  
                                <p class="card__content">{{ $time->translation }}</p>
                                <div class="card__action">
                                    <div class="card__action--close">
                                        @include('Modals/removeTimePhrase',['id' => "$time->id"] ) 
                                        <a href="" class="card__action__road-remove"><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>  
                                    </div>
                                    <div class="card__action--edit">
                                        @include('Modals/editTimePhrase',['id' => "$time->id"] ) 
                                        <a href="" class="card__action__edit"><i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>  
                                    </div>
                                </div>    
                            </div>
                        @endforeach
                    </div>
                    <div class="card__add mt">
                        @include('Modals/addTimePhrase')
                        <button class="card__add-btn card__add-btn--time">Dodaj zwrot</button>
                    </div>
                </div>
            </section>
            <!-- End Time Section !-->

             <!-- Airport Section !-->
             <section id="airport" class="mt-10">
                <h2 class="title">Airport</h2>
                <div class="container mt">
                    <div class="wrapper">
                        @if( $countAirportPhrase > 9)
                            <div class="expand">
                                <p class="expand__paragraph">
                                    <i class="bi bi-arrow-down-circle"></i>
                                </p>
                            </div>
                            <div class="collapse">
                                <p class="collapse__paragraph">
                                    <i class="bi bi-arrow-up-circle"></i>
                                </p>
                            </div>
                        @endif
                        @foreach($airports as $airport)
                            <div class="card card--airport">
                                <p class="card__heading">Zwrot:</p> 
                                <p class="card__content">{{ $airport->phrase }}</p>
                                <p class="card__heading">Tłumaczenie:</p>  
                                <p class="card__content">{{ $airport->translation }}</p>
                                <div class="card__action">
                                    <div class="card__action--close">
                                        @include('Modals/removeAirportPhrase',['id' => "$airport->id"] ) 
                                        <a href="" class="card__action__road-remove"><i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>  
                                    </div>
                                    <div class="card__action--edit">
                                        @include('Modals/editAirportPhrase',['id' => "$airport->id"] ) 
                                        <a href="" class="card__action__edit"><i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>  
                                    </div>
                                </div>    
                            </div>
                        @endforeach
                    </div>
                    <div class="card__add mt">
                        @include('Modals/addAirportPhrase')
                        <button class="card__add-btn card__add-btn--time">Dodaj zwrot</button>
                    </div>
                </div>
            </section>
            <!-- End Airport Section !-->
    @endsection
