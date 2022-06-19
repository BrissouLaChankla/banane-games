<div class="container pt-8 pb-10">
    <h2 class="text-primary text-center mb-7">Les derniers articles</h2>
    <div class="splide" role="group">
        <div class="splide__track">
            <ul class="splide__list">
                @for($i=0; $i<6; $i++)
                    <li class="splide__slide">
                        <article class="card rounded border-0 shadow carousel-card">
                            <img src="https://static.skillshare.com/cdn-cgi/image/quality=85,width=1242,height=700,format=auto/uploads/project/74915/cover_1242_da42e6ea20291d2dbdaee473756cf2d5.png"
                                class="card-img-top object-fit" alt="" style="height:200px ;">
                            <div class="p-4">
                                <div class="d-flex fw-bold justify-content-star">
                                    <span class="material-symbols-rounded text-muted">calendar_today</span>
                                    <time class="card-text text-muted ms-2" datetime="15-03-2020 16:30:00">21/01/2022</time>
                                </div>
                                <h1 class="card-title mt-3">
                                    Lorem lorem lorem lorem
                                </h1>
                                <p class="card-text my-4">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem similique assumenda
                                    non quidem nesciunt optio, praesentium ipsam nulla, atque excepturi qui quasi et a ab
                                    eos mollitia sunt facere deleniti.
                                </p>

                                <a href="{{ route('show-article') }}"
                                    class="text-primary fw-bold text-decoration-underline fs-5 nav-link {{ Route::is('show-article') ? 'active' : '' }}">
                                    Lire la suite
                                </a>
                            </div>
                        </article>
                    </li>
                @endfor
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
