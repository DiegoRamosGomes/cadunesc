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
            width: 70%;
            align-self: center;
        }

        .grid-item {
            width: 80%;
            height: 200px;
            margin: 0 0 10px;
        }

        .grid-item img {
            width: 100%;
            height: 100%;
        }

        @media only screen and (max-width: 600px) {
            .grid-container {
                display: block;
                width: 90%;
            }
            .grid-item {
                width: 100%;
                height: 150px;
                margin: 0 0 10px;
            }
            .grid-item:nth-child(n+6) {
                display:none;
            }
        }
    </style>
@endsection

@section('content')
    <x-home-slider></x-home-slider>
    <div class="text-center mt-4">
        <h3>Ultimos eventos</h3>
        <x-list-event></x-list-event>
    </div>
@endsection
