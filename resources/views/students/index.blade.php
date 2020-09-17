@extends('layouts.app')

@section('style')
    <style>
        ul li {
            border: 1px solid #FED605 !important;
        }

        @media only screen and (max-width: 600px) {

        }
    </style>
@endsection

@section('content')
    <div class="container my-5">
        <form action="" class="form-inline">
            <input type="submit" class="btn btn-sm bg-yellow" value="Pesquisar">
            <div class="input-group col pr-0">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </span>
                </div>
                <input type="text" class="form-control form-control-sm" name="text" id="text">
            </div>
        </form>
        <hr>
        <ul class="list-group">
            @foreach($documents as $document)
                <a class="text-dark" href="{{ \Illuminate\Support\Facades\Storage::url($document->url) }}">
                    <li class="list-group-item px-2 py-1 my-2 rounded">{{ $document->title }}</li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection
