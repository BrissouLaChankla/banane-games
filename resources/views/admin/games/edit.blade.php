@extends('adminlayouts.app')
@section('content')
        <div class="container">
            <h1 class="text-center">Edition de {{$game->title}}</h1>

            @include('admin.games.includes.edit-create-form')

        </div>

  
@endsection
