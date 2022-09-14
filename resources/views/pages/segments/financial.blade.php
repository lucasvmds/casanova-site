@extends('pages.layout.base')
@section('title', 'Serviços Financeiros')

@section('content')
    <main id="segments-page">
        <h1>Serviços Financeiros</h1>

        <section>
            <div>
                <h2>Crédito Consignado</h2>
                <p>
                    O Crédito consignado é um empréstimo com pagamento indireto, cujas parcelas são deduzidas diretamente da folha de pagamento ou benefício da pessoa física.
                </p>
                <p>
                    Uma forma rápida e fácil de conseguir crédito, para realizar seus planos. Você pode contratar opções que taxas e prazos personalizados. Além de ter a segurança de parcelar direto na folha de pagamento ou aposentadoria.
                </p>
            </div>
            <img src="/images/segments/financial/money.jpg" alt="dinheiro" width="160" height="160" />
        </section>

        <section>
            <div>
                <h2>Crédito Pessoal</h2>
                <p>
                    O crédito pessoal, também conhecido como empréstimo pessoal, é um dinheiro concedido que tem como principal característica a liberdade para a sua utilização.
                </p>
                <p>
                    Na Casa Nova Créditos você terá diversas opções de credito pessoal com as melhores taxas do mercado para escolher aquela que melhor combina com você.
                </p>
            </div>
            <img src="/images/segments/financial/mulher-dinheiro.jpg" alt="mulher dinheiro" width="160" height="160" />
        </section>

        <section>
            <div>
                <h2>Financiamento</h2>
                <p>
                    O financiamento de carro funciona como um empréstimo. Ele é concedido a uma pessoa ou empresa que deseja adquirir um veículo novo, seminovo ou usado e não tem dinheiro suficiente para comprá-lo à vista ou dar uma entrada significativa.
                </p>
                <p>
                    Na Casa Nova Créditos você terá diversas opções de bancos com as melhores taxas do financiamento do mercado para facilitar que você realize seu sonho do carro próprio.
                </p>
            </div>
            <img src="/images/segments/financial/maos-dinheiro.jpg" alt="mãos dinheiro" width="160" height="160" />
        </section>

        <section>
            <div>
                <h2>Refinanciamento</h2>
                <p>
                    O refinanciamento é uma oportunidade de organizar sua vida financeira, colocando seu veículo como garantia para um novo empréstimo.
                </p>
                <p>
                    Na Casa Nova Créditos você terá diversas opções de bancos com as melhores taxas do refinanciamento do mercado.
                </p>
            </div>
            <img src="/images/segments/financial/maos-trocando-dinheiro.jpg" alt="maos trocando dinheiro" width="160" height="160" />
        </section>

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

        <x-other-segments remove="financeiro" />
    </main>
@endsection