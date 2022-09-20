<form id="contact-form" method="POST" action="{{ route('home.send') }}" class="contact-form-component">
  @csrf

  @if (session('message_sent'))
      <b id="contact-form-message">
        Mensagem enviada com sucesso
      </b>
  @endif

  <div>
    <input type="text" size="60" placeholder="Seu nome" name="name" value="{{ old('name') }}" required />
    @error('name')
        <br />
        <small>{{ $message }}</small>
    @enderror
  </div>

  <div>
    <input type="tel" placeholder="Telefone com DDD" name="phone" value="{{ old('phone') }}" required />
    @error('phone')
        <br />
        <small>{{ $message }}</small>
    @enderror
  </div>

  <div>
    <input type="email" size="60" placeholder="E-Mail" name="email" value="{{ old('email') }}" required />
    @error('email')
        <br />
        <small>{{ $message }}</small>
    @enderror
  </div>

  <div>
    <textarea placeholder="Mensagem" rows="15" name="message_content" required>{{ old('message_content') }}</textarea>
    @error('message_content')
        <br />
        <small>{{ $message }}</small>
    @enderror
  </div>

  <button type="submit">Enviar mensagem</button>
</form>