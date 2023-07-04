@extends('frontend.layout.app')
@section('content')
<section class="page-section is-dark">
  <div class="page-inner">
    <article>
      <h1>Angebot Wohnen</h1>
      <p>
        <a href="/assets/media/download-facts-figures-billroth-minerva.pdf" target="_blank">
          <strong>Download Facts & Figures [PDF]</strong>
        </a>
      </p>
      <form class="apartment-form">
        <div class="grid-4x1">
          <div class="span">
            <div class="form-row">
              <label class="is-title">Verfügbarkeit</label>
              <div class="select-wrapper">
                <select data-filter-type="state" class="js-filter-select">
                  <option value="NULL">Alle Wohnungen</option>
                  <option value="1">frei</option>
                  <option value="2">reserviert</option>
                  <option value="3">vermietet</option>
                </select>
              </div>
            </div>
          </div>
          <div class="span">
            <div class="form-row">
              <label class="is-title">Zimmer</label>
              <div class="select-wrapper">
                <select data-filter-type="rooms" class="js-filter-select">
                  <option value="NULL">Alle Zimmer</option>
                  <option value="2.5">2.5</option>
                  <option value="3.5">3.5</option>
                  <option value="4.5">4.5</option>
                </select>
              </div>
            </div>
          </div>
          <div class="span">
            <div class="form-row">
              <label class="is-title">Etage</label>
              <div class="select-wrapper">
                <select data-filter-type="floor" class="js-filter-select">
                  <option value="NULL">Alle Etagen</option>
                  <option value="1">EG</option>
                  <option value="2">1. OG</option>
                  <option value="3">2. OG</option>
                  <option value="4">3. OG</option>
                  <option value="5">4. OG</option>
                  <option value="6">5. OG</option>
                </select>
              </div>
            </div>
          </div>
          <div class="span">
            <div class="form-row form-row--button">
              <div>
                <a href="javascript:;" class="btn-primary js-btn-reset">
                  <span>Filter zurücksetzen</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </form>

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

      @include('frontend.partials.buildings.billrothweg')
      @include('frontend.partials.buildings.minervastrasse')
    </article>
  </div>
</section>
@endsection