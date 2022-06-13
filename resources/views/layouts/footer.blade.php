<footer id="footer" class="py-5 bg-primary text-white  text-lg-start">
    <div class="container-lg px-5 px-lg-0">
        <span class="nanagames text-secondary font-title">Nanagames</span>
        <div class="spacer-56 d-none d-lg-block"></div>
        <div class="spacer-24 d-block d-lg-none"></div>
        <div class="row">
            <div class="col-lg-3">
                <div class="mb-4">
                    <h3 class="mb-lg-4">Découvrez-nous</h3>
                    <div class="d-flex flex-column align-items-start">
                        <a href="#">Nanaba</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="mb-4">
                    <h3 class="mb-lg-4">Contact</h3>
                    <div class="d-flex flex-column align-items-start">
                        <a href="#">Nous contacter</a>
                        <a href="#">Nous rejoindre</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="mb-4">
                    <h3 class="mb-lg-4">Suivez nous</h3>
                    <div class="text-nowrap">
                        <a href="https://www.facebook.com/nanabaofficiel/" class="me-4 me-lg-3"><img
                                src="{{ asset('img/footer/akar-icons-facebook-fill.svg') }}" alt="Icon facebook"></a>
                        <a href="https://www.instagram.com/nanabaofficiel/?hl=fr" class="me-4 me-lg-3"><img
                                src="{{ asset('img/footer/akar-icons-instagram-fill.svg') }}" alt="Icon Instagram"></a>
                        <a href="https://twitter.com/nanabaofficiel" class="me-4 me-lg-3"><img
                                src="{{ asset('img/footer/akar-icons-twitter-fill.svg') }}" alt="Icon Twitter"></a>
                        <a href="https://www.linkedin.com/company/nanabaofficiel/mycompany/" class="me-4 me-lg-3"><img
                                src="{{ asset('img/footer/akar-icons-linkedin-fill.svg') }}" alt="Icon Linkdin"></a>
                        <a href="https://www.tiktok.com/@misternanaba" class="me-4 me-lg-3"><img
                                src="{{ asset('img/footer/bi-tiktok.svg') }}" alt="Icon Tiktok"></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="mb-4">

                <h3 class="mb-lg-4">S’inscrire à la newsletter</h3>
                    {!! Form::open(['url' => route('add-email-newsletter'), 'class' => 'd-flex']) !!}
                    <div class="flex-grow-1 mw-300">
                        {{ Form::email('email', null, ['class' => 'form-control text-muted h-100 border-0 ', 'placeholder' => 'Votre email', 'required']) }}
                    </div>
                    <div>
                        <x-button class="ms-2 p-2" name="Ok" color="white" />
                    </div>
                    {!! Form::close() !!}
                    {{-- Handle the errors --}}
                    @if ($errors->any())
                        <ul class="alert alert-danger mt-2 p-3" role="alert">
                            @foreach ($errors->all() as $error)
                                <li class="ms-3 text-start">{{ $error }}</li>
                            @endforeach
                        </ul>
                        {{-- Handle the success --}}
                    @elseif(Session::has('newsletter-success'))
                        <ul class="alert alert-success mt-2 p-3" role="alert">
                            <li class="ms-3 text-start">{{ Session::get('newsletter-success') }}</li>
                        </ul>
                    @endif
                </div>

            </div>

        </div>

        <div class="spacer-48 d-none d-lg-block"></div>
        <div class="spacer-24 d-block d-lg-none"></div>

        <div class="d-flex flex-column flex-lg-row justify-content-center">
            <a href="#" class="mb-3 mb-lg-0 mx-lg-3 fw-bold">Mentions légales</a>
            <a href="#" class="mb-3 mb-lg-0 mx-lg-3 fw-bold">Chartes des cookies</a>
            <a href="#" class="mb-3 mb-lg-0 mx-lg-3 fw-bold">CGV / CGU</a>
        </div>


    </div>
</footer>
