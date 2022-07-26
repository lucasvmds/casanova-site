<div class="slide-text-container">
  <h2>
    <span>{{ $title[0] }}</span>
    {{ $title[1] }}
  </h2>
  <p>
    {{ $content }}
  </p>
  <a href="{{ $link }}" class="link-button">
    Saiba Mais
    <i class="far fa-arrow-down" aria-hidden="true"></i>
  </a>
</div>
<img src="{{ asset($image) }}" width="1094" height="769" loading="lazy" />