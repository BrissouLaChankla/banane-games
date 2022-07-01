@extends('adminlayouts.app')
@section('content')
    <h1 class="text-center mb-10">Création d'un nouveau jeu</h1>

    <div class="container">
        @include('admin.games.includes.edit-create-form')
    </div>

@endsection
