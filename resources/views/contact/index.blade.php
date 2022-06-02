@extends('layouts.app')
@section('content')
    <div id="contact" class="bg-lighter d-flex align-items-center p-3">
        <div class="container">
            <h1>Il faut qu'on parle...</h1>
            <div class="row">
                <div class="col-xl-5">
                    <p class="mt-3 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil natus voluptate
                        enim doloribus, rerum eligendi, sed placeat in nesciunt, adipisci porro officia ipsum officiis
                        tempora aperiam. Soluta molestiae iusto laudantium.</p>
                    {!! Form::open(['url' => route('send-mail'), 'files' => true]) !!}

                    <div class="position-relative">
                        {{ Form::email('email', null, ['class' => 'form-control text-muted h-100 p-4 mt-3 border-0 shadow-sm','placeholder' => 'john.doe@gmail.com','required']) }}
                        <img src="{{ asset('img/contact/nanagames_clip_contact.webp') }}" alt="add-screen-contact"
                            onclick="document.querySelector('#pj').click()" class="add-file-img-contact">
                    </div>
                    <ul id="list-pj" class="form-control border-0 text-muted mt-4 p-4 d-none">

                    </ul>
                    {{ Form::textarea('content', null, ['class' => 'form-control text-muted h-100 p-4 mt-4 border-0 shadow-sm','placeholder' => 'Votre message...','required']) }}


                    <div class="form-check mt-4">
                        {{ Form::checkbox('newsletter', 1, false, ['id' => 'newsletter', 'class' => 'form-check-input']) }}
                        {{ Form::label('newsletter', 'Je m\'abonne à la Newsletter', ['class' => 'ms-2 form-check-label']) }}
                    </div>


                    {{ Form::file('pj[]', ['class' => 'd-none', 'id' => 'pj', 'multiple']) }}

                    {{ Form::submit('Confirmer', ['class' => 'btn btn-primary mt-4']) }}
                    {!! Form::close() !!}
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
                </div>
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
