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
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
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
{{--        <div class="carousel-item text-center">--}}
{{--            <img class="img-fluid fit-image home-slider" src="https://www.w3schools.com/w3css/img_ny.jpg" alt="Chicago">--}}
{{--            <div class="carousel-caption mb-lg-5">--}}
{{--                <a href="#" class="btn btn-sm btn-warning">Ver informações</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="carousel-item text-center">--}}
{{--            <img class="img-fluid fit-image home-slider" src="https://www.w3schools.com/w3css/img_chicago.jpg" alt="New York">--}}
{{--            <div class="carousel-caption mb-lg-5">--}}
{{--                <a href="#" class="btn btn-sm btn-warning">Ver informações</a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
