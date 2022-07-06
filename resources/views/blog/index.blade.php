@extends('layouts.app')

@section('metas')
    <x-meta
        title="Meta Title à faire "
        description="Meta-description à faire"
    />
@endsection

@section('content')

    <div class="container">

        <h1 class="text-center text-primary section-title-blog mt-10">À la une</h1>

        <section class="row">
            
            @foreach(\App\Models\Article::where('is_published', '=', 1)->where('is_fav', '=', 1)->latest()->take(2)->get() as $article)
                <div class="col-lg-6 mt-4 mt-md-6">
                    <x-article-card :article="$article" />
                </div>
            @endforeach
        </section>
        <h1 class="text-center text-primary section-title-blog mt-10">Les derniers articles</h1>
       
            <section class="row">
                @for ($i = 0; $i < 6; $i++)
               
                    <div class="col-md-6 col-lg-4 mt-4 mt-md-6">
                        {{-- <x-article-card></x-article-card> --}}
                    </div>

                @endfor
            </section>
            <div class="row">
                @foreach(\App\Models\Article::where('is_published', '=', 1)->where('is_fav', '=', 0)->latest()->take(6)->get() as $article)
                
                    <div class="col-lg-4 mt-4 mt-md-6">
                        <x-article-card :article="$article"/>
                    </div>
                @endforeach
            </div>
                {{-- <div class="text-center mt-6">
                    <button class="btn btn-primary mx-auto">Chargez plus</button>
                </div> --}}   
    </div>
@endsection
