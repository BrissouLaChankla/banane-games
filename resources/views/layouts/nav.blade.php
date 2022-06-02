<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top py-3">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
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
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown"
                        class="nav-link dropdown-toggle {{ Route::is('show-game') ? 'active' : '' }}" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{-- Pas réussi à variabiliser URL, à retenter --}}
                        @if (Route::is('welcome') || Route::is('show-game'))
                            <img src="{{ asset('img/navbar/games_colored.webp') }}" class="me-1"
                                alt="Icone section Jeu | Nanagames">
                        @else
                            <img src="{{ asset('img/navbar/games.webp') }}" class="me-1"
                                alt="Icone section Jeu | Nanagames">
                        @endif
                        Les jeux
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @foreach ($games as $game)
                            <a href="{{ route('show-game', ['slug' => $game->slug]) }}" class="dropdown-item">
                                {{ $game->matiere }}
                            </a>
                        @endforeach
                    </div>

                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('show-blog') ? 'active' : '' }}"
                        href="{{ route('show-blog') }}">
                        {{-- Pas réussi à variabiliser URL, à retenter --}}
                        @if (Route::is('show-blog'))
                            <img src="{{ asset('img/navbar/news_colored.webp') }}" class="me-1"
                                alt="Icone section Blog | Nanagames">
                        @else
                            <img src="{{ asset('img/navbar/news.webp') }}" class="me-1"
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
                            <img src="{{ asset('img/navbar/contact_colored.webp') }}" class="me-1"
                                alt="Icone section Contact | Nanagames">
                        @else
                            <img src="{{ asset('img/navbar/contact.webp') }}" class="me-1"
                                alt="Icone section Contact | Nanagames">
                        @endif
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
