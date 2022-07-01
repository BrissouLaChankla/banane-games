<article class="card rounded border-0 shadow">
    <img src="{{asset($article->header_img_url)}}" class="card-img-top object-fit" alt="" style="height:200px ;">

    <div class="p-4">
        @isset($article->updated_at)
            <div class="d-flex fw-bold justify-content-star">
                <span class="material-symbols-rounded text-muted">calendar_today</span>
                <time class="card-text text-muted ms-2" datetime="{{$article->updated_at->format('Y-m-d')}}">{{$article->updated_at->format('d/m/Y')}}</time>
            </div>
        @endisset
        <h1 class="card-title mt-3">
            {{$article->title}}
        </h1>

        <p class="card-text my-4">
            {!! nl2br($article->description) !!}

        </p>

        <a href="{{ route('show-article', ['slug' => $article->slug]) }}" class="text-primary fw-bold text-decoration-underline fs-5 {{ Route::is('show-article') ? 'active' : '' }}">
            Lire la suite
        </a>
    </div>
</article>