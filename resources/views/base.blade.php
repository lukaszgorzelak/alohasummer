<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Poppins:wght@400;500;600;900&family=Roboto:wght@400;700&family=Volkhov:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>   
        <title>Aloha Summer</title>
    </head>
    <body>
        <header>
            <div id="scroll"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>
            <div class="logo">
                <a href="{{ route('start') }}">
                    <img class="logo__site" src="{{ asset('images/aloha-summer.svg') }}" alt="">
                </a>
            </div>
            <nav>
                <ul class="nav nav--desktop">
                    @guest
                        <li class="nav__item">
                            <a class="nav__link" href="{{ route('login') }}">Logowanie</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav__item nav__item--sign-up">
                                <a class="nav__link nav__link--sign-up" href="{{ route('register') }}">Rejestracja</a>
                            </li>
                        @endif
                    @else
                        <li class="nav__item">
                            <a href="#road" class="nav__link">Road</a>
                        </li>
                        <li class="nav__item">
                            <a href="#ticket" class="nav__link">Ticket</a>
                        </li>
                        <li class="nav__item">
                            <a href="#rent" class="nav__link">Rent</a>
                        </li>
                        <li class="nav__item">
                            <a href="#time" class="nav__link">Time</a>
                        </li>
                        <li class="nav__item">
                            <a href="#airport" class="nav__link">Airport</a>
                        </li>
                        @if (!Route::is('profile'))
                        <li class="nav__item nav__item--quiz">
                            <a href="#quiz" class="nav__link">Quiz</a>
                        </li>
                        @endif
                        <li class="nav__item dropdown">
                            <a class="nav__link " href="#" role="button">
                                {{ Auth::user()->name }}
                            </a>
                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                        </li>
                        <ul class="nav--expand">
                            <li class="nav__item nav__item--">
                                <a class="nav__link" href="{{ route('profile', ['id' => Auth::user()->id ]) }}">Profil</a>
                            </li>
                            <li class="nav__item nav__item--">
                            <a class="nav__link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Wyloguj
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </li>
                        </ul>
                    @endguest
                    </ul>
                </ul>
            </nav>
            <!-- Hamburger Menu !-->
            <button class="hamburger">
                <span class="hamburger__box">
                <span class="hamburger__inner"></span>
                </span>
            </button>
            <div class="navigation">
                <nav>
                    <ul class="nav nav--hamburger">
                        @guest
                            <li class="nav__item">
                                <a class="nav__link" href="{{ route('login') }}">Logowanie</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav__item nav__item--sign-up">
                                    <a class="nav__link nav__link--sign-up" href="{{ route('register') }}">Rejestracja</a>
                                </li>
                            @endif
                        @else
                            <li class="nav__item">
                                <a class="nav__link" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__link" href="{{ route('profile',['id' => Auth::user()->id ]) }}">Profil</a>
                            </li>
                            <li class="nav__item">
                                <a href="#road" class="nav__link">Road</a>
                            </li>
                            <li class="nav__item">
                                <a href="#ticket" class="nav__link">Ticket</a>
                            </li>
                            <li class="nav__item">
                                <a href="#rent" class="nav__link">Rent</a>
                            </li>
                            <li class="nav__item">
                                <a href="#time" class="nav__link">Time</a>
                            </li>
                            <li class="nav__item">
                                <a href="#airport" class="nav__link">Airport</a>
                            </li>
                            <li class="nav__item">
                                <a href="#quiz" class="nav__link">Quiz</a>
                            </li>
                            <li class="nav__item">
                                <a class="nav__link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                   Wyloguj
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </nav>
            </div>
            <!-- End Hamburger Menu !-->          
        </header>
        @yield('content')
        <footer>
            <div class="container footer__wrapper">
                <div class="logo">
                    <img class="logo__site" src="{{ asset('images/aloha-summer.svg') }}" alt="">
                </div>
                <div class="footer__copyright">
                    <p>COPYRIGHT BY lukaszgorzelak91@gmail.com © {{ date("Y") }}</p>
                </div>
                <div class="social__icons">
                    <div class="social__icons--gihub">
                        <a href="https://github.com/lukaszgorzelak?tab=repositories">
                            <i class="bi-github"></i>
                        </a>
                    </div>
                    <div class="social__icons--linkedin">
                        <a href="https://linkedin.com/in/łukasz-gorzelak-545074149">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>