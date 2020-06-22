<div class="d-flex flex-wrap justify-content-center footer bg-dark text-white pb-5">
    <div class="w-50 d-flex flex-wrap justify-content-center my-3 mt-lg-5 mb-lg-5 text-center">
{{--        <img class="logo" src="{{ asset('storage/logo.png') }}" alt="Logo">--}}
        <img class="logo" src="https://via.placeholder.com/150" alt="Logo">
        <div class="m-3 name-project">
            <p class="m-0">Nome Oficial Do Centro Academico</p>
            <p class="m-0">Centro Academico de Curso</p>
        </div>
    </div>
    <div class="w-50 d-flex flex-wrap justify-content-center align-items-center">
        <div class="w-50 text-center">
            <p class="font-weight-bold">Contato</p>
            @foreach (config('app.phones') as $phone)
                <p class="small m-1">{{ $phone }}</p>
            @endforeach
            <p class="small m-1"><a class="text-white" href="mailto://{{ config('app.mail') }}">{{ config('app.mail') }}</a></p>
        </div>
        <div class="w-25 text-center" id="footer-menus">
            <p class="font-weight-bold">Menus</p>
            <p class="small m-1"><a class="text-white" href="{{ route('home') }}">Inicio</a></p>
            <p class="small m-1"><a class="text-white" href="#">Alunos</a></p>
            <p class="small m-1"><a class="text-white" href="{{ route('events') }}">Eventos</a></p>
            <p class="small m-1"><a class="text-white" href="{{ route('contact') }}">Contato</a></p>
        </div>
        <div class="w-25 text-center">
            <p class="font-weight-bold">Medias Sociais</p>
            <p class="small m-1"><a class="text-white" href="{{ config('app.social_network_url.facebook') }}">Facebook</a></p>
            <p class="small m-1"><a class="text-white" href="{{ config('app.social_network_url.instagram') }}">Instagram</a></p>
            <p class="small m-1"><a class="text-white" href="{{ config('app.social_network_url.twitter') }}">Twitter</a></p>
        </div>
    </div>
</div>
