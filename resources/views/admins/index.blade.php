
@extends('adminlayouts.app')
@section('content')


<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-start-0 border-end-0 my-5">
                {{-- <div class="card-header border">{{ __('Register') }}</div> --}}
                <p>Ajouter un admin</p>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                               
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="" value="">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table mt-5">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Mot de passe</th>
                <th scope="col">Suppression</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                    <tr>
                        <th scope="row">{{ $admin->id }}</th>
                        <td>{{ $admin->name }} </td>
                        <td>{{ $admin->email }} </td>
                        <td>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                    {{Form::hidden('email', $admin->email)}}

                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Reset Link') }}
                                        </button>
                            </form>
                        </td>
                        <td>

                            @csrf
                            <div onclick="deleteAdmin({{ $admin->id }})" class="btn btn-danger">
                                <span class="material-symbols-rounded">
                                    delete
                                </span>
                            </div>
                        </td>
                        
                    </tr>
                @endforeach

            
            </tbody>
        </table>
    </div>
</div>


@push('scripts')
<script>

    function deleteAdmin(id) {
        const token = '{{ csrf_token() }}';
        Swal.fire({
            title: 'Êtes-vous sûr ?',
            text: "Vous êtes sur le point de supprimer cette admin?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, supprimer.'
        }).then((result) => {
            if (result.isConfirmed) {
                 fetch('delete/'+id, {
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