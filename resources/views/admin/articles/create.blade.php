@extends('adminlayouts.app')
@section('content')
    <h1 class="text-center mb-10">Création d'un nouvel article</h1>

    <div class="container">
        {!! Form::open(['url' => route('post-create-article'), 'files' => true]) !!}

        <div class="row mb-5">
            <div class="col-md-8">
                {!! Form::label('Image', "Image de l'article", ['class' => 'form-label']) !!}
                <input class="form-control" name="img_article" type="file" id="img_article" required onchange="preview()">

            </div>
            <div class="col-md-4">
                <img id="frame" src="" class="img-fluid" />
            </div>
            {{-- <button onclick="clearImage()" class="btn btn-primary px-2 mt-3">Clear</button> --}}
        </div>

        {!! Form::label('title', "Titre de l'article", ['class' => 'form-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control mb-3 bg-white', 'required']) !!}
        {!! Form::label('description', "Meta description de l'article (max 160 caractères)", ['class' => 'form-label']) !!}
        {!! Form::text('description', null, ['class' => 'form-control mb-3 bg-white', 'required', 'maxlength' => 160 ]) !!}
        {!! Form::textarea('content', null, ['id' => 'newarticle']) !!}
        <div class="text-end my-5">
            {!! Form::submit('Créer l\'article', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>


    <script src="https://cdn.tiny.cloud/1/ofx7q6hpsl79ivw2chgozdl8jn3i3lntas7navzi2xf0ucct/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#newarticle'
        });

        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }

        function clearImage() {
            document.getElementById('img_article').value = null;
            frame.src = "";
        }
    </script>
@endsection
