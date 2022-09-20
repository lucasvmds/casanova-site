@extends('pages.layout.base')
@section('title', 'Segurança Privada')

@section('content')
    <main id="segments-page">
        <h1>Segurança Privada</h1>

        <section>
            <div>
                <h2>O Negócio</h2>
                <p>
                    Quando se busca por este tipo de serviço, acredita-se que ele deva ser realizado por equipes treinadas e capacitadas para lidar com diferentes tipos de demanda, não é mesmo? Por isso, pesquise no mercado e opte por uma empresa de segurança responsável e com credibilidade no setor. É imprescindível que o serviço seja feito de forma integrada e personalizada para você.
                </p>
                <p>
                    Nossa empresa atende todos os setores como indústrias, condomínios e residências, empresas, hotéis, comércios, hospitais, universidades, faculdades, escolas, bancos, entre outros.
                </p>
            </div>
            @image('segments/security/seguranca-patrimonial.jpg', 'alt="homem fazendo o monitoramento do sistema de câmeras" width="160" height="160"', 's,m')
        </section>

        <section>
            <div>
                <h2>Qualidades</h2>
                <p>
                    Infelizmente, nos dias de hoje enfrenta-se problemas de segurança, portanto uma empresa de segurança patrimonial oferece serviços para proteção. Entre as características destacam-se as seguintes:
                </p>
                <ul>
                    <li>Confiança;</li>
                    <li>Experiência;</li>
                    <li>Exclusividade no atendimento;</li>
                    <li>Responsabilidade.</li>
                </ul>
            </div>
            @image('segments/security/escolta.jpg', 'alt="homens realizando a escolta de cliente saindo do carro" width="160" height="160"', 's,m')
        </section>

        <section>
            <div>
                <h2>Serviços</h2>
                <p>
                    Com estas qualidades, a Casa Nova Segurança assegurará a eficácia de suas soluções. Entre as atividades prestadas, controle dos acessos para monitorar as entradas e saídas do local, e vigilância.
                </p>
                <ul>
                    <li>Segurança patrimonial;</li>
                    <li>Escoltas;</li>
                    <li>Controle de acesso e eventos.</li>
                </ul>
            </div>
            @image('segments/security/controle-acesso.jpg', 'alt="pessoa realizando revista em outra pessoa para controle de acesso" width="160" height="160"', 's,m')
        </section>

        <x-other-segments remove="seguranca" />
    </main>
@endsection