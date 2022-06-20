{{-- Section grid of games with Tilt --}}
<div class="text-center mb-7">
    <h2 class="text-primary">{{$mainTitle}}</h2>
</div>
<div class="row justify-content-center">
    @foreach ($games->slice(0, 3) as $game)
        <div class="col-6 col-lg-4 px-4 pb-3 ">
            <a href="{{ route('show-game', ['slug' => $game->slug]) }}"
                class="@if(!$game->is_available) black_white @endif small game-thumb rounded shadow d-block"
                style="background-image:linear-gradient(transparent, 75%, rgba(0, 0, 0, 0.85)), url('{{ asset('img/games/thumb/' . $game->thumbnail_img_url) }}');">
                <small class="matiere">{{ $game->matiere }}</small>
            </a>
            <a class="text-dark" href="{{ route('show-game', ['slug' => $game->slug]) }}">
                <h3 class=" mb-3 mt-4">{{ $game->title }}</h3>
            </a>
            @include('sections.game-status')
            <p class="mt-4">
                {{ $game->short_description }}
            </p>
        </div>
    @endforeach
</div>

@push('scripts')
    <script defer>
        VanillaTilt.init(document.querySelectorAll(".game-thumb"), {
            scale: 1.05
        });
    </script>
@endpush
