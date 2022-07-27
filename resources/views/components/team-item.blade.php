<li>
  <img src="{{ asset($image) }}" alt="foto do integrante da equipe {{ $name }}" width="130" height="220" loading="lazy" />
  <h3>{{ $name }}</h3>
  <span>{{ $profession }}</span>
  <ul>
    @foreach ($formations as $formation)
        <li>{{ $formation }}</li>
    @endforeach
  </ul>
</li>