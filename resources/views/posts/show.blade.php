@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h1 class="m-0">{{ $post->title }}</h1>
        <p class="small m-0" style="color: rgba(0, 0, 0, .3)">{{ $post->created_at->format('d/m/Y') }}</p>
        <hr>
        {!! $post->content !!}
    </div>
@endsection
