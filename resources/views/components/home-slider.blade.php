<style>
    .home-slider {
        height: 500px;
    }
    @media only screen and (max-width: 600px) {
        .home-slider {
            height: 200px;
        }
    }
</style>

<div id="demo" class="carousel slide home-slider" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
        @for($i = 0; $i < count($sliders); $i++)
        <li data-target="#demo" data-slide-to="0" class="{{ $i == 0 ? 'active' : ''}}"></li>
        @endfor
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
        @foreach($sliders as $index => $slider)
        <div class="carousel-item text-center {{ $index == 0 ? 'active' : '' }}">
            <img class="img-fluid fit-image home-slider" src="{{ $slider->image }}" alt="Los Angeles">
            <div class="carousel-caption mb-lg-5">
                <a href="{{ $slider->action_url }}" class="btn btn-sm btn-warning">Ver informações</a>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
