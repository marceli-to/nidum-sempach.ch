@extends('frontend.layout.app')
@section('seo_title', 'Angebot')
@section('content')
<section class="page-section is-dark">
  <div class="page-inner">
    <article>
      <h1>Angebot Wohnen</h1>
      <p>Zurzeit sind keine freien Wohnungen verfügbar.</p>
      {{-- <form class="apartment-form">
        <div class="sm:grid sm:grid-cols-12 sm:grid-column-gap">
          <div class="sm:span-3">
            <div class="form-row">
              <label class="is-title">Verfügbarkeit</label>
              <div class="select-wrapper">
                <select data-filter-type="state" class="js-filter-select">
                  <option value="NULL">Alle Wohnungen</option>
                  <option value="free">frei</option>
                  <option value="rented">reserviert</option>
                  <option value="reserved">vermietet</option>
                </select>
              </div>
            </div>
          </div>
          <div class="sm:span-3">
            <div class="form-row">
              <label class="is-title">Zimmer</label>
              <div class="select-wrapper">
                <select data-filter-type="rooms" class="js-filter-select">
                  <option value="NULL">Alle Zimmer</option>
                  <option value="2.5">2.5</option>
                  <option value="3.5">3.5</option>
                  <option value="4.5">4.5</option>
                  <option value="5.5">5.5</option>
                </select>
              </div>
            </div>
          </div>
          <div class="sm:span-3">
            <div class="form-row">
              <label class="is-title">Haus</label>
              <div class="select-wrapper">
                <select data-filter-type="building" class="js-filter-select">
                  <option value="NULL">Alle Häuser</option>
                  <option value="a">A</option>
                  <option value="b">B</option>
                  <option value="c">C</option>
                  <option value="d">D</option>
                  <option value="e">E</option>
                </select>
              </div>
            </div>
          </div>
          <div class="sm:span-3">
            <div class="form-row">
              <label class="is-title">Etage</label>
              <div class="select-wrapper">
                <select data-filter-type="floor" class="js-filter-select">
                  <option value="NULL">Alle Etagen</option>
                  <option value="eg">EG</option>
                  <option value="1.og">1. OG</option>
                  <option value="2.og">2. OG</option>
                  <option value="3.og">3. OG</option>
                </select>
              </div>
            </div>
          </div>
          <div class="sm:span-3">
            <div>
              <a href="javascript:;" class="btn-primary is-reset js-btn-reset">
                <span>Filter zurücksetzen</span>
              </a>
            </div>
          </div>
        </div>
      </form>

      <div class="apartment-details js-object-detail-wrapper">
        <h3 data-object-detail-number></h3>
        <span data-object-detail></span>
        <div>
          <div data-object-iso-wrapper>
            @include('frontend.partials.apartments.building-a')
            @include('frontend.partials.apartments.building-b')
            @include('frontend.partials.apartments.building-c')
            @include('frontend.partials.apartments.building-d')
            @include('frontend.partials.apartments.building-e')
          </div>
          <div data-object-iso-overview>
            @include('frontend.partials.apartments.buildings-all')
          </div>
        </div>
      </div>

      <div class="apartements-selection js-selection-wrapper" style="display:none">
        <div>
          <h2>Ihre Auswahl</h2>
          <table class="apartements apartements--selection">
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
            <tbody class="js-selection-table">
            </tbody>
          </table>
          <a href="javascript:;" class="btn-selection js-selection-clear">Auswahl löschen</a>
          <a href="javascript:;" class="btn-selection is-hide js-selection-hide">Auswahl verbergen</a>
        </div>
      </div>
      @include('frontend.partials.apartments.apartments') --}}
    </article>
  </div>
</section>
@endsection