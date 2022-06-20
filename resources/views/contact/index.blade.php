@extends('layouts.app')
@section('content')
    <div id="contact" class="d-flex align-items-center pt-10">
        <div class="container">
            <h1 class="text-primary text-center">Nous contacter</h1>
            <p class="mt-5 text-center">Des questions ? Un problème ? nous serons ravis de vous répondre</p>
            <div class="row mt-10 align-items-center">
                <div class="col-xl-6 position-relative">
                    <div class="bg-white py-7 px-5 rounded shadow">
                        <h3 class="text-primary h4">Formulaire de contact</h3>
                        {!! Form::open(['url' => route('send-mail'), 'files' => true]) !!}

                        <div class="row">
                            <div class="col-lg-6 mt-6">
                                <div class="form-floating">
                                    {{ Form::text('firstname', null, ['class' => 'form-control text-muted border-0 bg-white border-bottom rounded-0 ps-0', 'id' => 'floatingFirstname', 'placeholder' => 'Prénom *', 'required']) }}
                                    {{ Form::label('floatingFirstname', 'Prénom *', ['class' => 'fw-bold text-muted ps-0']) }}
                                </div>
                            </div>
                            <div class="col-lg-6 mt-6">
                                <div class="form-floating">
                                    {{ Form::text('lastname', null, ['class' => 'form-control text-muted border-0 bg-white border-bottom rounded-0 ps-0', 'id' => 'floatingLastname', 'placeholder' => 'Nom *', 'required']) }}
                                    {{ Form::label('floatingLastname', 'Nom *', ['class' => 'fw-bold text-muted ps-0']) }}
                                </div>
                            </div>
                            <div class="col-lg-6 mt-6">
                                <div class="form-floating">
                                    {{ Form::email('email', null, ['class' => 'form-control text-muted border-0 bg-white border-bottom rounded-0 ps-0', 'id' => 'floatingEmail', 'placeholder' => 'Email *', 'required']) }}
                                    {{ Form::label('floatingEmail', 'Email *', ['class' => 'fw-bold text-muted ps-0']) }}
                                </div>
                            </div>
                            <div class="col-lg-6 mt-6">
                                <div class="form-floating">
                                    {{ Form::tel('phone', null, ['class' => 'form-control text-muted border-0 bg-white border-bottom rounded-0 ps-0', 'id' => 'floatingTel', 'placeholder' => 'Téléphone']) }}
                                    {{ Form::label('floatingTel', 'Téléphone', ['class' => 'fw-bold text-muted ps-0']) }}
                                </div>
                            </div>
                        </div>

                        {{-- Handle the errors --}}
                        @if ($errors->any())
                            <ul class="alert alert-danger mt-2 p-3" role="alert">
                                @foreach ($errors->all() as $error)
                                    <li class="ms-3 text-start">{{ $error }}</li>
                                @endforeach
                            </ul>
                            {{-- Handle the success --}}
                        @elseif(Session::has('contact-success'))
                            <ul class="alert alert-success mt-3 p-3" role="alert">
                                <li class="ms-3 text-start">{{ Session::get('contact-success') }}</li>
                            </ul>
                        @endif

                        {{ Form::label('content', 'Message *', ['class' => 'fw-bold text-muted mt-8']) }}
                        {{ Form::file('pj[]', ['class' => 'd-none', 'id' => 'pj', 'multiple']) }}


                        <div class="bg-muted rounded text-white d-flex align-items-center fw-bold px-1 py-1 mt-1 mb-2 pointer fit-content"
                            onclick="document.querySelector('#pj').click()">
                            <span class="material-symbols-rounded r-m-45">
                                attachment
                            </span>
                            <small class="px-1">
                                Pièces jointes
                            </small>
                        </div>
                        <ul id="list-pj" class="form-control border-0 text-muted mt-4 p-4 d-none">

                        </ul>


                        {{ Form::textarea('content', null, ['class' => 'form-control text-muted h-100 p-4 mt-4 rounded-0', 'rows' => 6, 'required']) }}


                        <div class="form-check mt-4">
                            {{ Form::checkbox('newsletter', 1, false, ['id' => 'newsletter', 'class' => 'form-check-input']) }}
                            {{ Form::label('newsletter', 'J’accepte que mes informations soient utilisées par Nanagames afin de me recontacter.', ['class' => 'ms-1 form-check-label text-muted small']) }}


                        </div>


                        {{ Form::submit('Envoyer', ['class' => 'btn btn-primary mt-4']) }}
                        {!! Form::close() !!}
                    </div>

                    <img src="{{ asset('img/decorations/zigzag-bottom-left.webp') }}" class="zigzag-bottom-left d-none d-lg-block"
                    alt="Decoration zig zag">
                </div>
                <div class="col-xl-6">
                    <div class="position-relative d-flex justify-content-center pt-6">
                        <img src="{{asset('img/decorations/big-arrow-top-left.webp')}}" class="d-none d-xl-block big-arrow-top-left" alt="">
                        <img src="{{ asset('img/mister-nanaba/mister-nanaba-contact.webp') }}" style="max-width:508px" alt="">
                    </div>
                </div>
            </div>
            <div class="pt-10">
                @include('sections.games', ['mainTitle' => "Découvrir les jeux"])
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            var recupererFichiers = function() {
                let listPj = document.querySelector('#list-pj');
                listPj.classList.remove("d-none");
                listPj.innerHTML = "";

                var fichiersInput = document.querySelector("#pj");
                var fichiers = fichiersInput.files;

                var nbFichiers = fichiers.length;
                var i = 0;
                while (i < nbFichiers) {
                    var fichier = fichiers[i];
                    listPj.insertAdjacentHTML('beforeend',
                        `<li>${fichier.name}</li>`
                    )
                    i++;
                }
            }

            // On invoque cette fonction pour chaque modification apportée à l'élément
            document.querySelector("#pj").onchange = recupererFichiers;
        });
    </script>
@endpush
