<div class="text-center mt-4">
    <h3 class="font-weight-bold">Ultimos eventos</h3>
    <div class="d-flex justify-content-center">
        <div class="grid-container">
            @foreach ($events as $event)
                <div class="grid-item">
                    <img src="{{ $event->image }}" alt="Evento">
                    <p class="font-weight-bold">{{ $event->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
