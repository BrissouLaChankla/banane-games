<div class="container pt-8">
    <h2 class="text-primary text-center mb-7">Les derniers articles</h2>
    <div class="splide outside_arrows" role="group">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach(\App\Models\Article::latest()->take(6)->get() as $article)
                    <li class="splide__slide">
                        <article class="card rounded border-0 shadow carousel-card">
                            <img src="https://static.skillshare.com/cdn-cgi/image/quality=85,width=1242,height=700,format=auto/uploads/project/74915/cover_1242_da42e6ea20291d2dbdaee473756cf2d5.png"
                                class="card-img-top object-fit" alt="" style="height:200px ;">
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
                                    {!! nl2br($article->content) !!}
                                </p>

                                <a href="{{ route('show-article', ['slug' => $article->slug]) }}"
                                    class="text-primary fw-bold text-decoration-underline ">
                                    Lire la suite
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
