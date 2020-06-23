@extends('layouts.app')

@section('style')
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.0.0/main.min.css' rel='stylesheet' />
@endsection

@section('content')
    <div class="d-flex justify-content-around my-5">
        <div class="w-25" id='calendar'></div>
        <div class="w-50">
            <h4 class="text-center">Eventos de Junho</h4>
            <h3 class="text-yellow text-center">22</h3>
            <hr>
            @foreach ($events as $event)
                <div class="d-flex my-3">
                    <img src="{{ $event->image }}" alt="{{ $event->name }}" style="width: 100px;" width="">
                    <div class="ml-3 justify-content-around">
                        <p class="">{{ $event->name }}</p>
                        <p class="small m-0">{{ \Illuminate\Support\Str::limit($event->description, 150) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.0.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.0.0/locales-all.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let calendarEl = document.getElementById('calendar');
            let calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                height: 500
            });
            calendar.render();
        });

    </script>
@endpush
