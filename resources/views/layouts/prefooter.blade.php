<div id="prefooter" class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="d-none d-md-block col-3 mt-auto">
                <img src="https://schools-cdn.duolingo.com/images/cb3523739beca7426f550b21a9a4f140.svg"
                    class="img-fluid" alt="">
            </div>
            <div class="col-md-6 m-auto">
                <h2 class="text-center text-white">Inscris toi à la Newsletter !</h2>
                <div class="text-center mt-3">
                    {!! Form::open(['url' => route('add-email-newsletter'), 'class' => 'd-flex']) !!}
                    <div class="flex-grow-1">
                        {{ Form::email('email', null, ['class' => 'form-control text-muted h-100 border-0','placeholder' => 'john.doe@gmail.com','required']) }}
                    </div>
                    <div>
                        <x-button class="ms-2" name="S'inscrire" color="white" />
                    </div>
                    {!! Form::close() !!}
                    {{-- Handle the errors --}}
                    @if ($errors->any())
                        <ul class="alert alert-danger mt-2 p-3" role="alert">
                            @foreach ($errors->all() as $error)
                                <li class="ms-3 text-start">{{ $error }}</li>
                            @endforeach
                        </ul>
                    {{-- Handle the success --}}
                    @elseif(Session::has('newsletter-success'))
                        <ul class="alert alert-success mt-2 p-3" role="alert">
                            <li class="ms-3 text-start">{{ Session::get('newsletter-success') }}</li>
                        </ul>
                    @endif
                </div>
            </div>
            <div class="d-none d-md-block col-3">
                <img src="//schools-cdn.duolingo.com/images/50a6c8efd58a651bd2081caad4930554.svg" class="img-fluid"
                    alt="">
            </div>
        </div>
    </div>
</div>
