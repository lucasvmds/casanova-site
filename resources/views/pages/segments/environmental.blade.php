@extends('pages.layout.base')
@section('title', 'Serviços Ambientais')

@section('content')
    <main id="segments-page">
        <h1>Serviços Ambientais</h1>

        <section>
            <div>
                <h2>Controle de Pragas</h2>
                <p>
                    O Controle de Pragas é uma ação que elimina e impede a proliferação de animais indesejados em ambientes com grande circulação de pessoas. A realização desta medida atua na prevenção de doenças, no entanto, quando feita de maneira incorreta, pode acarretar outros problemas para a saúde, além de ameaçar o meio ambiente.
                </p>
                <p>
                    Nós atuamos no manejo ecológico de pragas para indústrias e empresas, com práticas preventivas no combate às pragas urbanas. Os resultados são imediatos e em longo prazo, com segurança para os processos produtivos, pessoas e com baixo impacto ambiental.
                </p>
            </div>
            @image('segments/environmental/pragas.jpg', 'alt="desenho com várias pragas urbanas" width="160" height="160"', 's,m')
        </section>

        <section>
            <div>
                <h2>Controle de Pragas Urbanas</h2>
                <p>
                    Os animais, assim como quaisquer outros seres vivos, estão inseridos em um contexto ecológico, desempenhando importante papel no equilíbrio dos ecossistemas. Porém, em função da urbanização, muitos desses seres foram para as cidades, e se tornaram pragas - por estarem presente em grandes números e serem indesejáveis -, sendo que se destacam ss que podem causar danos à saúde do ser humano e outros animais. Dentre os mais comuns estão:
                </p>
                <ul>
                    <li>Controle de pombos;</li>
                    <li>Desratização (roedores);</li>
                    <li>Descupinização (cupins);</li>
                    <li>Morcegos;</li>
                    <li>Baratas, formigas e outros insetos indesejáveis;</li>
                    <li>Aranhas, carrapatos e escorpiões;</li>
                    <li>Lacrais.</li>
                </ul>
            </div>
            @image('segments/environmental/pragas-pombos.jpg', 'alt="pombos juntos em marquise da construção na cidade" width="160" height="160"', 's,m')
        </section>

        <section>
            <div>
                <h2>Sanitização de Ambientes</h2>
                <p>
                    A sanitização é um processo de higienização e eliminação de agentes patogênicos causadores de doenças infecciosas, como vírus, bactérias, ácaros e fungos. Ela é feita através da aplicação de produtos seguros que destroem a maioria desses agentes. E claro, é totalmente seguro aos seres humanos e outros animais.
                </p>
                <p>
                    A sanitização deve ser realizada periodicamente e é recomendada em ambientes fechados ou onde há aglomeração de pessoas que possam estar muito próximas uma  das outras, ajudando a previnir algumas doenças e tornando os ambientes mais saudáveis.
                </p>
                <p>
                    Ela tem sido usada fortemente no combate ao Corona Vírus (Covid19).
                </p>
            </div>
            @image('segments/environmental/sanitizacao.jpg', 'alt="pessoas fazendo a sanitização de uma casa/empresa" width="160" height="160"', 's,m')
        </section>

        <section>
            <div>
                <h2>Mais Serviços</h2>
                <p>
                    Até agora, você viu apenas alguns dos serviços que prestamos nesse segmento.
                </p>
                <p>
                    Tirando eles, nós ainda temos uma gama de serviços que podem ajudar você e/ou sua empresa:
                </p>
                <ul>
                    <li>Serviço de limpeza geral;</li>
                    <li>Poda de arvores e jardinagem;</li>
                    <li>Serviço de desentupimento;</li>
                    <li>Limpeza de fossa.</li>
                </ul>
            </div>
            @image('segments/environmental/poda.jpg', 'alt="homem fazendo a poda de auma árvore" width="160" height="160"', 's,m')
        </section>

        <x-other-segments remove="ambiental" />
    </main>
@endsection