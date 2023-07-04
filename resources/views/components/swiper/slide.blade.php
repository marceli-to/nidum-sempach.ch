@props(['image', 'alt'])
<div class="swiper-slide">
  <figure>
    <picture>
      <source media="(min-width: 1600px)" srcset="/assets/media/{{ $image }}-xl.jpg">        
      <source media="(min-width: 1200px)" srcset="/assets/media/{{ $image }}-lg.jpg">        
      <source media="(min-width: 768px)" srcset="/assets/media/{{ $image }}-md.jpg">
      <source srcset="/assets/media/{{ $image }}.jpg">
      <img src="/assets/media/{{ $image }}.jpg" alt="{{ $alt }}" title="{{ $alt }}" height="1600" width="900">
    </picture>
  </figure>
</div>