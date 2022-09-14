<section id="other-segments">
  <h2>Conheça nossos outros segmentos</h2>
  <ul>
    @foreach ($segments as $segment)
        <li>
          <a href="{{ $segment['link'] }}">{{ $segment['name'] }}</a>
        </li>
    @endforeach
  </ul>
</section>