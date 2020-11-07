<div class="text-center mt-5">
    <h3 class="font-weight-bold mb-3">Ultimas noticias</h3>
    <div class="d-flex justify-content-center">
        <div class="grid-container grid-post">
            @foreach ($lastPosts as $post)
                <a href="{{ route('posts.show', $post->id) }}" class="text-dark">
                    <div class="grid-item">
                        <h4 class="font-weight-bold text-left">{{ $post->title }}</h4>
                        <p class="my-0 text-justify">{!! \Illuminate\Support\Str::limit(strip_tags($post->content), 150) !!}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
