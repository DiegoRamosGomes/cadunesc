<div class="text-center mt-5">
    <h3 class="font-weight-bold mb-3">Ultimas noticias</h3>
    <div class="d-flex justify-content-center">
        <div class="grid-container grid-post">
            @foreach ($lastPosts as $post)
                <a href="{{ route('posts.show', $post->id) }}" class="text-dark">
                    <div class="grid-item text-justify">
                        <h4 class="font-weight-bold">{{ $post->title }}</h4>
                        {!! \Illuminate\Support\Str::limit(preg_replace("/<img[^>]+\>/i", " (image) ", $post->content), 150) !!}
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
