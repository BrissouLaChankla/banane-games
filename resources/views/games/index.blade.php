@extends('layouts.app')
@section('content')
    <header class="bg-dark header-game">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $game->title }}</li>
                </ol>
            </nav>
            <h1>
                {{ $game->title }}
            </h1>
            <i>Jeu de {{ $game->matiere }}</i> <span class="mx-2">|</span> @include('sections.game-status')
        </div>
    </header>

    <div class="container pt-7 pb-10 carousel-game">
        <div class="row">
            <div class="col-lg-6">
                <div id="main-slider" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($game->pictures as $picture)
                                <li class="splide__slide">
                                    <img src="{{ asset('img/games/screens/' . $picture->img_url) }}" alt="">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <ul id="thumbnails" class="thumbnails">
                    @foreach ($game->pictures as $picture)
                        <li class="thumbnail">
                            <img src="{{ asset('img/games/screens/' . $picture->img_url) }}" alt="">
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="ps-3 m-auto right-game-desc">
                    <h2 class="text-center">Quel est le principe du jeu ?</h2>
                    <p class="my-4">
                        {!! nl2br(e($game->description)) !!}
                    </p>
                    <div class="text-center mb-5 mb-lg-0">
                        <a @if ($game->is_available) href="{{ $game->link }}" @else class="black_white" @endif
                            target="_blank">
                            <x-button name="Jouer à {!! $game->title !!}" class="mt-2" color="primary" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="others">
        <div class="container mt-10">
          
            @include('sections.games', ['mainTitle' => 'Découvrez nos autres jeux', 'games' => $others])
        </div>
    </div>
@endsection


@push('scripts')
    <script defer>
        document.addEventListener('DOMContentLoaded', function() {

            var splide = new Splide('#main-slider', {
                pagination: false,
            });

            var thumbnails = document.getElementsByClassName('thumbnail');
            var current;

            for (var i = 0; i < thumbnails.length; i++) {
                initThumbnail(thumbnails[i], i);
            }

            function initThumbnail(thumbnail, index) {
                thumbnail.addEventListener('click', function() {
                    splide.go(index);
                });
            }

            splide.on('mounted move', function() {
                var thumbnail = thumbnails[splide.index];

                if (thumbnail) {
                    if (current) {
                        current.classList.remove('is-active');
                    }

                    thumbnail.classList.add('is-active');
                    current = thumbnail;
                }
            });

            splide.mount();
        });
    </script>
@endpush
