@extends('layouts.app')
@section('content')
    <div class="container">

        <h1 class="text-center text-primary section-title-blog mt-10">À la une</h1>

        <section class="row">
            @for ($i = 0; $i < 2; $i++)
                <div class="col-md-6 mt-4 mt-md-6">
                    <x-article-card></x-article-card>
                </div>
            @endfor
        </section>
        <h1 class="text-center text-primary section-title-blog mt-10">Les derniers articles</h1>
       
            <section class="row">
                @for ($i = 0; $i < 6; $i++)
               
                    <div class="col-md-6 col-lg-4 mt-4 mt-md-6">
                        <x-article-card></x-article-card>
                    </div>
                  
                @endfor
            </section>

                <div class="text-center mt-6 mb-9">
                    <button class="btn btn-primary mx-auto">Chargez plus</button>
                </div>

   
    </div>
@endsection
