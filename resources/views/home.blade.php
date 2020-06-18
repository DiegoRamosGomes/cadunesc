@extends('layouts.app')

@section('style')
    <style>
        #navbar-mobile {
            display: none;
        }

        .grid-container {
            display: grid;
            grid-column-gap: 0;
            grid-row-gap: 20px;
            grid-template-columns: auto auto auto;
            padding: 10px;
            justify-items: center;
            width: 70%;
            align-self: center;
        }

        .grid-item {
            width: 80%;
            height: 150px;
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
                margin: 0 0 10px;
            }

            .grid-item img {
                width: 100%;
                height: 90%;
            }

            .grid-item:nth-child(n+6), #footer-menus {
                display: none;
            }

            .footer div > div {
                margin-bottom: 30px;
            }

            .footer div {
                width: 100% !important;
            }

            #map {
                margin-bottom: 30px;
            }

            #navbar-mobile {
                display: block;
            }
        }
    </style>
@endsection

@section('content')
    <x-home-slider></x-home-slider>
    <hr>
    <x-list-event></x-list-event>
    <hr>
    <x-home-map></x-home-map>
    <x-footer></x-footer>
@endsection

@push('scripts')
    <script>
        let map;
        let marker;

        function initMap() {
            const latlong = {lat: -23.6815314, lng: -46.8755};
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
