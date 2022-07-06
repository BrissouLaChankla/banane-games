<section class="splide team-carousel outside_arrows pb-6" aria-label="Section carousel de l'équipe Nanagames">
    <div class="splide__track">
          <ul class="splide__list">
            @foreach($members as $member)
                <div class="splide__slide text-center px-3">
                    <img src="{{asset('img/members/Nanagames_'.$member->img_path.'.webp')}}" alt="Photo de {{$member->fullname}}" loading="lazy" class="img-fluid">
                    <h3 class="mt-4 mb-2">{{$member->fullname}}</h3>
                    <p>{{$member->job}}</p>
                </div>
            @endforeach
          </ul>
    </div>
  </section>



@push('scripts')
    <script>
          var splide = new Splide('.splide', {
            breakpoints: {
                992: {
                    perPage: 2
                },
                768: {
                    perPage: 1,
                    arrows: true // not work     

                }
            },
            type: 'loop',
            perPage: 3,
            perMove: 1,
            autoplay: true,
        });

        splide.mount();
    </script>
@endpush
