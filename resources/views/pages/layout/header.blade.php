<header id="page-header">
    <button type="button" id="menu-button" aria-hidden="true" aria-label="exibir/ocultar links do menu">
        <i class="fa-regular fa-bars"></i>
    </button>
    <a href="/">
        <img width="213" height="67" alt="logo da casa nova empreendimentos" src="{{ asset('images/logos/'.$logo.'/logo.png') }}" />
    </a>
    <nav>
        @if ($path === '/')
            <a href="/#body">Início</a>
        @else
            <a href="/">Início</a>
        @endif
        
        <a href="/#empresa">A Empresa</a>
        <a href="/#segmentos">Segmentos</a>
        <a href="/#equipe">Parceiros</a>
        {{-- <a href="/#clientes">Clientes</a> --}}
        <a href="/#contato">Contato</a>
    </nav>
    <address>
        <a href="https://facebook.com" target="_blank">
            <i class="fab fa-facebook-f">Página do Facebook</i>
        </a>
        <a href="https://instagram.com" target="_blank">
            <i class="fab fa-instagram">Página do Instagram</i>
        </a>
    </address>
</header>