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
                    @if( $countRoadPhrase == 0 )
                        <p class="empty">Brak zwrotów</p>
                    @endif
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
                    @if( $countTicketPhrase == 0 )
                        <p class="empty">Brak zwrotów</p>
                    @endif
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
                    @if( $countRentPhrase == 0 )
                        <p class="empty">Brak zwrotów</p>
                    @endif
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
                    @if( $countTimePhrase == 0 )
                        <p class="empty">Brak zwrotów</p>
                    @endif
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
                    @if( $countAirportPhrase == 0 )
                        <p class="empty">Brak zwrotów</p>
                    @endif
                    <div class="card__add mt">
                        @include('Modals/addAirportPhrase')
                        <button class="card__add-btn card__add-btn--time">Dodaj zwrot</button>
                    </div>
                </div>
            </section>
            <!-- End Airport Section !-->