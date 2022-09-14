@extends('pages.layout.base')
@section('title', 'Compra e Venda de Veículos')

@section('content')
    <main id="segments-page">
        <h1>Compra e Venda de Veículos</h1>

        <section>
            <div>
                <h2>Nossos Serviços</h2>
                <p>
                    A Casa Nova Veículos trabalha para te oferecer as melhores oportunidades na hora de comprar ou vender o seu veículo. Seja na hora de realizar o sonho do carro próprio, ou na hora de trocar por um carro mais novo, e até mesmo na hora de comprar um veículo pra sua empresa.
                </p>
                <p>
                    Nós trabalhamos com:
                </p>
                <ul>
                    <li>Compra;</li>
                    <li>Venda e venda consignada;</li>
                    <li>Financiamento e refinanciamento.</li>
                </ul>
                <p>
                    Além disso, contamos com diversas formas de te ajudar na hora de comprar seu veículos, graças a <a href="/servicos-financeiros"><b>Casa Nova Créditos</b></a> com diversas opções de credito para você! 
                </p>
            </div>
            <img src="/images/segments/vehicles/compra-carro.jpg" alt="comprando carro" width="160" height="160" />
        </section>

        <x-other-segments remove="veiculos" />
    </main>
@endsection