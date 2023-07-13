@extends('frontend.layout.app')
@section('seo_title', 'Kontakt')
@section('content')
<section class="page-section is-light">
  <div class="page-inner">
    @if (isset($showAlert))
      <div class="alert-success ">
        <p>Vielen Dank für Ihr Interesse an einer Wohnung in der Liegenschaft Nidum Sempach – Zuhause am See.</p>
        <p>Wir werden Ihre Anfrage so schnell als möglich bearbeiten.</p>
      </div>
    @endif
    <article>
      <h1>Kontakt</h1>
      <p>Haben wir Ihr Interesse geweckt?</p>
      <p>Gerne stehen wir für Fragen zur Verfügung und freuen uns auf Ihre Kontaktaufnahme.</p>
      <form method="POST" action="{{ route('page_contact_subscribe') }}" class="contact-form js-validate">
        @csrf
        <x-honeypot />
        <p><strong>Ich interessiere mich für folgende Wohnungen (bitte auswählen):</strong></p>
        @if ($errors->has('interest'))
          <div class="error-message mt-10x mb-2x">{{ $errors->first('interest') }}</div>
        @else
          <div class="error-message mt-10x mb-2x js-error-interest" style="display:none">Bitte mind. 1 Option auswählen</div>
        @endif
        <div class="mt-10x sm:grid sm:grid-cols-12 sm:grid-column-gap">
          <div class="sm:span-6 xs:grid xs:grid-cols-12 xs:grid-column-gap">
            <div class="mt-5x xs:mt-0 xs:span-6">
              <div class="form-control">
                <input type="checkbox" name="interest[]" value="2.5 Zi" id="interest-2.5" data-rules="required|check_one[interest]">
                <label for="interest-2.5">2.5-Zimmerwohnung</label>
              </div>
            </div>
            <div class="mt-5x xs:mt-0 xs:span-6">
              <div class="form-control">
                <input type="checkbox" name="interest[]" value="3.5 Zi" id="interest-3.5" data-rules="required|check_one[interest]">
                <label for="interest-3.5">3.5-Zimmerwohnung</label>
              </div>
            </div>
            <div class="mt-5x xs:mt-0 xs:span-6">
              <div class="form-control">
                <input type="checkbox" name="interest[]" value="4.5 Zi" id="interest-4.5" data-rules="required|check_one[interest]">
                <label for="interest-4.5">4.5-Zimmerwohnung</label>
              </div>
            </div>
            <div class="mt-5x xs:mt-0 xs:span-6">
              <div class="form-control">
                <input type="checkbox" name="interest[]" value="5.5 Zi" id="interest-5.5" data-rules="required|check_one[interest]">
                <label for="interest-5.5">5.5-Zimmerwohnung</label>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-20x sm:grid sm:grid-cols-12 sm:grid-gap">
          <div class="mt-15x sm:mt-0 sm:span-6 relative">
            @if ($errors->has('firstname'))
              <div class="error-message is-floating">{{ $errors->first('firstname') }}</div>
            @else 
              <div class="error-message is-floating" style="display:none">Vorname muss ausgefüllt sein!</div>
            @endif
            <input type="text" name="firstname" placeholder="Vorname *" data-rules="required">
          </div>
          <div class="mt-15x sm:mt-0 sm:span-6 relative">
            @if ($errors->has('name'))
              <div class="error-message is-floating">{{ $errors->first('name') }}</div>
            @else 
              <div class="error-message is-floating" style="display:none">Name muss ausgefüllt sein!</div>
            @endif
            <input type="text" name="name" placeholder="Name *" data-rules="required">
          </div>
          <div class="mt-15x sm:mt-0 sm:span-6 relative">
            @if ($errors->has('street'))
              <div class="error-message is-floating">{{ $errors->first('street') }}</div>
            @else 
              <div class="error-message is-floating" style="display:none">Strasse/Nr. muss ausgefüllt sein!</div>
            @endif
            <input type="text" name="street" placeholder="Strasse / Nr *" data-rules="required">
          </div>
          <div class="mt-15x sm:mt-0 sm:span-6 relative">
            @if ($errors->has('location'))
              <div class="error-message is-floating">{{ $errors->first('location') }}</div>
            @else 
              <div class="error-message is-floating" style="display:none">PLZ/Ort muss ausgefüllt sein!</div>
            @endif
            <input type="text" name="location" placeholder="PLZ/Ort *" data-rules="required">
          </div>
          <div class="mt-15x sm:mt-0 sm:span-6 relative">
            @if ($errors->has('email'))
              <div class="error-message is-floating">{{ $errors->first('email') }}</div>
            @else 
              <div class="error-message is-floating" style="display:none">E-Mail-Adresse muss gültig sein!</div>
            @endif
            <input type="text" name="email" placeholder="E-Mail *" data-rules="required|valid_email">
          </div>
          <div class="mt-15x sm:mt-0 sm:span-6 relative">
            <input type="text" name="phone" placeholder="Telefon">
          </div>
          <div class="mt-15x sm:mt-0 sm:span-6 relative">
            <textarea name="remarks" placeholder="Mitteilung"></textarea>
          </div>
          <div class="mt-15x sm:span-12 relative">
            @if ($errors->has('privacy'))
              <div class="error-message mb-15x">{{ $errors->first('privacy') }}</div>
            @else
              <div class="error-message mb-15x js-error-privacy" style="display:none">Bitte Datenschutzerklärung akzeptieren</div>
            @endif
            <div class="form-control">
              <input type="checkbox" name="privacy" value="1" id="privacy" data-rules="required|check[privacy]">
              <label for="privacy">
                <span class="text">Ich habe die <a href="{{ route('page_privacy') }}" target="_blank">Datenschutzerklärung</a> gelesen und akzeptiere diese.</span>
              </label>
            </div>
          </div>
          <div class="mt-15x sm:mt-5x sm:span-12">
            <input type="submit" value="Absenden" class="btn-secondary is-dark js-btn-submit">
          </div>
        </div>
      </form>
    </article>
  </div>
</section>
@endsection