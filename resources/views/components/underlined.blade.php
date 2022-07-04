<span class="position-relative">{{$word}} <img src="{{asset("img/decorations/yellow-underline.webp")}}" class="yellow-underline animate__animated wow animate__zoomIn" alt="Soulignage Jaune"></span>
@push('scripts')
<script defer>
    window.wow = new WOW.WOW({
        live: false
    });

    window.wow.init();
</script>
@endpush