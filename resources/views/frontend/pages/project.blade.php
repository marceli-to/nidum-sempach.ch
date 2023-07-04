@extends('frontend.layout.app')
@section('content')
<section class="page-section is-dark">
  <div class="page-inner">
    <article>
      <h1>Projekt</h1>
      <p>Mit dem Projekt Billroth / Minerva entstehen beim Hegibachplatz an zentraler und dennoch ruhiger Lage im Zürcher Kreis 7 34 attraktive 2.5 – 4.5-Zimmerwohnungen, welche ab 1. September 2022 bezugsbereit sind.</p>
      <p>Die zu einem Ensemble zusammengefügten Gebäude bestechen nicht nur durch eine moderne, sehr ansprechende Aussenwirkung, sondern auch durch einen ausgewogenen Wohnungsmix und einladende Aussenbereiche.</p>
      <p>Der sehr beliebte Kreis 7 ist ein Wohngebiet, das sich über die bewaldeten Hänge des Adlisbergs und des Zürichbergs erstreckt. Die Liegenschaft befindet sich im Quartier Hirslanden unweit des Hegibachplatz, welcher nur wenige Gehminuten entfernt ist. Beim Hegibachplatz verkehren Bus und Tram verschiedener Linien, wie auch die Forchbahn. Der Zürich HB ist innert 10 Minuten erreichbar.</p>  
    </article>
  </div>
</section>
<section class="page-section is-light">
  <div class="page-inner">
    <article class="grid-2x1">
      <div class="span">
        <h1>Wohnungen</h1>
        <p>Beim Ausbau der Wohnungen wurde auf ein architektonisches Gesamtkonzept geachtet. So wurden die Wohnungen schlicht aber dennoch modern in einem gehobenen Ausbaustandard gestaltet.</p>
        <p>Die Wohnungen verfügen über interessante und gut möblierbare Grundrisse. Der hochwertige Ausbaustandard zieht sich durch die gesamte Überbauung, durch die gewählten Farben und Materialien entsteht ein einheitliches Zusammenspiel zwischen Innen- und Aussenwirkung.</p>
        <p>Die modernen Küchen mit Eichenparkett, welches sich optimal in den restlichen Wohnraum einfügt, dunkelroten und weissen Fronten, Glas Abdeckung und wertigen Elektrogeräten der Marke V-Zug lassen keine Wünsche offen.</p>
        <p>Ein harmonisches Wohngefühlt wird dem Wohn-/Essbereich sowie den Schlafzimmern und dem Korridor durch das ausgewählte Eichenparkett verliehen. Jede Wohnung verfügt zudem über einen Sitzplatz, Balkon oder eine Terrasse, welche sich direkt vom Wohnbereich aus betreten lässt.</p>
        <p>Die modernen Bäder sind mit schwarzen Feinsteinzeugbodenplatten sowie hellgrünen und weissen Wandplatten ausgestattet und verfügen über eine Badewanne. Die 4.5-Zimmerwohnungen verfügen zusätzlich über ein zweites Badezimmer mit Dusche. Zudem ist jede Wohnung mit einem eigenen Waschturm ausgestattet.</p>
        <p>Zu jeder Wohnung gehört auch ein Kellerabteil.</p>
        <p><a href="{{ route('page_impressions') }}"><strong>360° Tour ansehen</strong></a></p>
      </div>
      <div class="span">
        <figure class="visual">
          <img src="/assets/media/billroth-minerva-wohnen-4.jpg" width="1200" height="848" alt="Wohnzimmer - Nidum – Zuhause am See">
        </figure>
        <figure class="visual">
          <img src="/assets/media/billroth-minerva-buero-2.jpg" width="1200" height="848" alt="Büro - Nidum – Zuhause am See">
        </figure>
      </div>
    </article>
  </div>
</section>
@endsection