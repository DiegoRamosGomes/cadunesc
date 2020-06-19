<div class="text-center mt-5">
    <h3 class="font-weight-bold">Ultimos eventos</h3>
    <div class="d-flex justify-content-center">
        <div class="grid-container">
            @foreach ($events as $event)
                <div class="grid-item">
                    <img src="{{ $event->image }}" alt="Evento" class="rounded">
                    <p class="font-weight-bold">{{ $event->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
