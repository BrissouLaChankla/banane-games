@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="spacer-96"></div>

        <h1 class="text-center mb-3 text-primary section-title-blog">A la une</h1>

        <section class="row">
            @for ($i = 0; $i < 2; $i++)
                <div class="col-md-6">
                    <x-article-card></x-article-card>
                </div>
            @endfor
        </section>
        <div class="spacer-96"></div>
        <h1 class="text-center mb-3 text-primary section-title-blog">Les derniers articles</h1>
       
            <section class="row">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col-md-6 col-lg-4">
                        <x-article-card></x-article-card>
                    </div>
                @endfor
            </section>
            <div class="spacer-48"></div>
                <div class="text-center">
                    <div class="btn btn-primary">Chargez plus</div>
                </div>
            <div class="spacer-96"></div>

   
    </div>
@endsection
