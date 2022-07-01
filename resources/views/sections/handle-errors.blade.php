@if ($errors->any())
    <ul class="alert alert-danger mt-2 p-3" role="alert">
        @foreach ($errors->all() as $error)
            <li class="ms-3 text-start">{{ $error }}</li>
        @endforeach
    </ul>
@endif
