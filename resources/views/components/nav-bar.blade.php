<nav id="navbar-desktop">
    <div class="d-flex justify-content-around align-items-center flex-wrap">
        <div>
            <img class="logo" src="{{ asset('storage/logo.png') }}" alt="Logo">
        </div>
        <div class="text-center">
            <h1 class="font-weight-bold">CA Benedito Narciso da Rocha</h1>
            <h3 class="font-weight-bold">Centro Academico de Direito</h3>
        </div>
        <div class="d-flex justify-content-around align-items-center social_networks">
                <a target="_blank" href="https://www.facebook.com/cadunesc/" class="navbar-socialmedia-link">
                    <i class="fa fa-facebook-f"></i>
                </a>
                <a target="_blank" href="https://www.instagram.com/cadunesc/" class="navbar-socialmedia-link">
                    <i class="fa fa-instagram"></i>
                </a>
                <a target="_blank" href="https://twitter.com/unescad" class="navbar-socialmedia-link">
                    <i class="fa fa-twitter"></i>
                </a>
        </div>
    </div>
    <hr>
    <div id="sub-navbar">
        <div class="sub-navbar-menu"><a href="#" class="{{ \Illuminate\Support\Facades\Route::currentRouteName() == 'home' ? 'active' : ''}}">Inicio</a></div>
        <div class="sub-navbar-menu"><a href="#">Alunos</a></div>
        <div class="sub-navbar-menu"><a href="#">Eventos</a></div>
        <div class="sub-navbar-menu"><a href="#">Ajuda</a></div>
    </div>
    <hr>
</nav>
<nav id="navbar-mobile" class="fixed-bottom">
    <div class="row align-items-center p-3" style="background-color: #FED605;">
        <div class="col text-center font-weight-bold">Inicio</div>
        <div class="col text-center font-weight-bold">Alunos</div>
        <div class="col text-center font-weight-bold">Eventos</div>
        <div class="col text-center font-weight-bold">Ajuda</div>
    </div>
</nav>
