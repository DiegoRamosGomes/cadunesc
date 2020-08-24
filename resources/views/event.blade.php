@extends('layouts.app')

@section('style')
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.0.0/main.min.css' rel='stylesheet'/>

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
            font-size: .8rem;
        }

        .fc-toolbar-title {
            font-weight:bold;
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
                dateClick: function (info) {
                    $('.event-list').html('');
                    $.get({
                        url: '{{ route('api.events.show') }}' + `?date=${info.dateStr}`,
                        success: function (data) {
                            if (data.length === 0) {
                                $('.event-list').append(`<h4 class="mx-3 text-center">Nenhum evento programado para hoje</h4>`);
                            } else {
                                $('.event-list').append(`
                                    <h4 class="text-center">Eventos de ${moment(info.dateStr).locale('pt').format('MMMM')}</h4>
                                    <h3 class="text-yellow text-center">${moment(info.dateStr).locale('pt').format('DD')}</h3>
                                    <hr>
                                `);
                                data.forEach((event) => {
                                    $('.event-list').append(`
                                        <a href="#${event.id}" class="text-dark">
                                            <div class="d-flex m-3">
                                                <img src="${event.image}" alt="${event.name}" class="event-logo">
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
                    // info.dayEl.style.backgroundColor = 'red';
                }
            });
            calendar.render();
        });

    </script>
@endpush
