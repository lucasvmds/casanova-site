<p>
    Mensagem recebida do formulário de contato do site em {{ now('-03:00')->format('d/m/Y à\s H:i') }}
</p>
<dl>
    <dt>
        <b>Nome:</b>
    </dt>
    <dd>{{ $name }}</dd>
    <dt>
        <b>E-Mail:</b>
    </dt>
    <dd>{{ $email }}</dd>
    <dt>
        <b>Telefone:</b>
    </dt>
    <dd>{{ $phone }}</dd>
</dl>
<p>{{ $message_content }}</p>