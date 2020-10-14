@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        @foreach($posts as $post)
            <a href="{{ route('posts.show', $post->id) }}" class="text-dark">
                <h5 class="my-0">{{ $post->title }}</h5>
                <p class="my-0 small" style="color: rgba(0, 0, 0, .3)">{{ $post->created_at->format('d/m/Y') }}</p>
            </a>
            <hr>
        @endforeach
    </div>
@endsection
