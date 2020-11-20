@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        @foreach($posts as $post)
            <a href="{{ route('posts.show', $post->id) }}" class="text-dark">
                <h3 class="my-0">{{ $post->title }}</h3>
                <p class="my-0 small" style="color: rgba(0, 0, 0, .3)">{{ $post->created_at->format('d/m/Y') }}</p>
                <p class="my-0">{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 500) }}</p>
            </a>
            <hr>
        @endforeach
    </div>
@endsection
