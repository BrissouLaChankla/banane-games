@extends('layouts.app')
@section('metas')
    <x-meta
        title="Meta Title à faire "
        description="Meta-description à faire"
    />
@endsection
@section('content')
    <h1 class="text-primary text-center mt-7 mt-sm-10 mb-7">À propos de l'équipe</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 bg-boss position-relative">
                <img src="{{ asset('img/mister-nanaba/mister-nanaba-heureux.webp') }}" class="d-none d-lg-block nanaba-top-left "
                    alt="M. Banane Heureux">
                    <div class="position-relative">
                        <img src="{{ asset('img/members/remi-brice.webp') }}" style="max-height: 404px;" class="fit-cover w-100"
                        alt="Rémi et Brice">
                        <img src="{{ asset('img/decorations/zigzag-bottom-left.webp') }}" class="zigzag-bottom-left d-none d-lg-block"
                        alt="Decoration zig zag">
                    </div>
            </div>
            <div class="col-lg-6 mb-10">
                <div class="ps-lg-5 ">
                    <span class="position-relative ">
                        <h2 class="mb-4 mt-7 mt-lg-0 text-center text-lg-start">Lorem dolor sit amet</h2>
                        <p class="p-big ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis tellus quis blandit gravida. Nullam ut dui euismod, volutpat magna at, tristique tellus. Quisque sagittis velit at orci consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis tellus quis blandit gravida. Nullam ut dui euismod, volutpat magna at, tristique tellus.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <div class="text-nowrap ">
                        <h2 class="d-inline-block ">Tout savoir <br>sur l'application</h2>
                        <span class="h2 position-relative ms-1 ">BananeApp
                            <img class="right-corner-pop d-none d-sm-block animate__animated wow animate__fadeInLeft" loading="lazy" src="{{ asset('img/decorations/right-corner-pop.webp') }}"
                                alt="decoration">
                        </span>
                    </div>
                    <p class="p-big">BananeApp est une application qui allie gestion du temps d’écran et éducation.
                    </p>
                </div>
                <div>
                    <div class="text-center design-img mt-7 p-10">
                        <img src="{{ asset('img/designs/sac-a-dos.webp') }}" loading="lazy" class="img-fluid"
                            alt="BananeGames | Sac à Dos ">
                    </div>
                    <h3 class="mb-3 mt-4 text-center text-lg-start">Soutien scolaire</h3>
                    <p class="p-big">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis tellus quis blandit gravida. Nullam ut dui euismod, volutpat magna at, tristique tellus.</p>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="text-center design-img p-10 mt-7 mt-sm-10">
                    <img src="{{ asset('img/designs/blocage.webp') }}" loading="lazy" class="img-fluid"
                        alt="BananeGames | Blocage">
                </div>
                <h3 class="mb-3 mt-4 text-center text-lg-start">Contrôle parental</h3>
                <p class="p-big">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis tellus quis blandit gravida. Nullam ut dui euismod, volutpat magna at, tristique tellus.</p>
            </div>
            <div class="col-lg-6">
                <div class="text-center design-img p-10 mt-7 mt-sm-10">
                    <img src="{{ asset('img/designs/langues.webp') }}" loading="lazy" class="img-fluid"
                        alt="BananeGames | Langues">
                </div>
                <h3 class="mb-3 mt-4 text-center text-lg-start">Intelligence artificielle</h3>
                <p class="p-big pe-lg-11">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis tellus quis blandit gravida. Nullam ut dui euismod, volutpat magna at, tristique tellus.</p>
            </div>
            <div class="col-lg-6">
                <div class="text-center design-img p-10 mt-7 mt-sm-0">
                    <img src="{{ asset('img/designs/cahiers.webp') }}" class="img-fluid"
                        alt="BananeGames | Cahiers ">
                </div>
                <h3 class="mb-3 mt-4 text-center text-lg-start">Méthode leitner</h3>
                <p class="p-big">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis tellus quis blandit gravida. Nullam ut dui euismod, volutpat magna at, tristique tellus.</p>
            </div>
        </div>
        <div class="text-center position-relative mt-7">
            <img src="{{ asset('img/decorations/arrow-bottom-right.webp')}}" loading="lazy"
                class="d-none d-lg-inline-block arrow-bottom-right animate__animated wow animate__fadeInLeft" alt="decoration">
                <a href="#" target="_blank">
                    <x-button name="En savoir plus !" color="primary" />
                </a>
        </div>
        <h2 class="text-center text-primary mt-7 mt-sm-10 mb-7 text-center text-lg-start">À propos de BananeGames</h2>
        <div class="row">
            <div class="col-lg-6 bg-boss position-relative">
                <img src="{{ asset('img/members/Nanagames_TeamTech.webp') }}" loading="lazy" style="max-height: 404px;" class="fit-cover w-100" alt="Photo de l'équipe BananeGames">
            </div>
            <div class="col-lg-6">
                <div class="ps-lg-5 ">
                        <span class="position-relative">
                            <div class="text-lg-start text-center">
                            <h3 class="d-inline-block mb-4 mt-7 mt-lg-0 ">Une équipe jeune et dynamique</h3></div>
                            <img src="{{asset('img/decorations/top-left-swoosh.webp')}}" class="top-left-swoosh d-none d-xl-block animate__animated wow animate__fadeInUp" alt="decoration">
                        </span>
                        <p class="p-big">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis tellus quis blandit gravida. Nullam ut dui euismod, volutpat magna at, tristique tellus. Quisque sagittis velit at orci consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis tellus quis blandit gravida. Nullam ut dui euismod, volutpat magna at, tristique tellus.</p>
                </div>
            </div>

            <div class="col-lg-8 mt-7 mt-sm-10 ">
                <h2 class="text-center text-lg-start">Présentation <br> de
                    <x-underlined word="l'équipe" /> BananeGames
                </h2>
                <p class="p-big mt-4 ">
                    BananeApp est une application qui allie gestion du temps d’écran et éducation.
                </p>
            </div>
            <div id="team" class="mt-7 position-relative">
                <img class="right-corner-pop d-none d-lg-block animate__animated wow animate__fadeInUp" loading="lazy" src="{{ asset('img/decorations/right-corner-pop.webp') }}" alt="decoration">
                <img src="{{ asset('img/decorations/zigzag-bottom-left.webp') }}" loading="lazy" class="zigzag-bottom-left d-none d-lg-block animate__animated wow animate__fadeInDown"
                    alt="Decoration zig zag">
                @include('sections.teamcarousel')
            </div>
            <div id="concept" class="mt-11 row">
                <div class="col-lg-6 ">
                    
                    <h2 class="text-lg-start text-center">Pourquoi ce
                        <x-underlined word="concept"/> ?
                    </h2>
                    <p class="p-big mt-4">
                        BananeApp est une application qui allie gestion du temps d’écran et éducation.
                    </p>
                    
                    <img src="{{ asset('img/mister-nanaba/mister-nanaba-laptop.webp') }}" loading="lazy" alt="M. Banane tient un pc"
                        class="mister-nanaba-laptop img-fluid mt-7 pb-6" style="width:100%;">
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="vertical-yellow"></div>
                    <div class="d-flex flex-column h-100 justify-content-between">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="d-flex align-items-center my-4 my-lg-0">
                                <span class="material-symbols-rounded tick animate__animated wow animate__flipInX " data-wow-delay="0.{{$i}}s">
                                    done
                                </span>
                                <p class="p-big ps-4">
                                    Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                                </p>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
