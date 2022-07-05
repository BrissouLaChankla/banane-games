@extends('adminlayouts.app')
@section('content')
    <div class="container">
        <div>
            <h1 class="text-center">Tous les articles</h1>
            <a href="{{ route('show-create-article') }}" class="btn btn-primary btn-lg mb-3">Créer un article</a>
        </div>
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-3">
                    <div class="card mb-3">
                        <div>
                            <img src="{{ asset($article->thumbnail_img_url) }}" class="card-img-top" alt="...">
                            <div class="fav">
                                @if ($article->is_fav)
                                    <span class="material-symbols-rounded" onclick="editFav('remove',{{$article->id}})">
                                        star
                                    </span>
                                @else
                                    <span class="material-symbols-rounded " onclick="editFav('add',{{$article->id}})">
                                        grade
                                    </span>
                                @endif

                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->description }}</p>
                            <p class="card-text"><small class="text-muted">Dernière modif :
                                    {{ $article->updated_at->format('d/m/Y') }}</small></p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <div onclick="deleteArticle({{ $article->id }})"
                                class="btn btn-danger d-flex align-items-center">
                                <span class="material-symbols-rounded">
                                    delete
                                </span>
                            </div>
                            <a target="_blank" href="{{ route('show-article', ['slug' => $article->slug]) }}"
                                class="btn btn-warning text-white d-flex align-items-center">
                                <span class="material-symbols-rounded">
                                    visibility
                                </span>
                            </a>
                            <a href="{{ route('show-edit-article', ['slug' => $article->slug]) }}"
                                class="btn btn-primary d-flex align-items-center">
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
            function deleteArticle(id) {
                const token = '{{ csrf_token() }}';
                Swal.fire({
                    title: 'Êtes-vous sûr ?',
                    text: "Vous êtes sur le point de supprimer un article",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Oui, supprimer.'
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch('/admin/articles/delete/' + id, {
                            headers: {
                                'Content-Type': 'application/json',
                                "X-CSRF-Token": token
                            },
                            method: 'DELETE',
                        }).then(function(response) {
                            window.location.reload()
                        }).catch(function(err) {
                            console.log(err)
                        });
                    }
                })
            }

            function editFav(action, id) {
                console.log(action)
                const token = '{{ csrf_token() }}';


                fetch('/admin/articles/fav/'+ action + '/' + id, {
                    headers: {
                        'Content-Type': 'application/json',
                        "X-CSRF-Token": token
                    },
                    method: 'POST',
                }).then(function(response) {
                    window.location.reload()
                }).catch(function(err) {
                    console.log(err)
                });
                
            }



        </script>
    @endpush
@endsection
