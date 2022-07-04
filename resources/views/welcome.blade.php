@extends('layouts.app')

@section('content')
    <div id="hero" class="bg-lighter py-10">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 position-relative">

                    <img class="top-left-pop animate__animated animate__fadeInDown"
                        src="{{ asset('img/decorations/left-corner-pop.webp') }}" alt="Image pop effect">
                    <h1 class="text-primary text-lg-start text-center">Des jeux totalement gratuits qui vous font rester
                        smart !</h1>
                    <p class="text-muted mt-6 mb-5 ">
                        <strong>
                            Nanagames
                        </strong>
                        est une plateforme de jeux ludo-éducatifs gratuits pour s'améliorer à l'école. Elle est fait pour
                        ceux qui veulent apprendre tout en s'amusant.
                        <br>
                    </p>
                    <div class="text-lg-start text-center">
                        <div class="d-inline-block position-relative ">
                            <a href="{{ URL::to('/') }}#games">
                                <x-button name="Jouer à Geoguessr !" color="primary" />
                            </a>
                            <img src="{{ asset('img/decorations/arrow-top-left.webp') }}"
                                class="top-left-arrow d-none d-lg-block animate__animated animate__fadeInRight" alt="Image arrow top left">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-8 mt-lg-0 px-8 ps-lg-10 pe-lg-0">
                    <img src="{{ asset('img/games/thumb/geoguessr.webp') }}" class="img-fluid hero-img"
                        alt="Image du jeu Nanagames à la une">
                </div>
            </div>
        </div>
    </div>
    <div id="games">
        <div class="container pt-8">
            @include('sections.games', ['mainTitle' => 'Les jeux'])
        </div>
    </div>
    @include('sections.triptique')
    @include('sections.nanabanner')



    @include('sections.lastarticles')

    @push('scripts')
        <script defer>
            window.wow = new WOW.WOW({
                live: false
            });

            window.wow.init();
        </script>
    @endpush
@endsection
