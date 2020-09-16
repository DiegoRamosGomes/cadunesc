<div class="text-center mt-5">
    <h3 class="">Ultimos eventos</h3>
    <div class="d-flex justify-content-center">
        <div class="grid-container">
            @foreach ($events as $event)
                <div class="grid-item">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($event->image) }}" alt="Evento" class="rounded">
                    <p class="">{{ $event->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
