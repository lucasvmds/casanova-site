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
            @image('segments/financial/money.jpg', 'alt="mãos segurando dinheiro" width="160" height="160"', 's,m')
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
            @image('segments/financial/mulher-dinheiro.jpg', 'alt="mulher negra feliz segurando dinheiro" width="160" height="160"', 's,m')
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
            @image('segments/financial/maos-dinheiro.jpg', 'alt="mãos segurando dinheiro" width="160" height="160"', 's,m')
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
            @image('segments/financial/maos-trocando-dinheiro.jpg', 'alt="mão de uma pessoa entregando dinheiro para outra" width="160" height="160"', 's,m')
        </section>

        <x-other-segments remove="financeiro" />
    </main>
@endsection