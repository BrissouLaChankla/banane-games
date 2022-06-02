@extends('layouts.app')

@section('content')
    <div class="bg-lighter py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Des jeux totalement gratuits qui vous font rester smart !</h1>
                    <p class="my-4">
                        <strong>
                            Nanagames
                        </strong>
                        est une plateforme de jeux ludo-éducatifs gratuits pour s'améliorer à l'école. Elle est fait pour ceux qui veulent apprendre tout en s'amusant.
                        <br>
                        Ici tu trouveras des jeux et des quiz réalisés pensés pour les petits comme les grands !
                    </p>
                    <a href="{{ URL::to('/') }}#games">
                        <x-button class="mt-3" name="Découvrir les jeux" color="primary" />
                    </a>
                </div>
                <div class="col-md-6 p-5">
                    <img src="https://schools-cdn.duolingo.com/images/4d065a94ab4f5af482ebd02278d8336b.svg"
                        class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    @include('sections.triptique')
    @include('sections.nanabanner')

    <div id="games">
        <div class="container p-xl-5">
            <div class="text-center my-5">
                <h2>Amuse toi avec nous : </h2>
                <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, sequi
                    nesciunt veniam hic velit eum
                    dignissimos quasi facilis dolorum, animi asperiores architecto vitae beatae! Quidem architecto illo
                    neque blanditiis sequi.</p>
            </div>
            @include('sections.games')
        </div>
    </div>

    @include('sections.lastarticles')

    
    @section('prefooter')
        @include('layouts.prefooter')
    @endsection
@endsection
