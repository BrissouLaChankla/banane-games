@include('sections.handle-errors')
    
{!! Form::open(['url' => route('post-create-article'), 'files' => true]) !!}

<div class="row mb-3">
    <div class="col-md-8">
        {!! Form::label('Image', "Image de l'article", ['class' => 'form-label']) !!}
        <input class="form-control" name="img_article" type="file" id="img_article" @isset($article) @else required @endisset onchange="preview()">

    </div>
    <div class="col-md-4">
        <img id="frame" src="@isset($article->header_img_url) {{asset($article->header_img_url)}} @endisset" class="img-fluid" />
    </div>
    {{-- <button onclick="clearImage()" class="btn btn-primary px-2 mt-3">Clear</button> --}}
</div>

{!! Form::label('title', "Titre de l'article", ['class' => 'form-label']) !!}
{!! Form::text('title',  isset($article->title) ? $article->title : null, ['class' => 'form-control mb-3 bg-white', 'required']) !!}
{!! Form::label('description', "Meta description de l'article (max 160 caractères)", ['class' => 'form-label']) !!}
{!! Form::text('description', isset($article->description) ? $article->description : null, ['class' => 'form-control mb-3 bg-white', 'required', 'maxlength' => 160 ]) !!}
{!! Form::textarea('content', isset($article->content) ? $article->content : null, ['id' => 'newarticle']) !!}
@isset($article)
    {!! Form::hidden('id', $article->id) !!}
    @endisset
    <div class="d-flex align-items-center justify-content-end my-5">
        <div class="form-check form-switch me-5">
            <input class="form-check-input" name="is_published" type="checkbox" role="switch" id="flexSwitchCheckDefault" @isset($article)@if($article->is_published == 1) checked @endif @endisset >
            <label class="form-check-label" for="flexSwitchCheckDefault">Publié</label>
        </div>
     {!! Form::submit(isset($article) ? "Modifier l'article" : 'Créer l\'article', ['class' => 'btn btn-primary btn-lg']) !!}
</div>
{!! Form::close() !!}



@push('scripts')
<script src="https://cdn.tiny.cloud/1/ofx7q6hpsl79ivw2chgozdl8jn3i3lntas7navzi2xf0ucct/tinymce/6/tinymce.min.js"
referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: '#newarticle',
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
    document.getElementById('img_article').value = null;
    frame.src = "";
}
</script>
@endpush
