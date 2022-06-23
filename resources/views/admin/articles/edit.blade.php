@extends('adminlayouts.app')
@section('content')
<div class="container">
   @include('admin.articles.includes.edit-create-form')
</div>

   {{-- {{$article}} --}}
@endsection
