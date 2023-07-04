@extends('frontend.layout.app')
@section('content')
<section class="page-section is-dark">
  <div class="page-inner">
    @if (isset($showAlert))
      <div class="alert-success ">
        <p>Vielen Dank für Ihr Interesse an einer Wohnung in der Liegenschaft Nidum – Zuhause am See.</p>
        <p>Wir werden Ihre Anfrage so schnell als möglich bearbeiten.</p>
      </div>
    @endif
    <article class="grid-2x1">
      <div class="span">
        <h1>Kontakt</h1>
        <p>Haben wir Ihr Interesse geweckt?</p>
        <p>Gerne stehen wir für Fragen zur Verfügung und freuen uns auf Ihre Kontaktaufnahme.</p>
        <div class="grid-2x1">
          <div class="span">
            <h3>Kontaktperson</h3>
            {{-- <p>APLEONA SCHWEIZ AG<br>Industriestrasse 21<br>8304 Wallisellen</p> --}}
            <p>Frau Chantal Bieri<br>044 878 77 77<br><a href="mailto:mieten@apleona.com">mieten@apleona.com</a></p>
          </div>
        </div>
      </div>
    </article>
  </div>
</section>
<section class="page-section is-light">
  <div class="page-inner">
    <article>
      <h1>Kontaktformular</h1>
      <form method="POST" action="{{ route('page_contact_subscribe') }}" class="contact-form js-validate">
        @csrf
        <p>Ich interessiere mich für folgende Wohnungen (bitte auswählen):</p>
        <div class="form-controls">
          @if ($errors->has('interest'))
            <div class="error-message">{{ $errors->first('interest') }}</div>
          @else
            <div class="error-message" style="display:none">Bitte mind. 1 Option auswählen</div>
          @endif
            <div class="form-controls__grid">
              <div class="span">
                <div class="form-control">
                  <input type="checkbox" name="interest[]" value="2.5 Zi" id="interest-2.5" data-rules="required|check_one[interest]">
                  <label for="interest-2.5">2.5-Zimmerwohnung</label>
                </div>
              </div>
              <div class="span">
                <div class="form-control">
                  <input type="checkbox" name="interest[]" value="3.5 Zi" id="interest-3.5" data-rules="required|check_one[interest]">
                  <label for="interest-3.5">3.5-Zimmerwohnung</label>
                </div>
              </div>
              <div class="span">
                <div class="form-control">
                  <input type="checkbox" name="interest[]" value="4.5 Zi" id="interest-4.5" data-rules="required|check_one[interest]">
                  <label for="interest-4.5">4.5-Zimmerwohnung</label>
                </div>
              </div>
          </div>
        </div>
        <div class="form-input">
          <div class="form-input__grid">
            <div class="span">
              @if ($errors->has('firstname'))
                <div class="error-message is-floating">{{ $errors->first('firstname') }}</div>
              @else 
                <div class="error-message is-floating" style="display:none">Vorname muss ausgefüllt sein!</div>
              @endif
              <input type="text" name="firstname" placeholder="Vorname *" data-rules="required">
            </div>
            <div class="span">
              @if ($errors->has('name'))
                <div class="error-message is-floating">{{ $errors->first('name') }}</div>
              @else 
                <div class="error-message is-floating" style="display:none">Name muss ausgefüllt sein!</div>
              @endif
              <input type="text" name="name" placeholder="Name *" data-rules="required">
            </div>
            <div class="span">
              @if ($errors->has('street'))
                <div class="error-message is-floating">{{ $errors->first('street') }}</div>
              @else 
                <div class="error-message is-floating" style="display:none">Strasse/Nr. muss ausgefüllt sein!</div>
              @endif
              <input type="text" name="street" placeholder="Strasse / Nr *" data-rules="required">
            </div>
            <div class="span">
              @if ($errors->has('zip'))
                <div class="error-message is-floating">{{ $errors->first('zip') }}</div>
              @else 
                <div class="error-message is-floating" style="display:none">Postleitzahl muss ausgefüllt sein!</div>
              @endif
              <input type="text" name="zip" placeholder="PLZ *" data-rules="required">
            </div>
            <div class="span">
              @if ($errors->has('city'))
                <div class="error-message is-floating">{{ $errors->first('city') }}</div>
              @else 
                <div class="error-message is-floating" style="display:none">Ort muss ausgefüllt sein!</div>
              @endif
              <input type="text" name="city" placeholder="Ort *" data-rules="required">
            </div>
            <div class="span">
              @if ($errors->has('email'))
                <div class="error-message is-floating">{{ $errors->first('email') }}</div>
              @else 
                <div class="error-message is-floating" style="display:none">E-Mail-Adresse muss gültig sein!</div>
              @endif
              <input type="text" name="email" placeholder="E-Mail *" data-rules="required|valid_email">
            </div>
            <div class="span">
              <input type="text" name="phone" placeholder="Telefon">
            </div>
            <div class="span">
              <textarea name="remarks" placeholder="Mitteilung"></textarea>
            </div>
          </div>
          <input type="submit" value="Absenden" class="js-btn-submit">
        </div>
      </form>
    </article>
    {{-- <article>
      <h1>Kontaktformular</h1>
      <form method="POST" action="/subscribe" class="contact-form js-validate">
        @csrf
        <p>Ich interessiere mich für folgende Wohnungen (bitte auswählen):</p>
        <div class="form-controls">
          @if ($errors->has('interest'))
            <div class="error-message">{{ $errors->first('interest') }}</div>
          @else
            <div class="error-message" style="display:none">Bitte mind. 1 Option auswählen</div>
          @endif
            <div class="form-controls__grid">
              <div class="span">
                <div class="form-control">
                  <input type="checkbox" name="interest[]" value="2.5 Zi" id="interest-2.5" data-rules="required|check_one[interest]">
                  <label for="interest-2.5">2.5-Zimmerwohnung</label>
                </div>
              </div>
              <div class="span">
                <div class="form-control">
                  <input type="checkbox" name="interest[]" value="3.5 Zi" id="interest-3.5" data-rules="required|check_one[interest]">
                  <label for="interest-3.5">3.5-Zimmerwohnung</label>
                </div>
              </div>
              <div class="span">
                <div class="form-control">
                  <input type="checkbox" name="interest[]" value="4.5 Zi" id="interest-4.5" data-rules="required|check_one[interest]">
                  <label for="interest-4.5">4.5-Zimmerwohnung</label>
                </div>
              </div>
          </div>
        </div>
        <div class="form-input">
          <div class="form-input__grid">
            <div class="span">
              @if ($errors->has('firstname'))
                <div class="error-message is-floating">{{ $errors->first('firstname') }}</div>
              @else 
                <div class="error-message is-floating" style="display:none">Vorname muss ausgefüllt sein!</div>
              @endif
              <input type="text" name="firstname" placeholder="Vorname *" data-rules="required">
            </div>
            <div class="span">
              @if ($errors->has('name'))
                <div class="error-message is-floating">{{ $errors->first('name') }}</div>
              @else 
                <div class="error-message is-floating" style="display:none">Name muss ausgefüllt sein!</div>
              @endif
              <input type="text" name="name" placeholder="Name *" data-rules="required">
            </div>
            <div class="span">
              @if ($errors->has('street'))
                <div class="error-message is-floating">{{ $errors->first('street') }}</div>
              @else 
                <div class="error-message is-floating" style="display:none">Strasse/Nr. muss ausgefüllt sein!</div>
              @endif
              <input type="text" name="street" placeholder="Strasse / Nr *" data-rules="required">
            </div>
            <div class="span">
              @if ($errors->has('city'))
                <div class="error-message is-floating">{{ $errors->first('city') }}</div>
              @else 
                <div class="error-message is-floating" style="display:none">Ort muss ausgefüllt sein!</div>
              @endif
              <input type="text" name="city" placeholder="PLZ / Ort *" data-rules="required">
            </div>
            <div class="span">
              @if ($errors->has('email'))
                <div class="error-message is-floating">{{ $errors->first('email') }}</div>
              @else 
                <div class="error-message is-floating" style="display:none">E-Mail-Adresse muss gültig sein!</div>
              @endif
              <input type="text" name="email" placeholder="E-Mail *" data-rules="required|valid_email">
            </div>
            <div class="span">
              <input type="text" name="phone" placeholder="Telefon">
            </div>
            <div class="span">
              <textarea name="remarks" placeholder="Mitteilung"></textarea>
            </div>
          </div>
          <input type="submit" value="Absenden" class="js-btn-submit">
        </div>
      </form>
    </article> --}}
  </div>
</section>
@endsection