@extends('pages.layout.base')
@section('title', 'Segurança Privada')

@section('content')
    <main id="segments-page">
        <h1>Segurança Privada</h1>

        <section>
            <div>
                <h2>Segurança Patrimonial</h2>
                <p>
                    O objetivo da segurança patrimonial é manter, as pessoas, bens e patrimônios protegidos. Isso pode ser feito através de diversas maneiras, como:
                </p>
                <ul>
                    <li>Equipe de vigilancia no local;</li>
                    <li>Sistemas eletrônicos de segurança;</li>
                    <li>Rondas motorizadas;</li>
                    <li>Controle  de acesso e outros.</li>
                </ul>
                <p>
                    Nossa empresa atende todos os setores como indústrias, condomínios, residências, empresas, hotéis, comércios, hospitais, universidades, faculdades, escolas, bancos, entre outros.
                </p>
            </div>
            <img src="/images/segments/security/seguranca-patrimonial.jpg" alt="segunranca patrimonial" width="160" height="160" />
        </section>

        <section>
            <div>
                <h2>Escoltas</h2>
                <p>
                    O serviço de escolta tem como principal objetivo proteger pessoas ou bens, assim como na <b>segurança patrimonial</b>, com a diferença de que toda essa proteção é feita através do acompanhamento das pessoas ou bens a serem protegidos. Contamos com profissionais capacitados e experiêmtes para garantir toda a proteção necessária.
                </p>
            </div>
            <img src="/images/segments/security/escolta.jpg" alt="escolta" width="160" height="160" />
        </section>

        <section>
            <div>
                <h2>Controle de Acesso e Eventos</h2>
                <p>
                    Saber quem entra e sai de sua organização ou evento é essencial para manter a segurança das pessoas ali presentes, e isso deve ser feito de forma organizada e de um jeito que não cause problemas ao visitantes. E é aqui que nós entramos.
                </p>
                <p>
                    Nós temos toda uma estrutura de controle tanto de pessoas como itens que circulam durante o acesso a eventos e organizações, agindo de forma preventiva para que os possíveis problemas sejam interceptados antecipadamente.
                </p>
            </div>
            <img src="/images/segments/security/controle-acesso.jpg" alt="controle de acesso" width="160" height="160" />
        </section>

        <x-other-segments remove="seguranca" />
    </main>
@endsection