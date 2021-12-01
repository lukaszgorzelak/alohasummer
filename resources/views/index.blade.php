@extends('base')
    @section('content') 
    <div class="container confirm">
        <div class="confirm__body">
            <h2 class="confirm__title">Aloha Summer</h2>
            <h4>Rejestracja przebiegła pomyślnie i zostałeś zalogowany!</h4>
        </div>  
    </div> 
    <div class="success"></div> 
        <main>
            <div class="background">
                <section class="travel">
                    <div class="container">
                        <div class="travel__wrapper">
                            <div class="content">                      
                                <h4 class="content__title">Best Destinations around the world</h4>
                                <h1 class="content__text">Travel, enjoy and live a new and full life</h1>
                                <p class="content__describe">Built Wicket longer admire do barton vanity itself do in it. Preferred to sportsmen it engrossed listening. Park gate sell they west hard for the.</p>                        
                            </div>
                            <div class="content__background">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!--Road Section !-->
            <section id="road">
                <h2 class="title road__title mt-10">Road</h2>
                <div class="container container--road mt">
                    <div class="wrapper wrapper--road">
                        @if( $countRoadPhrase > 9)
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
                        @foreach($phrases as $phrase)
                            <div class="card card--road">
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
                        <button class="card__add-btn card__add-btn--road" type="submit">Dodaj zwrot</button>
                    </div>
                </div>
            </section>
            <!-- End Road Section !-->

             <!--Ticket Section !-->
             <section id="ticket" class="mt-10">
                <h2 class="title">Ticket</h2>
                <div class="container mt">
                    <div class="wrapper">
                        @if( $countTicketPhrase > 9)
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
                        @foreach($tickets as $ticket)
                            <div class="card card--ticket">
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
                            <div class="card card--rent">
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

             <!-- Quiz Section !-->
             <section id="quiz" class="quiz mt-10">
                <h2 class="quiz__title">Quiz</h2>
                    <div class="container mt mb-10">
                        <div class="quiz__wrapper">
                            <p class="quiz__header">Wylosowany zwrot</p>
                            <div class="quiz__random__phrase">
                            </div>
                            <div class="quiz__check__answear">
                            </div>
                            <div class="quiz__translate">
                                <input  id="quiz__translate__field" class="quiz__translate__field" type="text" name="quiz__translate" placeholder="Wpisz tłumaczenie">
                            </div>
                            <div class="quiz__buttons">
                                <button class="quiz__btn-draw">Losuj zwrot</button>
                                <button class="not-allowed quiz__btn-check">Sprawdź</button>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- End Quiz Section !-->

            <!-- Opinions Section !-->
            <section class="opinions">
                <h2 class="opinions__title">Opinie</h2>
                <div class="container opinions__wrapper mt mb-10">
                    <div class="opinions__card">
                        <img src="https://randomuser.me/api/portraits/men/81.jpg" alt="">
                        <p class="opinions__card_name">Paweł Kowalski</p>
                        <p class="opinions__card__opinion">"<span class="opinions__card__aloha-summer">Aloha summer</span> bardzo pomogła mi na wakcjach zagranicą"</p>
                    </div>
                    <div class="opinions__card">
                        <img src="https://randomuser.me/api/portraits/women/10.jpg" alt="">
                        <p class="opinions__card_name">Monika Nowak</p>
                        <p class="opinions__card__opinion">"<span class="opinions__card__aloha-summer">Aloha summer</span> to bardzo przydatna aplikacja"</p>
                    </div>
                    <div class="opinions__card">
                        <img src="https://randomuser.me/api/portraits/men/70.jpg" alt="">
                        <p class="opinions__card_name">Filip Bobek</p>
                        <p class="opinions__card__opinion">"Dzięki <span class="opinions__card__aloha-summer">Aloha summer</span> można podróżować bez obaw"</p>
                    </div>
                    <div class="opinions__card">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="">
                        <p class="opinions__card_name">Aneta Minda</p>
                        <p class="opinions__card__opinion">"Nie wyobrażam sobie podróżowania bez <span class="opinions__card__aloha-summer">Aloha summer</span>"</p>
                    </div>
                </div>
            </section>
            <!-- End Opinions Section !-->
        </main>
    @stop