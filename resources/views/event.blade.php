@extends('layouts.app')

@section('style')
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.0.0/main.min.css' rel='stylesheet' />

    <style>
        #calendar {
            width: 25%;
        }

        .event-list {
            width: 50%;
        }

        .event-logo {
            width: 100px;
        }

        .event-description {
            overflow-wrap: break-word;
            word-wrap: break-word;
            hyphens: auto;
            width: 75%;
        }

        .fc-toolbar {
            font-size: .9rem;
        }

        @media only screen and (max-width: 600px) {
            #calendar, .event-list {
                width: 100%;
            }

            .event-logo {
                width: 20%;
            }

            .m-sm-0 {
                margin: 0 !important;
            }

            .event-list h4 {
                margin: .5rem 0;
            }
        }
    </style>
@endsection

@section('content')
    <div class="d-flex flex-wrap justify-content-around my-5">
        <div id='calendar' class="mx-2"></div>
        <div class="event-list">
            <h4 class="text-center">Eventos de Junho</h4>
            <h3 class="text-yellow text-center">22</h3>
            <hr>
            @foreach ($events as $event)
                <div class="d-flex m-3">
                    <img src="{{ $event->image }}" alt="{{ $event->name }}" class="event-logo">
                    <div class="ml-3 justify-content-around event-description">
                        <p class="m-sm-0">{{ $event->name }}</p>
                        <p class="small m-0">{{ \Illuminate\Support\Str::limit($event->description, 100) }}</p>
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
                height: 'auto'
            });
            calendar.render();
        });

    </script>
@endpush
