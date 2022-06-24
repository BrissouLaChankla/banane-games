@extends('adminlayouts.app')
@section('content')
<div class="container">

    <h1 class="text-muted">Dashboard</h1>
    
    <div class="row">
        <div class="col-12 mt-5">
      
                <a href="{{ route('show-all-games') }}" class="">
                    <div class="card text-white rounded-2">
                        <img src="{{ asset('img/dashboard/gamesdash.jpg') }}"class="object-fit  rounded-2" alt="..." style="height: 400px;" >
                        <div class="card-img-overlay">
                        <h5 class="card-title">Jeux</h5>
                        </div>
                    </div>
                </a>
        
        </div>
        <div class="col-12 mt-5">
            <a href="{{ route('show-all-articles') }}">
                <div class="card text-white rounded">
                    <img src="{{ asset('img/dashboard/articlesdash.jpg') }}" class="object-fit  rounded-2" alt="..." style="height: 400px;">
                    <div class="card-img-overlay">
                    <h5 class="card-title">Articles</h5>
                    </div>
                
                </div>
            </a>

        </div>
    </div>

</div>

@endsection