@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="spacer-48"></div>
        <a href="#" class="text-muted bold">
            <p> < Retour actualités</p>
        </a>
        <div class="text-center">
            <img src="https://img-19.commentcamarche.net/T5nwb06K0GAyOyOcOqLEVwRf8ck=/1500x/smart/6c94a2ad1b424baebabbbc3a0d2c1e6a/ccmcms-commentcamarche/22875060.jpg"
                class="img-article img-fluid" alt="">
        </div>

        <div class="spacer-56"></div>
        <div class="d-flex fw-bold justify-content-start">
            <span class="material-symbols-rounded text-muted">calendar_today</span>
            <time class="card-text text-muted ms-2 h3-font-size" datetime="15-03-2020 16:30:00">21/01/2022</time>
        </div>
        <div class="spacer-24"></div>

        <h1 class="text-primary">Lorem ipsum lorem ipsum</h1>
        <div class="spacer-48"></div>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, similique perspiciatis consequuntur, tempore
            dolorum amet blanditiis iste placeat earum beatae ipsa eos fugiat. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Illo, similique perspiciatis consequuntur, tempore dolorum amet blanditiis iste placeat earum
            beatae ipsa eos fugiat. </p>
        <div class="spacer-24"></div>

        <h2 class="text-primary">Lorem ipsum lorem ipsum</h2>

        <div class="spacer-24"></div>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, similique perspiciatis consequuntur, tempore
            dolorum amet blanditiis iste placeat earum beatae ipsa eos fugiat. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Illo, similique perspiciatis consequuntur, tempore dolorum amet blanditiis iste placeat earum
            beatae ipsa eos fugiat. </p>

        <div class="spacer-24"></div>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, similique perspiciatis consequuntur, tempore
            dolorum amet blanditiis iste placeat earum beatae ipsa eos fugiat. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Illo, similique perspiciatis consequuntur, tempore dolorum amet blanditiis iste placeat earum
            beatae ipsa eos fugiat. </p>

        <h3 class="text-primary">Lorem ipsum lorem ipsum</h3>

        <div class="spacer-24"></div>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, similique perspiciatis consequuntur, tempore
            dolorum amet blanditiis iste placeat earum beatae ipsa eos fugiat. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Illo, similique perspiciatis consequuntur, tempore dolorum amet blanditiis iste placeat earum
            beatae ipsa eos fugiat. </p>

        <div class="spacer-24"></div>

        <div class="text-center">
            <video controls class="video-article img-fluid">
                <source src="" type="">
            </video>
        </div>

        <div class="spacer-24"></div>

        <h2 class="text-primary">Lorem ipsum lorem ipsum</h2>

        <div class="spacer-24"></div>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, similique perspiciatis consequuntur, tempore
            dolorum amet blanditiis iste placeat earum beatae ipsa eos fugiat. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Illo, similique perspiciatis consequuntur, tempore dolorum amet blanditiis iste placeat earum
            beatae ipsa eos fugiat. </p>

        <div class="spacer-24"></div>
    </div>
    <div class="container">

        <div class="splide" role="group">
            <div class="splide__track">

                <ul class="splide__list">

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

                    <li class="splide__slide">
                        <article class="card rounded  border-0 shadow carousel-card">
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

                    <li class="splide__slide">
                        <article class="card rounded  border-0 shadow carousel-card">
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


                </ul>
            </div>
        </div>

        <div class="spacer-24"></div>

    </div>
    
@endsection


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
