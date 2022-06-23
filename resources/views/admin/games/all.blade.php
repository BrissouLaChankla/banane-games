@extends('adminlayouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($games as $game)
            <div class="col-3">
                <div class="card mb-3">
                    <img src="{{ asset('img/games/thumb/' .$game->thumbnail_img_url) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$game->title}}</h5>
                        <p class="card-text">{{$game->short_description}}</p>
                        <p class="card-text"><small class="text-muted">Derniere modif : {{$game->updated_at}}</small></p>
                        
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <div onclick="deleteGame({{ $game->id }})"
                            class="btn btn-danger d-flex align-items-center">
                            <span class="material-symbols-rounded">
                                delete
                            </span>
                        </div>
                        <a target="_blank" href="{{route('show-game', ['slug' => $game->slug])}}" class="btn btn-warning text-white d-flex align-items-center">
                            <span class="material-symbols-rounded">
                                visibility
                            </span>
                        </a>
                        <a href="{{route('show-edit-game', ['slug' => $game->slug])}}" class="btn btn-primary d-flex align-items-center">
                            <span class="material-symbols-rounded">
                                edit
                            </span>
                        </a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>

    @push('scripts')
    <script>

        function deleteGame(id) {
            const token = '{{ csrf_token() }}';
            Swal.fire({
                title: 'Êtes-vous sûr ?',
                text: "Vous êtes sur le point de supprimer un jeu",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui, supprimer.'
            }).then((result) => {
                if (result.isConfirmed) {
                     fetch('/admin/games/delete/'+id, {
                        headers: {
                            'Content-Type': 'application/json',
                            "X-CSRF-Token": token
                        },
                        method: 'DELETE',
                    }).then(function(response) {
                        window.location.reload()
                    }) .catch(function(err) {
                        console.log(err)
                    });
                }
            })
        }


    </script>
@endpush
@endsection
