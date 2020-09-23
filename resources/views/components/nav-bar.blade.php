<nav id="navbar-desktop">
    <div class="d-flex justify-content-around align-items-center flex-wrap">
        <div>
            <img class="logo" src="{{ asset('storage/logo.png') }}" alt="Logo">
        </div>
        <div class="text-center mx-5">
            <h3 class="font-weight-bold">Centro Academico Denedito Narciso da Rocha</h3>
            <h5 class="font-weight-bold">Centro Academico de Direito</h5>
        </div>
        <div class="d-flex justify-content-around align-items-center social_networks">
            <a target="_blank" href="{{ config('app.social_network_url.facebook') }}" class="navbar-socialmedia-link">
                <i class="fa fa-facebook-f"></i>
            </a>
            <a target="_blank" href="{{ config('app.social_network_url.instagram') }}" class="navbar-socialmedia-link">
                <i class="fa fa-instagram"></i>
            </a>
            <a target="_blank" href="{{ config('app.social_network_url.twitter') }}" class="navbar-socialmedia-link">
                <i class="fa fa-twitter"></i>
            </a>
        </div>
    </div>
    <hr>
    <div id="sub-navbar">
        <div class="sub-navbar-menu">
            <a href="{{ route('home') }}" class="{{ isRoute('home') ? 'active' : ''}}">Inicio</a>
        </div>
        <li class="nav-item dropdown sub-navbar-menu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Comprovantes
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('receipt.event')}}">Evento</a>
                <a class="dropdown-item" href="{{ route('receipt.management') }}">Gestão</a>
            </div>
        </li>
        <div class="sub-navbar-menu">
            <a href="{{ route('students') }}" class="{{ isRoute('students') ? 'active' : ''}}">Transparencia</a>
        </div>
        <div class="sub-navbar-menu">
            <a href="{{ route('events') }}" class="{{ isRoute('events') ? 'active' : ''}}">Eventos</a>
        </div>
        <div class="sub-navbar-menu">
            <a href="{{ route('contact') }}" class="{{ isRoute('contact') ? 'active' : ''}}">Contato</a>
        </div>
    </div>
    <hr class="mb-0">
</nav>
<nav id="navbar-mobile" class="fixed-bottom">
    <div class="row align-items-center p-3" style="background-color: #FED605;">
        <div class="col text-center font-weight-bold">
            <a href="{{ route('home') }}" class="{{ isRoute('home') ? 'active' : ''}}">Inicio</a>
        </div>
        <div class="col text-center font-weight-bold">
            <a href="{{ route('students') }}" class="{{ isRoute('students') ? 'active' : ''}}">Alunos</a>
        </div>
        <div class="col text-center font-weight-bold">
            <a href="{{ route('events') }}" class="{{ isRoute('events') ? 'active' : ''}}">Eventos</a>
        </div>
        <div class="col text-center font-weight-bold">
            <a href="{{ route('contact') }}" class="{{ isRoute('contact') ? 'active' : ''}}">Contato</a>
        </div>
    </div>
</nav>
