@include('sections.handle-errors')

{!! Form::open(['url' => route('post-edit-create-game'), 'files' => true]) !!}

<div class="row mb-3">
    <div class="col-md-8">
        {!! Form::label('Image', 'Image principale du jeu', ['class' => 'form-label']) !!}
        <input class="form-control" name="img_url" type="file" id="img_url"
            @isset($game) @else required @endisset onchange="preview()">

    </div>
    <div class="col-md-4">
        <img id="frame" src="@isset($game->thumbnail_img_url) {{ asset($game->thumbnail_img_url) }} @endisset"
            class="img-fluid" />
    </div>
    {{-- <button onclick="clearImage()" class="btn btn-primary px-2 mt-3">Clear</button> --}}
</div>

{!! Form::label('title', 'Titre du jeu', ['class' => 'form-label']) !!}
{!! Form::text('title', isset($game->title) ? $game->title : null, ['class' => 'form-control mb-3 bg-white', 'required']) !!}
{!! Form::label('matiere', 'Matiere du jeu', ['class' => 'form-label']) !!}
{!! Form::text('matiere', isset($game->matiere) ? $game->matiere : null, ['class' => 'form-control mb-3 bg-white', 'required']) !!}

{!! Form::label('description', 'Description du jeu', ['class' => 'form-label']) !!}
{!! Form::textarea('description', isset($game->description) ? $game->description : null, ['id' => 'game_description']) !!}

{!! Form::label('short_description', 'Meta description du jeu (max 160 caractères)', ['class' => 'form-label']) !!}
{!! Form::text('short_description', isset($game->short_description) ? $game->short_description : null, ['class' => 'form-control mb-3 bg-white', 'required', 'maxlength' => 160]) !!}

{!! Form::label('link', 'URL du jeu', ['class' => 'form-label']) !!}
{!! Form::text('link', isset($game->link) ? $game->link : null, ['class' => 'form-control mb-3 bg-white', 'required']) !!}






{!! Form::label('img_attached[]', 'Screens du jeu', ['class' => 'form-label']) !!}
{!! Form::file('img_attached[]', ['class' => 'form-control', 'multiple']) !!}
<div class="row justify-content-center">
    @foreach ($game->pictures as $picture)
        <div class="col-md-3">
            <img src="{{ asset($picture->img_url) }}"class=" img-fluid" alt="">
        </div>
    @endforeach
    </div>









@isset($game)
    {!! Form::hidden('id', $game->id) !!}
@endisset
<div class="d-flex align-items-center justify-content-end my-5">
    <div class="form-check form-switch me-5">
        <input class="form-check-input" name="is_available" type="checkbox" role="switch" id="flexSwitchCheckDefault"
        @isset($game) @if ($game->is_available == 1) checked @endif @endisset>
    <label class="form-check-label" for="flexSwitchCheckDefault">Disponible</label>
</div>
{!! Form::submit(isset($game) ? 'Modifier le jeu' : 'Créer le jeu', ['class' => 'btn btn-primary btn-lg']) !!}
</div>
{!! Form::close() !!}


@push('scripts')
<script src="https://cdn.tiny.cloud/1/ofx7q6hpsl79ivw2chgozdl8jn3i3lntas7navzi2xf0ucct/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#game_description',
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste imagetools wordcount'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'

    });

    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }

    function clearImage() {
        document.getElementById('img_url').value = null;
        frame.src = "";
    }
</script>
@endpush
