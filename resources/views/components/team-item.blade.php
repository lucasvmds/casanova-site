<li>
  @isset($logo)
      @image("home/team/$logo", 'alt="'.$logo_alt.'" width="32" height="32" loading="lazy"', 's')
  @endisset
  <h3>{{ $name }}</h3>
  <dl>
    <dt>Profissão</dt>
    <dd>
      <b>{{ $profession }}</b>
    </dd>
    @isset ($code)
      <dt>Identificação</dt>
      <dd>{{ $code }}</dd>
    @endisset
  </dl>

</li>