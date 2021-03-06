<nav id="navbar-desktop">
    <div class="d-flex justify-content-around align-items-center flex-wrap">
        <div>
            <img class="logo" src="{{ asset('storage/logo.png') }}" alt="Logo">
        </div>
        <div class="text-center mx-5">
            <h3 class="font-weight-bold">Centro Acadêmico Benedito Narciso da Rocha</h3>
            <h5 class="font-weight-bold">Direito - UNESC</h5>
        </div>
        <div class="d-flex justify-content-around align-items-center social_networks">
            <a target="_blank" href="{{ config('app.social_network_url.facebook') }}" class="navbar-socialmedia-link">
                <i class="fa fa-facebook-f"></i>
            </a>
            <a target="_blank" href="{{ config('app.social_network_url.instagram') }}" class="navbar-socialmedia-link">
                <i class="fa fa-instagram"></i>
            </a>
            <a target="_blank" href="{{ config('app.social_network_url.whatsapp') }}" class="navbar-socialmedia-link">
                <i class="fa fa-whatsapp"></i>
            </a>
        </div>
    </div>
    <hr>
    <div id="sub-navbar">
        <div class="sub-navbar-menu">
            <a href="{{ route('home') }}" class="{{ isRoute('home') ? 'active' : ''}}">Início</a>
        </div>
        <li class="nav-item dropdown sub-navbar-menu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Comprovantes</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('receipt.event') }}">Evento</a>
                <a class="dropdown-item" href="{{ route('receipt.management') }}">Gestão</a>
            </div>
        </li>
        <div class="sub-navbar-menu">
            <a href="{{ route('students') }}" class="{{ isRoute('students') ? 'active' : ''}}">Transparência</a>
        </div>
        <div class="sub-navbar-menu">
            <a href="{{ route('events') }}" class="{{ isRoute('events') ? 'active' : ''}}">Eventos</a>
        </div>
        <li class="nav-item dropdown sub-navbar-menu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Noticias</a>
            <div class="dropdown-menu">
                <a target="_blank" class="dropdown-item" href="https://pesquisaeextensaoc.wixsite.com/cadunesc/">Departamento Pesquisa e Extensão</a>
                <a class="dropdown-item" href="{{ route('posts') }}">Postagens</a>
            </div>
        </li>
        <div class="sub-navbar-menu">
            <a href="{{ route('contact') }}" class="{{ isRoute('contact') ? 'active' : ''}}">Contato</a>
        </div>
    </div>
    <hr class="mb-0">
</nav>
<nav id="navbar-mobile" class="fixed-bottom">
    <div class="content-more-items d-none bg-yellow" style="border-bottom: 1px solid black">
        <a href="{{ route('receipt.event') }}" class="{{ isRoute('receipt.event') ? 'active' : ''}} text-dark">
            <div class="text-center font-weight-bold py-3">Comprovante Evento</div>
        </a>
        <a href="{{ route('receipt.management') }}" class="{{ isRoute('receipt.management') ? 'active' : ''}} text-dark">
            <div class="text-center font-weight-bold py-3">Comprovante Gestão</div>
        </a>
        <a href="{{ route('posts') }}" class="{{ isRoute('posts') ? 'active' : ''}} text-dark">
            <div class="text-center font-weight-bold py-3">Postagens</div>
        </a>
        <a target="_blank" href="https://pesquisaeextensaoc.wixsite.com/cadunesc/" class="text-dark">
            <div class="text-center font-weight-bold py-3">Departamento Pesquisa e Extensão</div>
        </a>
        <a href="{{ route('contact') }}" class="{{ isRoute('contact') ? 'active' : ''}} text-dark">
            <div class="text-center font-weight-bold py-3">Contato</div>
        </a>
    </div>
    <div class="row align-items-center p-3" style="background-color: #FED605;">
        <div class="col-2 text-center font-weight-bold">
            <a href="{{ route('home') }}" class="{{ isRoute('home') ? 'active' : ''}} text-dark">Início</a>
        </div>
        <div class="col text-center font-weight-bold">
            <a href="{{ route('students') }}"
               class="{{ isRoute('students') ? 'active' : ''}} text-dark">Transparência</a>
        </div>
        <div class="col-3 text-center font-weight-bold">
            <a href="{{ route('events') }}" class="{{ isRoute('events') ? 'active' : ''}} text-dark">Eventos</a>
        </div>
        <div class="col-2 text-center font-weight-bold more-items">
            <i class="fa fa-chevron-up" aria-hidden="true"></i>
        </div>
    </div>
</nav>



@push('scripts')
    <script>
        $('#navbar-mobile .more-items').on('click', () => {
            const divMoreContent = $('.content-more-items');
            divMoreContent.fadeToggle();
            if (divMoreContent.hasClass('d-none')) {
                divMoreContent.toggleClass('d-none');
            }
        });
    </script>
@endpush
