@extends('pages.layout.base')
@section('title') Início @endsection
@push('scripts')
    @vite('resources/js/pages/home.js')
@endpush

@section('content')
    <main>
        <section id="home-slides">
            <ul id="slides">
                <li>
                    <x-slide-item position="0" />
                </li>
                <li>
                    <x-slide-item position="1" />
                </li>
                <li>
                    <x-slide-item position="2" />
                </li>
                <li>
                    <x-slide-item position="3" />
                </li>
                <li>
                    <x-slide-item position="4" />
                </li>
            </ul>
            <ul id="slides-selector" aria-hidden="true">
                <li data-slide="0" class="selected"></li>
                <li data-slide="1"></li>
                <li data-slide="2"></li>
                <li data-slide="3"></li>
                <li data-slide="4"></li>
            </ul>
        </section>

        <section id="empresa">
            <div id="empresa-text">
                <h2>
                    <span>Conheça um</span>
                    um pouco mais sobre a gente
                </h2>
                <p>
                    A <b>Casa Nova Empreendimentos</b> é uma empresa que atua em diversas áreas, para citar algumas: serviços financeiros, dedetização, serviços ambientais, dentre outros (conheça cada um deles mais abaixo). E para <b>garantir a excelência</b> que nossos clientes merecem, contamos com profissionais especialistas em cada uma de nossas áreas de atuação. São engenheiros, profissionais com anos de experiência, e por aí vai. Para resumir, nosso objetivo é mostrar que <b>MESMO QUE SE FAÇA MUITAS COISAS, É POSSÍVEL FAZER TUDO COM PERFEIÇÃO.</b>
                </p>
                <a href="#segmentos" class="link-button">
                    Nossos Segmentos
                    <i class="far fa-arrow-down" aria-hidden="true"></i>
                </a>
            </div>
            <div id="empresa-image">
                <img src="{{ asset('images/home/about.jpeg') }}" width="630" height="630" loading="lazy" alt="pessoas sentadas à mesa em reunião " />
            </div>
        </section>

        <section id="segmentos">
            <div>
                <h2>Áreas de Atuação</h2>
                <img src="{{ asset('images/home/slides/initial_slide.png') }}" width="1920" height="160" loading="lazy" />
            </div>
            <p>
                Nós já adiantamos um pouco que somos uma empresa completa, atuando em diversos segmentos, agora vamos apresentar com mais detalhes cada um dos nossos ramos de atuação.
            </p>
            <ul>
                <x-segment-item type="ambiental" />
                <x-segment-item type="financeiro" />
                <x-segment-item type="veiculos" />
                <x-segment-item type="seguranca" />
            </ul>
        </section>

        <section id="equipe">
            <h2>
                Para desempenharmos nossos serviços com qualidade, contamos com profissionais altamente capacitados, especialistas em suas áreas de atuação. Então pode ficar tranquilo(a) e deixar tudo com a gente.
            </h2>
            <ul>
                <x-team-item name="fulano" />
                <x-team-item name="fulano" />
            </ul>
        </section>

        <section id="clientes">
            <div id="clientes-text">
                <h2>Nossos Clientes</h2>
                <p>
                    Nada melhor para mostrar a você, cliente ou possível cliente, que realmente nos comprometemos com nosso <b>atendimento</b>, <b>serviço</b> e <b>suporte</b>, do que apresentar alguns dos muitos clientes que confiam no nossa empresa para a execução de seus serviços, independente da área escolhida.
                </p>
            </div>
            <div id="clientes-logos">
                @for ($i = 0; $i < 4; $i++)
                    <img src="{{ asset('images/logos/casa-nova/icone.png') }}" width="90" height="90" loading="lazy" alt="logo da empresa casa nova empreendimentos" />
                @endfor
            </div>
        </section>

        <section id="contato">
            <div>
                <h2>Fale Conosco</h2>
                <p>
                    Se você deseja conversar com a gente, não perca tempo, entre em contato conosco através de uma das opções abaixo, ou se preferir, deixa uma mensagem no formulário ao lado que entraremos em contato o mais breve possível.
                </p>
                <x-contact-info />
            </div>
            <x-contact-form />
        </section>
    </main>
@endsection