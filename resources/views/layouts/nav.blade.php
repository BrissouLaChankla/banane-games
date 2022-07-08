<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top py-3">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/logo_nanagames.webp') }}" class="logo-nav" width="185" height="41" alt="Logo Nanagames">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
 
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto ">

                <li class="nav-item dropdown">
                    <a id="navbarDropdown"
                        class="nav-link dropdown-toggle {{ Route::is('show-game') ? 'active' : '' }}" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{-- Pas réussi à variabiliser URL, à retenter --}}
                        @if (Route::is('show-game'))
                            <img src="{{ asset('img/navbar/games_colored.webp') }}" width="30" height="30" class="me-1"
                                alt="Icone section Jeu | Nanagames">
                        @else
                            <img src="{{ asset('img/navbar/games.webp') }}" width="30" height="30" class="me-1"
                                alt="Icone section Jeu | Nanagames">
                        @endif
                        Les jeux
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @foreach ($games as $game)
                            <a href="{{ route('show-game', ['slug' => $game->slug]) }}" class="dropdown-item">
                                {{ $game->title }}
                            </a>
                        @endforeach
                    </div>

                </li>
            <li class="nav-item">
                    <a class="nav-link {{ Route::is('show-about') ? 'active' : '' }}"
                        href="{{ route('show-about') }}">
                        {{-- Pas réussi à variabiliser URL, à retenter --}}
                        @if (Route::is('show-about'))
                            <img src="{{ asset('img/navbar/about_colored.webp') }}" width="30" height="30" class="me-1"
                                alt="Icone section About | Nanagames">
                        @else
                            <img src="{{ asset('img/navbar/about.webp') }}" width="30" height="30" class="me-1"
                                alt="Icone section About | Nanagames">
                        @endif
                        A propos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Route::is('show-blog') ? 'active' : '' }}"
                        href="{{ route('show-blog') }}">
                        {{-- Pas réussi à variabiliser URL, à retenter --}}
                        @if (Route::is('show-blog'))
                            <img src="{{ asset('img/navbar/news_colored.webp') }}" width="30" height="30" class="me-1"
                                alt="Icone section Blog | Nanagames">
                        @else
                            <img src="{{ asset('img/navbar/news.webp') }}" width="30" height="30" class="me-1"
                                alt="Icone section Blog | Nanagames">
                        @endif

                        Actualités
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('show-contact') ? 'active' : '' }}"
                        href="{{ route('show-contact') }}">
                        {{-- Pas réussi à variabiliser URL, à retenter --}}
                        @if (Route::is('show-contact'))
                            <img src="{{ asset('img/navbar/contact_colored.webp') }}" width="30" height="30" class="me-1"
                                alt="Icone section Contact | Nanagames">
                        @else
                            <img src="{{ asset('img/navbar/contact.webp') }}" width="30" height="30" class="me-1"
                                alt="Icone section Contact | Nanagames">
                        @endif
                        Contact
                    </a>
                </li>

                @auth 

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show-dashboard-admin') }}">
                        Dashboard 
                    </a>
                </li>
                
                @endauth


           
            </ul>
        </div>
    </div>
</nav>
