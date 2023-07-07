<div class="apartements-group grid-apartements">
  <div class="span">
    <div data-iso-wrapper>
      @include('frontend.partials.apartments.building-a')
      @include('frontend.partials.apartments.building-b')
      @include('frontend.partials.apartments.building-c')
      @include('frontend.partials.apartments.building-d')
      @include('frontend.partials.apartments.building-e')
      <div data-iso-overview>
        @include('frontend.partials.apartments.buildings-all')
      </div>
    </div>
  </div>
  <div class="span">
    <h2 class="apartements-title">Hubelstrasse 3a–e</h2>
    <table class="apartements" data-iso-list>
      <thead>
        <th>Nr.</th>
        <th>Etage</th>
        <th>Zimmer</th>
        <th>HNF/m<sup>2</sup></th>
        <th class="align-right hide-mobile">Netto MZ/Mt.</th>
        <th class="align-right hide-mobile">HK/NK</th>
        <th class="align-right">Brutto MZ/Mt.</th>
        <th class="align-right">
          <span class="hide-md">PDF</span>
          <span class="hide-sm">Grundriss</span>
        </th>
        <th class="is-last">
          <span class="hide-sm">Anmeldung</span>
        </th>
      </thead>
      <tbody>
        @foreach($apartements as $a)
          <tr 
            data-iso-list-item 
            data-number="{{ AppHelper::sanitizeApartmentTitle($a['title']) }}" 
            data-floor="{{ AppHelper::sanitizeApartmentFloor($a['floor']) }}"
            data-building="{{ AppHelper::sanitizeApartmentBuilding($a['building']['building_title']) }}"
            data-state="{{ $a['object_state'] }}"
            data-rooms="{{ $a['rooms'] }}"
            data-plan="/assets/media/nidum-sempach-{{ AppHelper::sanitizeApartmentTitle($a['title']) }}.pdf">
            <td>{{ $a['title'] }}</td>
            <td>{{ $a['floor'] }}</td>
            <td>{{ $a['rooms'] }}</td>
            <td>{{ $a['area'] }}</td>
            <td class="align-right hide-mobile">
              @if ($a['object_state'] != 'free')
               –
              @else
                {{ AppHelper::apartmentCostsToDecimal($a['rentalgross_net']) }}
              @endif
            </td>
            <td class="align-right hide-mobile">
              @if ($a['object_state'] != 'free')
               –
              @else
                {{ AppHelper::apartmentCostsToDecimal($a['rentalgross'] - $a['rentalgross_net']) }}
              @endif
            </td>
            <td class="align-right">
              @if ($a['object_state'] == 'rented')
                reserviert
              @elseif ($a['object_state'] == 'reserved')
                vermietet
              @else
                {{ AppHelper::apartmentCostsToDecimal($a['rentalgross']) }}
              @endif
            </td>
            <td class="align-right apartement-download">
              <a href="/assets/media/nidum-sempach-{{ AppHelper::sanitizeApartmentTitle($a['title']) }}.pdf" target="_blank" title="Download Grundriss {{ $a['title'] }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 142"><path d="M99.9,125.1H0v16.6H99.9ZM98.2,58.8a6.4,6.4,0,0,0-9.2,0L56.4,91.3V6.6a6.6,6.6,0,1,0-13.1,0V91.3L11.2,59.2a6.7,6.7,0,0,0-9.3,0,6.7,6.7,0,0,0,0,9.3l43.3,43.3.5.4c.1.1.2.1.2.2l.3.2.3.2h.3l.3.2h5.5l.3-.2h.3l.3-.2.3-.2.2-.2.7-.6.2-.2L98.2,68.1a6.5,6.5,0,0,0,0-9.3" fill="currentColor" /></svg>
              </a>
            </td>
            <td class="align-right is-last">
              <a href="{{ $a['application_form'] }}" target="_blank" class="btn-register">Formular</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>