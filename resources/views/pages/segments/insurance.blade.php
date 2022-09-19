@extends('pages.layout.base')
@section('title', 'Corretora de Seguros')

@section('content')
    <main id="segments-page">
        <h1>Corretora de Seguros</h1>

        <section>
            <div>
                <h2>Seguros</h2>
                <p>
                    A vida é cheia de surpresas, mas estar preparado(a) para elas é o que faz a diferença. E a melhor forma de se preparar é através da contratação de um seguro.
                </p>
                <p>
                    Através do seguro, quando um imprevisto acontece, você receberá um valor referente ao serviço contratado para lhe ajudar a passar pelo problema. Nós trabalhamos com diversos tipos de seguros, para citar alguns:
                </p>
                <ul>
                    <li>Seguro imobiliário;</li>
                    <li>Seguro residencial;</li>
                    <li>Seguro para condomínio;</li>
                    <li>Seguro veicular;</li>
                    <li>Seguro para indústrias;</li>
                    <li>Seguro de pessoas e muitos outros.</li>
                </ul>
            </div>
            <img src="/images/segments/financial/seguro.jpg" alt="seguro residencial" width="160" height="160" />
        </section>

        <x-other-segments remove="seguros" />
    </main>
@endsection