@component('mail::message')
# Interessent

Interessiert an: {{ $data->interest }}<br><br>
Name: {{ $data->firstname }} {{ $data->name }}<br><br>
Strasse/Nr.: {{ $data->street }}<br><br>
Ort: {{ $data->location }}<br><br>
E-Mail: {{ $data->email }}<br><br>
Telefon: {{ $data->phone }}<br><br>
Mitteilung:<br>
{{ $data->remarks }}<br><br>


Freundliche Grüsse<br>

APLEONA SCHWEIZ AG<br>
Industriestrasse 21<br>
8304 Wallisellen<br>
mieten@apleona.com
@endcomponent
