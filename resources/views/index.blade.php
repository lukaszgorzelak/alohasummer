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

            <!-- Phrases Section !-->
            @include('phrases')
            <!-- End Phrases Section !-->

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