@extends('frontend.layout.app')
@section('content')
<x-swiper>
  <x-swiper.slide :image="'nidum-sempach-aussen-1'" :alt="''" />
  <x-swiper.slide :image="'nidum-sempach-aussen-2'" :alt="''" />
  <x-swiper.slide :image="'nidum-sempach-kueche-essen'" :alt="''" />
  <x-swiper.slide :image="'nidum-sempach-wohnen-essen'" :alt="''" />
</x-swiper>
<section class="page-section is-dark">
  <div class="page-inner">
    <article>
      <h1>Naturnah wohnen am Sempachersee</h1>
      <p>Mit dem Projekt Nidum entstehen an der Hubelstrasse 3a–e an schöner und ruhiger Lage nahe dem Sempachersee 52 attraktive und familienfreundliche 2.5 bis 5.5-Zimmerwohnungen, welche ab Frühling 2024 bezugsbereit sind.</p>
      <p>Sempach ist durch die idyllische Lage am Sempachersee wie auch die historische Altstadt ein beliebter Wohn- und auch Besuchsort. Der Bahnhof Sempach-Neuenkirch von wo aus direkte Züge nach Luzern, Zug und Olten verkehren ist innert wenigen Minuten mit dem Bus erreichbar.</p>
    </article>
  </div>
</section>
<section class="page-section is-light">
  <div class="page-inner">
    <article class="grid grid-cols-12">
      <div class="span-8 xs:span-9 md:span-8">
        <h1>SNBS-Zertifizierung</h1>
        <p>Die Wohnsiedlung Nidum hat die erste Konformitätsprüfung bestanden und ist somit provisorisch mit einer SNBS-Zertifizierung (Standard Nachhaltiges Bauen Schweiz) ausgezeichnet worden.</p>
      </div>
      <div class="span-4 xs:span-3 md:span-2">
        <img src="/assets/img/snbs-zertifizierung.png" width="350" height="350" class="is-responsive" alt="SNBS-Zertifizierung">
      </div>
    </article>
  </div>
</section>
@endsection