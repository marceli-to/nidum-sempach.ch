@extends('frontend.layout.app')
@section('content')
<section class="page-section is-dark">
  <div class="page-inner">
    <article>
      <h1> 360 Grad Tour</h1>
      <div class="aspect-ratio">
        <iframe src="https://360.casatour.ch/view/fullscreen/id/VVMZN" width="100%" height="300"></iframe>
      </div>
    </article>
    <article class="grid-2x1">
      <div class="span">
        <figure class="visual is-gallery">
          <img src="/assets/media/billroth-minerva-wohnen-4.jpg" width="1200" height="848" alt="Wohnzimmer - Nidum – Zuhause am See">
        </figure>
        <figure class="visual is-gallery">
          <img src="/assets/media/billroth-minerva-schlafzimmer-1.jpg" width="1200" height="848" alt="Schlafzimmer - Nidum – Zuhause am See">
        </figure>
      </div>
      <div class="span">
        <figure class="visual is-gallery">
          <img src="/assets/media/billroth-minerva-buero-2.jpg" width="1200" height="848" alt="Büro - Nidum – Zuhause am See">
        </figure>
        <figure class="visual is-gallery">
          <img src="/assets/media/billroth-minerva-kueche-3.jpg" width="1200" height="848" alt="Wohnen/Essen - Nidum – Zuhause am See">
        </figure>
      </div>
      <div class="span">
        <figure class="visual is-gallery">
          <img src="/assets/media/billroth-minerva-bad-5.jpg" width="1200" height="848" alt="Badezimmer - Nidum – Zuhause am See">
        </figure>
      </div>
    </article>
  </div>
</section>
@endsection