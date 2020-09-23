@extends('layouts.app')

@section('style')
    <style>
        .event-description {
            font-size: 15px;
        }

        .event-title {
            font-weight: bold;
        }

        .content img {
            width: 40%;
        }

        @media only screen and (max-width: 600px) {
            .content {
                display: block !important;
            }

            .content div .event-title {
                margin: 1rem 0 1rem;
            }

            .content img, .content div {
                width: 100% !important;
            }
        }
    </style>
@endsection

@section('content')
    <div class="d-flex justify-content-center my-5 content">
        <img src="http://diego-gomes.com.br:8000/storage/events/c8w172ETEQKGzy9l1HrI6R7wSVAJBGxmQMJVg4Kx.jpeg" alt="Imagem do evento" class="px-5 rounded">
        <div class="w-50 px-5" style="overflow-wrap: break-word;">
            <h2 class="text-center event-title">{{ $event->name }}</h2>
            <p class="text-center event-date">O evento inicia dia {{ $event->start_at->day }} de {{ $event->start_at->format('F') }}</p>
            <hr>
            <p class="text-justify event-description">{{ $event->description }}{{ $event->description }}{{ $event->description }}{{ $event->description }}{{ $event->description }}{{ $event->description }}{{ $event->description }}</p>
            <div class="text-center mt-5">
                <a href="{{ route('contact') }}" class="btn btn-sm bg-yellow">Entre em contato para participar</a>
            </div>
        </div>
    </div>
@endsection
