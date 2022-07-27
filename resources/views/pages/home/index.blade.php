@extends('pages.layout.base')
@section('title') Início @endsection

@section('content')
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
@endsection