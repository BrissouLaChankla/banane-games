@extends('layouts.app')

@section('content')
    <h1 class="text-primary text-center mt-10 mb-7">À propos de Nanaba</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 bg-boss position-relative">
                <img src="{{ asset('img/mister-nanaba/mister-nanaba-heureux.webp') }}" class="d-none d-lg-block nanaba-top-left"
                    alt="Mister Nanaba Heureux">
                    <div class="position-relative">
                        <img src="{{ asset('img/members/Nanagames_OlivierGuerin_ALMonier.webp') }}" style="max-height: 404px;" class="fit-cover w-100"
                        alt="Olivier Guerin et Anne Laure Monier">
                        <img src="{{ asset('img/decorations/zigzag-bottom-left.webp') }}" class="zigzag-bottom-left d-none d-lg-block"
                        alt="Decoration zig zag">
                    </div>
            </div>
            <div class="col-lg-6 mb-10">
                <div class="ps-lg-5 ">
                    <span class="position-relative">
                        <h2 class="mb-4 mt-7 mt-lg-0">Un concept éducation unique</h2>
                        <p class="p-big">Nanaba est une startup de edtech niçoise à impact. Fondée en janvier 2021
                            par
                            Anne Laure MONIER, une maman soucieuse de l’activité numérique de ses enfants et Olivier Guerin,
                            Nanaba est engagée pour optimiser le temps d’écran et régler la problématique à la source de 72%
                            des
                            conflits familiaux : l’utilisation des téléphones et tablettes.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <div class="text-nowrap ">
                        <h2 class="d-inline-block">Tout savoir <br>sur l'application</h2>
                        <span class="h2 position-relative ms-1">Nanaba
                            <img class="right-corner-pop" loading="lazy" src="{{ asset('img/decorations/right-corner-pop.webp') }}"
                                alt="">
                        </span>
                    </div>
                    <p class="p-big">Nanaba est une application qui allie gestion du temps d’écran et éducation.
                    </p>
                </div>
                <div>
                    <div class="text-center design-img mt-7 p-10">
                        <img src="{{ asset('img/designs/sac-a-dos.webp') }}" loading="lazy" class="img-fluid"
                            alt="Nanagames | Sac à Dos ">
                    </div>
                    <h3 class="mb-3 mt-4">Soutien scolaire</h3>
                    <p class="p-big">Pour débloquer leurs applications, les enfants devront répondre à des quiz
                        ludoéducatifs qui suivent leur programme scolaire officiel !</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center design-img p-10 mt-10">
                    <img src="{{ asset('img/designs/blocage.webp') }}" loading="lazy" class="img-fluid"
                        alt="Nanagames | Blocage">
                </div>
                <h3 class="mb-3 mt-4">Contrôle parental</h3>
                <p class="p-big">L’app Nanaba propose aux parents de bloquer les applications récréatives de
                    leurs enfants pour avoir d’avantage le contrôle sur le temps d’écran de ces derniers.</p>
            </div>
            <div class="col-lg-6">
                <div class="text-center design-img p-10 mt-10">
                    <img src="{{ asset('img/designs/langues.webp') }}" loading="lazy" class="img-fluid"
                        alt="Nanagames | Langues">
                </div>
                <h3 class="mb-3 mt-4">Intelligence artificielle</h3>
                <p class="p-big pe-lg-11">Dotée d’un IA et d’un algorithme pointu, l’application s’adapte aux forces et
                    aux faiblesses de l’enfant pour lui offrir une expérience éducative sur-mesure, dans l’éducation
                    positive !</p>
            </div>
            <div class="col-lg-6">
                <div class="text-center design-img p-10">
                    <img src="{{ asset('img/designs/cahiers.webp') }}" class="img-fluid"
                        alt="Nanagames | Cahiers ">
                </div>
                <h3 class="mb-3 mt-4">Méthode leitner</h3>
                <p class="p-big">Nanaba est fondée sur la méthode de mémorisation neuroscientifique de la
                    répétition espacée, aussi appelée apprentissage par séquences courtes.</p>
            </div>
        </div>
        <div class="text-center position-relative mt-7">
            <img src="{{ asset('img/decorations/arrow-bottom-right.webp')}}" loading="lazy"
                class="d-none d-lg-inline-block arrow-bottom-right" alt="">
            <x-button name="En savoir plus !" color="primary" />
        </div>
        <h2 class="text-center text-primary mt-10 mb-7">À propos de Nanagames</h2>
        <div class="row">
            <div class="col-lg-6 bg-boss position-relative">
                <img src="{{ asset('img/members/Nanagames_TeamTech.webp') }}" loading="lazy" style="max-height: 404px;" class="fit-cover w-100" alt="">
            </div>
            <div class="col-lg-6">
                <div class="ps-lg-5 ">
                        <span class="position-relative">
                            <h3 class="d-inline-block mb-4 mt-7 mt-lg-0">Une équipe jeune et dynamique</h3>
                            <img src="{{asset('img/decorations/top-left-swoosh.webp')}}" class="top-left-swoosh d-none d-xl-block" alt="">
                        </span>
                        <p class="p-big">Nanaba est une startup de edtech niçoise à impact. Fondée en janvier 2021
                            par Anne Laure MONIER, une maman soucieuse de l’activité numérique de ses enfants et Olivier
                            Guerin, Nanaba est engagée pour optimiser le temps d’écran et régler la problématique à la
                            source de 72% des conflits familiaux : l’utilisation des téléphones et tablettes.</p>
                </div>
            </div>

            <div class="col-lg-8 mt-10">
                <h2>Présentation <br> de
                    <x-underlined word="l'équipe" /> Nanagames
                </h2>
                <p class="p-big mt-4">
                    Nanaba est une application qui allie gestion du temps d’écran et éducation.
                </p>
            </div>
            <div id="team" class="mt-7 position-relative">
                <img class="right-corner-pop d-none d-lg-block" loading="lazy" src="{{ asset('img/decorations/right-corner-pop.webp') }}" alt="">
                <img src="{{ asset('img/decorations/zigzag-bottom-left.webp') }}" loading="lazy" class="zigzag-bottom-left d-none d-lg-block"
                    alt="Decoration zig zag">
                @include('sections.teamcarousel')
            </div>
            <div id="concept" class="mt-11 mb-10 row">
                <div class="col-lg-6">
                    <h2>Pourquoi ce
                        <x-underlined word="concept"/> ?
                    </h2>
                    <p class="p-big mt-4">
                        Nanaba est une application qui allie gestion du temps d’écran et éducation.
                    </p>
                    <img src="{{ asset('img/mister-nanaba/mister-nanaba-laptop.webp') }}" loading="lazy" alt=""
                        class="mister-nanaba-laptop img-fluid mt-7 pb-6">
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="vertical-yellow"></div>
                    <div class="d-flex flex-column h-100 justify-content-between">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="d-flex align-items-center my-4 my-lg-0">
                                <span class="material-symbols-rounded tick">
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
