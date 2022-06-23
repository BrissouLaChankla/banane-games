@extends('adminlayouts.app')
@section('content')
    <h1 class="text-center mb-10">Création d'un nouvel article</h1>

    <div class="container">
        @include('admin.articles.includes.edit-create-form')
    </div>

@endsection
