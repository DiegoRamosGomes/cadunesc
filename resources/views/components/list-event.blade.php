<div class="text-center mt-5">
    <h3 class="font-weight-bold">Últimos Eventos</h3>
    <div class="d-flex justify-content-center">
        <div class="grid-container">
            @foreach ($events as $event)
                <a href="{{ route('events.show', $event->id) }}" class="text-dark">
                    <div class="grid-item">
                        <img src="{{ $event->image }}" alt="Evento" class="rounded">
                        <p class="">{{ $event->name }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
