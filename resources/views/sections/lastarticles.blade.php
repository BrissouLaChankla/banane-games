<div class="container pt-8">
    <h2 class="text-primary text-center mb-7">Les derniers articles</h2>
    <div class="splide outside_arrows" role="group">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach(\App\Models\Article::where('is_published', '=', 1)->latest()->take(6)->get() as $article)
                    <li class="splide__slide">
                        <article class="card rounded border-0 shadow-sm carousel-card">
                            <img src="{{asset($article->thumbnail_img_url)}}"
                                class="card-img-top object-fit" loading="lazy" alt="" style="height:200px ;">
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
                                    {!! $article->description !!}
                                </p>

                                <a href="{{ route('show-article', ['slug' => $article->slug]) }}"
                                    class="text-primary fw-bold text-decoration-underline ">
                                    Lire l'article
                                </a>
                            </div>
                        </article>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        var splide = new Splide('.splide', {
            breakpoints: {
                992: {
                    perPage: 2
                },
                768: {
                    perPage: 1,
                    arrows: true // not work     

                }
            },
            gap: '24px',
            width: '1300px',
            height: '650px',
            type: 'loop',
            perPage: 3,
            perMove: 1,
        });


        splide.mount();
    </script>
@endpush
