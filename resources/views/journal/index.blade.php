@extends('layouts.app')

@section('style')
    <style>
        .image-content {
            display: flex;
            justify-content: center;
            padding: 10px 0;
        }

        .image-content img {
            border: 1px solid #636b6f;
        }
    </style>
@endsection

@section('content')
    <div class="image-content">
        <a target="_blank" href="{{ route('journal.get-document') }}"><img src="{{ asset('storage/capa-jornal.png') }}" alt="Jornal"></a>
    </div>
@endsection
