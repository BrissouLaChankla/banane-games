{{-- Section grid of games with Tilt --}}

<div class="row justify-content-center @if(isset($small_card)) small @endif">
    @foreach ($games as $game)
        <div class="col-6 col-lg-3 px-4 py-3 ">
            <a href="{{ route('show-game', ['slug' => $game->slug]) }}"
                class="@if(!$game->is_available) black_white @endif small game-thumb rounded shadow d-block"
                style="background-image:linear-gradient(transparent, 75%, rgba(0, 0, 0, 0.85)), url('{{ asset('img/games/thumb/' . $game->thumbnail_img_url) }}');">
                <small class="matiere">{{ $game->matiere }}</small>
            </a>
            <a class="text-dark" href="{{ route('show-game', ['slug' => $game->slug]) }}">
                <h3 class="text-uppercase mb-1 mt-3">{{ $game->title }}</h3>
            </a>
            @include('sections.game-status')

            <p class="mt-2 text-muted">
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
