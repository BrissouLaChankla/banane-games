@extends('layouts.app')
@section('content')

    <div class="container pt-7">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('show-blog')}}" class="text-muted font-base fw-bold">< Retour actualités</a></li>
            </ol>
          </nav>
   
        <div class="text-center">
            <img src={{asset($article->header_img_url)}}
                class="img-article img-fluid fit-cover"  alt="">
        </div>

        <div class="d-flex fw-bold justify-content-between align-items-center mt-8">
            @isset($article->updated_at)
                <div class="d-flex fw-bold justify-content-star">
                    <span class="material-symbols-rounded text-muted">calendar_today</span>
                    <time class="card-text text-muted ms-2" datetime="{{$article->updated_at->format('Y-m-d')}}">{{$article->updated_at->format('d/m/Y')}}</time>
                </div>
            @endisset
            <div class="rs-icons">
                <a href="https://www.facebook.com/nanabaofficiel/" class="ms-2 hvr-grow"><img
                    src="{{ asset('img/footer/akar-icons-facebook-fill.svg') }}" alt="Icon facebook"></a>
            <a href="https://www.instagram.com/nanabaofficiel/?hl=fr" class="ms-2 hvr-grow"><img
                    src="{{ asset('img/footer/akar-icons-instagram-fill.svg') }}" alt="Icon Instagram"></a>
            <a href="https://twitter.com/nanabaofficiel" class="ms-2 hvr-grow"><img
                    src="{{ asset('img/footer/akar-icons-twitter-fill.svg') }}" alt="Icon Twitter"></a>
            <a href="https://www.linkedin.com/company/nanabaofficiel/mycompany/" class="ms-2 hvr-grow"><img
                    src="{{ asset('img/footer/akar-icons-linkedin-fill.svg') }}" alt="Icon Linkdin"></a>
            <a href="https://www.tiktok.com/@misternanaba" class="ms-2 hvr-grow"><img
                    src="{{ asset('img/footer/bi-tiktok.svg') }}" alt="Icon Tiktok"></a>
            </div>
        </div>
    </div>

<div class="mt-4 mb-8">
    <div class="container">
        {!! nl2br($article->content) !!}
    </div>
</div>
    

    @include('sections.lastarticles')
@endsection



