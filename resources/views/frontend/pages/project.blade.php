@extends('frontend.layout.app')
@section('seo_title', 'Projekt')
@section('content')
<section class="page-section is-dark">
  <div class="page-inner">
    <article>
      <h1>Projekt</h1>
      <div class="sm:grid sm:grid-cols-12 sm:grid-gap">
        <div class="sm:span-6">
          <p>Mit dem Projekt Nidum entstehen an der Hubelstrasse 3a–e an schöner und ruhiger Lage nahe dem Sempachersee 52 attraktive und familienfreundliche 2.5bis 5.5-Zimmerwohnungen, welche ab April (Häuser a, d, e) und Mai (Häuser b, c) 2024 bezugsbereit sind.</p>
          <p>Die fünf Gebäude bestechen nicht nur durch eine moderne, sehr ansprechende Aussenwirkung, sondern auch durch einen ausgewogenen Wohnungsmix und einladende Aussenbereiche.</p>
          <p>Sempach ist durch die idyllische Lage am Sempachersee wie auch die historische Altstadt ein beliebter Wohn- und auch Besuchsort. Der Bahnhof Sempach-Neuenkirch, von wo aus direkte Züge nach Luzern, Zug und Olten verkehren, ist innert wenigen Minuten mit dem Bus erreichbar.</p>
          <p>Zudem ist ein Supermarkt wie auch das Seebad nur wenige Gehminuten von der Liegenschaft entfernt. Das Schulareal von Sempach mit Kindergarten, Primar- und Sekundarschule ist ebenfalls in sicherer Gehdistanz zu erreichen.</p>
          <p>
            <a href="#mobilitaetsangebot" title="Mobilitätsangebot" class="btn-secondary mt-12x">Mobilitätsangebot</a>
          </p>
        </div>
        <figure class="mt-20x sm:mt-0 sm:span-6 visual">
          <picture>
            <source media="(min-width: 900px)" srcset="/assets/media/nidum-sempach-kueche-essen-md.jpg">
            <img src="/assets/media/nidum-sempach-kueche-essen.jpg" 
              alt="Projekt - Nidum Sempach – Zuhause am See" 
              title="Projekt - Nidum Sempach – Zuhause am See" 
              height="900" 
              width="492">
          </picture>
        </figure>
    </article>
  </div>
</section>
<section class="page-section is-light">
  <div class="page-inner">
    <article>
      <h1>Wohnungen</h1> 
      <div class="sm:grid sm:grid-cols-12 sm:grid-gap">
        <div class="sm:span-6">
          <p>Beim Ausbau der Wohnungen wird auf ein architektonisches Gesamtkonzept geachtet. So wurden die Wohnungen schlicht aber dennoch modern in einem gehobenen Ausbaustandard konzipiert. Die Umgebung wird parkähnlich mit viel Grün und Auf- enthaltsflächen sowie Spielplätzen gestaltet.</p>
          <p>Die Wohnungen verfügen über interessante und gut möblierbare Grundrisse. Der hochwertige Ausbaustandard zieht sich durch die gesamte Überbauung, durch die gewählten Farben und Materialien entsteht ein einheitliches Zusammenspiel zwischen Innen- und Aussenwirkung.</p>
          <p>Die modernen Küchen mit taupe farbenen Keramik-Bodenplatten, weissen Schränken mit Eicheneinlagen, weisser Silestone-Abdeckung und wertigen Elektrogeräten der Marke V-Zug, fügen sich optimal in den restlichen Wohnraum ein und lassen keine Wünsche offen.</p>
          <p>Ein harmonisches Wohngefühl wird dem Wohn-/ Essbereich sowie den Schlafzimmern und dem Korridor durch das ausgewählte Fischgrätparkett verliehen. Jede Wohnung verfügt zudem über einen Sitzplatz oder eine Loggia, welche sich direkt vom Wohnbereich aus betreten lässt.</p>
          <p>Die modernen Bäder sind mit Keramikplatten in Taupe ausgestattet und verfügen über eine Dusche oder Badewanne.</p>
          <p>Zudem ist jede Wohnung mit einem eigenen Waschturm im Reduit ausgestattet.</p>
          <p>Zu jeder Wohnung gehört auch ein Kellerabteil.</p>
        </div>
        <div class="sm:span-6">
          <figure class="mt-20x sm:mt-0 sm:span-6 visual">
            <picture>
              <source media="(min-width: 900px)" srcset="/assets/media/nidum-sempach-wohnzimmer-md.jpg">
              <img src="/assets/media/nidum-sempach-wohnzimmer.jpg" 
                alt="Projekt - Nidum Sempach – Zuhause am See" 
                title="Projekt - Nidum Sempach – Zuhause am See" 
                height="900" 
                width="492">
            </picture>
          </figure>
          <figure class="mt-20x sm:mt-0 sm:span-6 visual">
            <picture>
              <source media="(min-width: 900px)" srcset="/assets/media/nidum-sempach-badezimmer-md.jpg">
              <img src="/assets/media/nidum-sempach-badezimmer.jpg" 
                alt="Projekt - Nidum Sempach – Zuhause am See" 
                title="Projekt - Nidum Sempach – Zuhause am See" 
                height="900" 
                width="492">
            </picture>
          </figure>
        </div>
      </div>
    </article>
  </div>
</section>
<section class="page-section is-dark">
  <a name="mobilitaetsangebot"></a>
  <div class="page-inner">
    <article>
      <h1>Mobilitätsstation Nidum</h1>
      <div class="sm:grid sm:grid-cols-12 sm:grid-gap">
        <div class="sm:span-6">
          <strong class="text-beige">Profitieren Sie als Mieter ohne Auto vom Bonusprogramm</strong><br>
          <p>Damit Sie auch ohne eigenes Auto mobil sind, steht Ihnen eine Mobilitätsstation mit einem vielseitigen Sharing-Angebot zur Verfügung. Die gesamte Fahrzeug-Flotte ist elektrisch angetrieben und kann rund um die Uhr über die Trafikpoint-App gebucht werden. Sie bezahlen nur für die Zeit der Nutzung, Abo-Gebühren fallen keine an.</p>
          <p>Die Sharing-Flotte verfügt über folgende Fahrzeu- ge und wird auf den Aussenparkplätzen neben der Tiefgarageneinfahrt stationiert sein:</p>
          <ul>
            <li>1× E-Auto Economy</li>
            <li>1× E-Roller</li>
            <li>1× E-Cargobike</li>
            <li>2× E-Bikes</li>
            <li>Öffentliches Bikesharing Nextbikes</li>
          </ul>
        </div>
    </article>
  </div>
</section>
@endsection