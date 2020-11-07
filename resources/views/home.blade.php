@extends('layouts.app')

@section('style')
    <style>
        .grid-container {
            display: grid;
            grid-column-gap: 0;
            grid-row-gap: 20px;
            grid-template-columns: auto auto auto;
            padding: 10px;
            justify-items: center;
            align-self: center;
        }

        .grid-container:not(.grid-post) {
            width: 70%;
        }

        .grid-container.grid-post {
            width: 90%;
        }

        .grid-item {
            width: 80%;
            height: 200px;
        }

        .grid-item p {
            margin: 0;
        }

        .grid-item img {
            width: 100%;
            height: 80%;
        }

        @media only screen and (max-width: 600px) {
            .grid-container {
                display: block;
                width: 90%;
            }

            .grid-item {
                width: 100%;
                height: 230px;
                margin: 0 0 30px;
            }

            .grid-item img {
                width: 100%;
                height: 90%;
            }

            .grid-item:nth-child(n+6) {
                display: none;
            }

            #map {
                margin-bottom: 30px;
            }
        }
    </style>
@endsection

@section('content')
    @include('components.home-slider')
    <hr class="m-0">
    <x-list-event></x-list-event>
    <hr style="margin: 50px 0">
    @include('components.last-posts')
    <hr style="margin: 50px 0">
    <x-home-map></x-home-map>
@endsection

@push('scripts')
    <script>
        let map;
        let marker;

        function initMap() {
            const latlong = {lat: -28.702500, lng: -49.4106887};
            map = new google.maps.Map(document.getElementById('map'), {
                center: latlong,
                zoom: 15
            });

            marker = new google.maps.Marker({position: latlong, map: map});
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('app.google_maps_api_key') }}&callback=initMap"
            async defer></script>
@endpush
