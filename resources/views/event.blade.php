@extends('layouts.app')

@section('style')
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.0.0/main.min.css' rel='stylesheet'/>

    <style>
        #calendar {
            width: 50%;
        }

        .event-list {
            width: 40%;
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
            font-size: .8rem;
        }

        .fc-toolbar-title {
            font-weight: bold;
        }

        .fc-event-main {
            cursor: pointer;
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
        <div id='calendar'></div>
        <div class="event-list"></div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.0.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.0.0/locales-all.min.js"></script>
    <script src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let calendarEl = document.getElementById('calendar');
            let calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                height: 'auto',
                locale: 'pt',
                events: [
                        @foreach($events as $event)
                    {
                        id: '{{ $event->id }}',
                        title: '{{ $event->name }}',
                        start: '{{ $event->start_at }}',
                        end: '{{ $event->end_at }}',
                        allDay: true,
                    },
                    @endforeach
                ],
                eventClick: function(info) {
                    const url = '{{ route('events.show', '') }}';
                    window.location = url + `/${info.event.id}`;
                },
                dateClick: function (info) {
                    $('.event-list').html('');
                    $.get({
                        url: '{{ route('api.events.showByDay') }}' + `?date=${info.dateStr}`,
                        success: function (data) {
                            const monthName = moment(info.dateStr).locale('pt').format('MMMM');
                            const dayNumber = moment(info.dateStr).locale('pt').format('DD');
                            if (data.length === 0) {
                                $('.event-list').append(`<h4 class="mx-3 text-center">Nenhum evento programado para ${dayNumber} de ${monthName}</h4>`);
                            } else {
                                $('.event-list').append(`
                                    <h4 class="text-center">Eventos de ${monthName}</h4>
                                    <h2 class="text-yellow text-center font-weight-bold">${dayNumber}</h2>
                                    <hr>
                                `);
                                data.forEach((event) => {
                                    let eventUrl = '{{ route('events.show', '') }}';
                                    $('.event-list').append(`
                                        <a href="${eventUrl}/${event.id}" class="text-dark">
                                            <div class="d-flex m-3">
                                                <img src="http://diego-gomes.com.br:8000/storage/events/c8w172ETEQKGzy9l1HrI6R7wSVAJBGxmQMJVg4Kx.jpeg" alt="${event.name}" class="event-logo">
                                                <div class="ml-3 justify-content-around event-description">
                                                    <p class="m-sm-0">${event.name}</p>
                                                    <p class="small m-0">${event.description}</p>
                                                </div>
                                            </div>
                                        </a>
                                    `);
                                });
                            }
                        }
                    });
                    $('td.fc-daygrid-day').each((item, index) => {
                        $(index).css('background-color', "#fCfCfC");
                    });
                    info.dayEl.style.backgroundColor = '#FED605';
                }
            });
            calendar.render();
        });

    </script>
@endpush
