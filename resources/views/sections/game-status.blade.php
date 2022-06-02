@if ($game->is_available)
    <small class="status available text-success">Disponible</small>
@else
    <small class="status unavailable text-danger">Indisponible</small>
@endif
