<div class="apartements-group grid-apartements">
  <div class="span">
    <div class="iso-wrapper">
      <svg xmlns="http://www.w3.org/2000/svg" width="418" height="388" viewBox="0 0 417.9 387.9" class="iso iso--billroth">
        <style type="text/css">
          .iso-b-0{fill:#A9C8A6;}
          .iso-b-1{fill:#759178;}
          .iso-b-2{display:none;}
          .iso-b-3{display:inline;fill:#BCA26D;}
          .iso-b-4{display:inline;}
          .iso-b-5{fill:#BCA26D;}
          .iso-b-6{fill:none;stroke:#D4D4D4;stroke-width:0.7682;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
          .iso-b-7{fill:none;stroke:#000000;stroke-width:1.0242;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
          .iso-b-8{fill:none;stroke:#000000;stroke-width:0.7682;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
        </style>
        <g id="Hintergrund">
          <polygon class="iso-b-0" points="7.2,312.8 136.5,387.4 410.7,229.4 410.7,72.3 417.4,68.2 417.4,61.6 316.1,3.1 193.1,34.1 0.5,145.3 0.5,151.8 7.2,155.7 	"/>
          <polygon class="iso-b-1" points="134.2,150.9 205.8,109.8 238.5,160.7 136.1,219.9 	"/>
          <polygon class="iso-b-1" points="238.3,133.1 319.2,86.3 287.4,62.7 347,28.8 404.3,64.5 238.5,160.7 	"/>
          <path class="iso-b-1" d="M411.6,64.9l-41.1,23.8c0,0-1.7,0.6-2.6,5c-0.8,4.4-6.7,17.3-26.6,22.1c-10.2,2.4-18.1,1.4-18.1,1.4s-4.2,0.6-7.8,3S229.5,170,229.5,170s-1.1,0.8-1.8,4.8c-0.7,4.1-5.5,13.9-15.8,17.8c-10.3,4-17.9,6.6-29.1,5.6c0,0-2.3,0.1-5.8,1.9c-3.5,1.8-40.5,23.4-40.5,23.4L6.4,148.3L193.1,40.2l4.2-0.6L70.5,112.7l-0.1,1.7l-57.1,33.8l123.1,71.1L404.3,64.9l-57.6-36.7l0.2-0.8L411.6,64.9z"/>
          <polygon class="iso-b-1" points="167.3,88 167.3,99 217.2,70.1 217.2,64.5 	"/>
        </g>
        <g data-part="floors">
          @foreach($iso_billroth as $k => $g)
            <g data-floor="{{$k}}">
              @foreach($g as $i)
                {!! $i->svg !!}
              @endforeach
            </g>
          @endforeach
        </g>
        <g id="Linien">
          <g>
            <polyline class="iso-b-6" points="152.6,79.6 152.7,90.8 167.2,99.1"/>
            <line class="iso-b-6" x1="167.2" y1="88.1" x2="167.2" y2="99.1"/>
            <line class="iso-b-7" x1="136.5" y1="387.4" x2="410.7" y2="229.4"/>
            <polyline class="iso-b-7" points="136.5,387.4 7.2,312.8 7.2,155.7"/>
            <line class="iso-b-7" x1="136.5" y1="355.9" x2="7.2" y2="281.3"/>
            <line class="iso-b-7" x1="136.5" y1="324.3" x2="7.2" y2="249.6"/>
            <line class="iso-b-7" x1="136.5" y1="292.8" x2="7.2" y2="218.2"/>
            <line class="iso-b-7" x1="136.5" y1="261.3" x2="7.2" y2="186.7"/>
            <line class="iso-b-7" x1="136.5" y1="223.7" x2="177.1" y2="200.2"/>
            <line class="iso-b-7" x1="230.8" y1="169.2" x2="317.5" y2="119.2"/>
            <line class="iso-b-7" x1="371.1" y1="88.2" x2="417.4" y2="61.6"/>
            <line class="iso-b-7" x1="136.5" y1="228.5" x2="177.1" y2="205.1"/>
            <line class="iso-b-7" x1="230.8" y1="174.1" x2="317.5" y2="124.1"/>
            <line class="iso-b-7" x1="371.1" y1="93.1" x2="417.4" y2="66.4"/>
            <line class="iso-b-7" x1="136.5" y1="230.3" x2="177.1" y2="206.9"/>
            <line class="iso-b-7" x1="230.8" y1="175.9" x2="317.5" y2="125.8"/>
            <line class="iso-b-7" x1="371.1" y1="94.9" x2="417.4" y2="68.2"/>
            <line class="iso-b-7" x1="136.5" y1="228.5" x2="0.5" y2="150"/>
            <line class="iso-b-7" x1="136.5" y1="230.3" x2="0.5" y2="151.8"/>
            <line class="iso-b-7" x1="136.5" y1="355.9" x2="177.1" y2="332.5"/>
            <line class="iso-b-7" x1="230.8" y1="301.5" x2="317.5" y2="251.6"/>
            <line class="iso-b-7" x1="371.1" y1="220.6" x2="410.7" y2="197.8"/>
            <line class="iso-b-7" x1="136.5" y1="324.3" x2="177.1" y2="300.9"/>
            <line class="iso-b-7" x1="230.8" y1="270" x2="317.5" y2="220.1"/>
            <line class="iso-b-7" x1="371.1" y1="189.1" x2="410.7" y2="166.3"/>
            <line class="iso-b-7" x1="136.5" y1="292.8" x2="177.1" y2="269.4"/>
            <line class="iso-b-7" x1="230.8" y1="238.4" x2="317.5" y2="188.5"/>
            <line class="iso-b-7" x1="371.1" y1="157.6" x2="410.7" y2="134.8"/>
            <line class="iso-b-7" x1="136.5" y1="261.3" x2="177.1" y2="237.9"/>
            <line class="iso-b-7" x1="230.8" y1="206.9" x2="317.5" y2="157"/>
            <line class="iso-b-7" x1="371.1" y1="126" x2="410.7" y2="103.2"/>
            <line class="iso-b-7" x1="0.5" y1="145.3" x2="0.5" y2="151.8"/>
            <line class="iso-b-7" x1="417.4" y1="61.6" x2="417.4" y2="68.2"/>
            <path class="iso-b-7" d="M183.7,330.3c-2.4,0.1-4.6,0.8-6.7,2"/>
            <path class="iso-b-7" d="M183.7,330.5c11.4,1,22.8-1.8,32.5-8"/>
            <path class="iso-b-7" d="M216.2,322.4c6.3-4,10.7-10.5,11.9-17.8"/>
            <path class="iso-b-7" d="M230.8,301.5c-1.3,0.6-2.2,1.8-2.6,3.2"/>
            <path class="iso-b-7" d="M183.7,298.8c-2.4,0.1-4.6,0.8-6.7,2"/>
            <path class="iso-b-7" d="M183.7,298.9c11.4,1,22.8-1.8,32.5-8"/>
            <path class="iso-b-7" d="M216.2,290.9c6.3-4,10.7-10.5,11.9-17.8"/>
            <path class="iso-b-7" d="M230.8,269.9c-1.3,0.6-2.2,1.8-2.6,3.2"/>
            <path class="iso-b-7" d="M183.7,267.3c-2.4,0.1-4.6,0.8-6.7,2"/>
            <path class="iso-b-7" d="M183.7,267.4c11.4,1,22.8-1.8,32.5-8"/>
            <path class="iso-b-7" d="M216.2,259.3c6.3-4,10.7-10.5,11.9-17.8"/>
            <path class="iso-b-7" d="M230.8,238.4c-1.3,0.6-2.2,1.8-2.6,3.2"/>
            <path class="iso-b-7" d="M183.7,235.7c-2.4,0.1-4.6,0.8-6.7,2"/>
            <path class="iso-b-7" d="M183.7,235.9c11.4,1,22.8-1.8,32.5-8"/>
            <path class="iso-b-7" d="M216.2,227.8c6.3-4,10.7-10.5,11.9-17.8"/>
            <path class="iso-b-7" d="M230.8,206.9c-1.3,0.6-2.2,1.8-2.6,3.2"/>
            <path class="iso-b-7" d="M183.7,204.9c-2.4,0.1-4.6,0.8-6.7,2"/>
            <path class="iso-b-7" d="M183.7,204.9c11.4,1,22.8-1.8,32.5-8"/>
            <path class="iso-b-7" d="M216.2,196.8c6.3-4,10.7-10.5,11.9-17.8"/>
            <path class="iso-b-7" d="M230.8,175.8c-1.3,0.7-2.2,1.9-2.7,3.3"/>
            <path class="iso-b-7" d="M324,249.5c-2.4,0.1-4.6,0.8-6.7,2"/>
            <path class="iso-b-7" d="M324,249.6c11.4,1,22.8-1.8,32.5-8"/>
            <path class="iso-b-7" d="M356.5,241.5c6.3-4,10.7-10.5,11.9-17.8"/>
            <path class="iso-b-7" d="M371.1,220.6c-1.3,0.6-2.2,1.8-2.6,3.2"/>
            <path class="iso-b-7" d="M324,217.9c-2.4,0.1-4.6,0.8-6.7,2"/>
            <path class="iso-b-7" d="M324,218.1c11.4,1,22.8-1.8,32.5-8"/>
            <path class="iso-b-7" d="M356.5,210c6.3-4,10.7-10.5,11.9-17.8"/>
            <path class="iso-b-7" d="M371.1,189.1c-1.3,0.6-2.2,1.8-2.6,3.2"/>
            <path class="iso-b-7" d="M324,186.4c-2.4,0.1-4.6,0.8-6.7,2"/>
            <path class="iso-b-7" d="M324,186.5c11.4,1,22.8-1.8,32.5-8"/>
            <path class="iso-b-7" d="M356.5,178.5c6.3-4,10.7-10.5,11.9-17.8"/>
            <path class="iso-b-7" d="M371.1,157.5c-1.3,0.6-2.2,1.8-2.6,3.2"/>
            <path class="iso-b-7" d="M324,154.9c-2.4,0.1-4.6,0.8-6.7,2"/>
            <path class="iso-b-7" d="M324,155c11.4,1,22.8-1.8,32.5-8"/>
            <path class="iso-b-7" d="M356.5,146.9c6.3-4,10.7-10.5,11.9-17.8"/>
            <path class="iso-b-7" d="M371.1,126c-1.3,0.6-2.2,1.8-2.6,3.2"/>
            <path class="iso-b-7" d="M324,123.8c-2.4,0.1-4.6,0.8-6.7,2"/>
            <path class="iso-b-7" d="M324,123.9c11.4,1,22.8-1.8,32.5-8"/>
            <path class="iso-b-7" d="M356.5,115.8c6.3-4,10.7-10.5,11.9-17.8"/>
            <path class="iso-b-7" d="M371.2,94.8c-1.3,0.7-2.2,1.9-2.6,3.2"/>
            <line class="iso-b-7" x1="136.5" y1="387.4" x2="136.5" y2="223.7"/>
            <line class="iso-b-7" x1="410.7" y1="229.4" x2="410.7" y2="72.3"/>
            <line class="iso-b-7" x1="317.5" y1="251.6" x2="317.5" y2="119.2"/>
            <line class="iso-b-7" x1="368.7" y1="223.3" x2="368.7" y2="90.8"/>
            <line class="iso-b-7" x1="228.1" y1="304.7" x2="228.1" y2="172.5"/>
            <line class="iso-b-7" x1="177.1" y1="332.5" x2="177.1" y2="200.2"/>
            <path class="iso-b-7" d="M183.7,203.1c-2.4,0.1-4.6,0.8-6.7,2"/>
            <path class="iso-b-7" d="M183.7,203.1c11.4,1,22.8-1.8,32.5-8"/>
            <path class="iso-b-7" d="M216.2,195c6.3-4,10.7-10.5,11.9-17.8"/>
            <path class="iso-b-7" d="M230.7,174c-1.3,0.7-2.2,1.9-2.6,3.3"/>
            <path class="iso-b-7" d="M324,122c-2.4,0.1-4.6,0.8-6.7,2"/>
            <path class="iso-b-7" d="M324,122.1c11.4,1,22.8-1.8,32.5-8"/>
            <path class="iso-b-7" d="M356.5,114c6.3-4,10.7-10.5,11.9-17.8"/>
            <path class="iso-b-7" d="M371.2,93c-1.3,0.7-2.2,1.9-2.6,3.2"/>
            <path class="iso-b-7" d="M183.7,198.2c-2.4,0.1-4.6,0.8-6.7,2"/>
            <path class="iso-b-7" d="M183.7,198.2c11.4,1,22.8-1.8,32.5-8"/>
            <path class="iso-b-7" d="M216.2,190.2c6.3-4,10.7-10.5,11.9-17.8"/>
            <path class="iso-b-7" d="M230.7,169.1c-1.3,0.7-2.2,1.9-2.6,3.3"/>
            <path class="iso-b-7" d="M324,117.2c-2.4,0.1-4.6,0.8-6.7,2"/>
            <path class="iso-b-7" d="M324,117.2c11.4,1,22.8-1.8,32.5-8"/>
            <path class="iso-b-7" d="M356.5,109.1c6.3-4,10.7-10.5,11.9-17.8"/>
            <path class="iso-b-7" d="M371.1,88.2c-1.3,0.6-2.3,1.8-2.6,3.2"/>
            <polyline class="iso-b-7" points="346.6,28.5 134.2,151.2 70.5,114.6 12.8,148.5 136.5,219.9 404.9,64.9 346.6,28.5"/>
            <line class="iso-b-7" x1="411.6" y1="64.9" x2="346.6" y2="27.4"/>
            <line class="iso-b-7" x1="417.4" y1="61.6" x2="316.1" y2="3.1"/>
            <line class="iso-b-7" x1="6.3" y1="148.5" x2="193.1" y2="40.7"/>
            <polyline class="iso-b-7" points="134.2,149.4 70.5,112.8 199.1,38.7"/>
            <polyline class="iso-b-7" points="134.2,149.4 346.6,26.8 316.1,9.2"/>
            <line class="iso-b-7" x1="346.6" y1="28.5" x2="346.6" y2="26.8"/>
            <line class="iso-b-7" x1="70.5" y1="114.6" x2="70.5" y2="112.8"/>
            <line class="iso-b-7" x1="199.1" y1="38.7" x2="316.1" y2="9.2"/>
            <polyline class="iso-b-7" points="315.8,11.5 342.2,26.8 134.2,146.8 75,112.8"/>
            <polyline class="iso-b-7" points="315.8,0.5 342.2,15.7 134.2,135.8 75,101.7"/>
            <line class="iso-b-7" x1="342.2" y1="15.7" x2="342.2" y2="26.8"/>
            <line class="iso-b-7" x1="134.2" y1="135.8" x2="134.2" y2="146.8"/>
            <polyline class="iso-b-7" points="75,112.8 199.8,40.7 315.8,11.5"/>
            <polyline class="iso-b-7" points="75,101.7 199.8,29.6 315.8,0.5"/>
            <line class="iso-b-7" x1="199.8" y1="40.7" x2="199.8" y2="29.6"/>
            <line class="iso-b-7" x1="315.8" y1="11.5" x2="315.8" y2="0.5"/>
            <polyline class="iso-b-7" points="152.6,79.6 152.7,90.8 167.2,99.1"/>
            <polyline class="iso-b-7" points="167.2,88.1 217.1,64.5 202.5,56.1 152.6,79.6 167.2,88.1"/>
            <polyline class="iso-b-7" points="217.1,64.5 217.1,70.3 167.2,99.1 167.2,88.1"/>
            <line class="iso-b-7" x1="136.1" y1="134.7" x2="136.1" y2="145.8"/>
            <line class="iso-b-7" x1="138" y1="133.7" x2="138" y2="144.7"/>
            <line class="iso-b-7" x1="139.9" y1="132.5" x2="139.9" y2="143.6"/>
            <line class="iso-b-7" x1="141.9" y1="131.4" x2="141.9" y2="142.5"/>
            <line class="iso-b-7" x1="143.8" y1="130.3" x2="143.8" y2="141.3"/>
            <line class="iso-b-7" x1="145.7" y1="129.2" x2="145.7" y2="140.3"/>
            <line class="iso-b-7" x1="147.6" y1="128.2" x2="147.6" y2="139.2"/>
            <line class="iso-b-7" x1="149.5" y1="127" x2="149.5" y2="138"/>
            <line class="iso-b-7" x1="151.3" y1="125.8" x2="151.3" y2="137"/>
            <line class="iso-b-7" x1="153.2" y1="124.8" x2="153.2" y2="135.8"/>
            <line class="iso-b-7" x1="155.2" y1="123.7" x2="155.2" y2="134.7"/>
            <line class="iso-b-7" x1="157.1" y1="122.5" x2="157.1" y2="133.7"/>
            <line class="iso-b-7" x1="159" y1="121.5" x2="159" y2="132.5"/>
            <line class="iso-b-7" x1="160.9" y1="120.3" x2="160.9" y2="131.4"/>
            <line class="iso-b-7" x1="162.8" y1="119.2" x2="162.8" y2="130.3"/>
            <line class="iso-b-7" x1="164.8" y1="118.2" x2="164.8" y2="129.2"/>
            <line class="iso-b-7" x1="166.7" y1="117" x2="166.7" y2="128.2"/>
            <line class="iso-b-7" x1="168.6" y1="115.9" x2="168.6" y2="127"/>
            <line class="iso-b-7" x1="170.5" y1="114.8" x2="170.5" y2="125.8"/>
            <line class="iso-b-7" x1="172.5" y1="113.7" x2="172.5" y2="124.8"/>
            <line class="iso-b-7" x1="174.4" y1="112.7" x2="174.4" y2="123.7"/>
            <line class="iso-b-7" x1="176.3" y1="111.5" x2="176.3" y2="122.5"/>
            <line class="iso-b-7" x1="178.2" y1="110.4" x2="178.2" y2="121.5"/>
            <line class="iso-b-7" x1="180.1" y1="109.3" x2="180.1" y2="120.3"/>
            <line class="iso-b-7" x1="182.1" y1="108.2" x2="182.1" y2="119.2"/>
            <line class="iso-b-7" x1="184" y1="107" x2="184" y2="118.2"/>
            <line class="iso-b-7" x1="185.9" y1="106" x2="185.9" y2="117"/>
            <line class="iso-b-7" x1="187.8" y1="104.9" x2="187.8" y2="115.9"/>
            <line class="iso-b-7" x1="189.7" y1="103.7" x2="189.7" y2="114.8"/>
            <line class="iso-b-7" x1="191.7" y1="102.7" x2="191.7" y2="113.7"/>
            <line class="iso-b-7" x1="193.6" y1="101.5" x2="193.6" y2="112.7"/>
            <line class="iso-b-7" x1="195.5" y1="100.4" x2="195.5" y2="111.5"/>
            <line class="iso-b-7" x1="197.4" y1="99.3" x2="197.4" y2="110.4"/>
            <line class="iso-b-7" x1="199.3" y1="98.2" x2="199.3" y2="109.3"/>
            <line class="iso-b-7" x1="201.3" y1="97.2" x2="201.3" y2="108.2"/>
            <line class="iso-b-7" x1="203.2" y1="96" x2="203.2" y2="107"/>
            <line class="iso-b-7" x1="205.1" y1="94.9" x2="205.1" y2="106"/>
            <line class="iso-b-7" x1="207" y1="93.8" x2="207" y2="104.9"/>
            <line class="iso-b-7" x1="208.9" y1="92.7" x2="208.9" y2="103.7"/>
            <line class="iso-b-7" x1="210.9" y1="91.5" x2="210.9" y2="102.7"/>
            <line class="iso-b-7" x1="212.8" y1="90.5" x2="212.8" y2="101.5"/>
            <line class="iso-b-7" x1="214.6" y1="89.4" x2="214.6" y2="100.4"/>
            <line class="iso-b-7" x1="216.5" y1="88.2" x2="216.5" y2="99.3"/>
            <line class="iso-b-7" x1="218.4" y1="87.2" x2="218.4" y2="98.2"/>
            <line class="iso-b-7" x1="220.3" y1="86" x2="220.3" y2="97.2"/>
            <line class="iso-b-7" x1="222.3" y1="84.9" x2="222.3" y2="96"/>
            <line class="iso-b-7" x1="224.2" y1="83.9" x2="224.2" y2="94.9"/>
            <line class="iso-b-7" x1="226.1" y1="82.7" x2="226.1" y2="93.8"/>
            <line class="iso-b-7" x1="228" y1="81.7" x2="228" y2="92.7"/>
            <line class="iso-b-7" x1="229.9" y1="80.5" x2="229.9" y2="91.5"/>
            <line class="iso-b-7" x1="231.9" y1="79.4" x2="231.9" y2="90.5"/>
            <line class="iso-b-7" x1="233.8" y1="78.4" x2="233.8" y2="89.4"/>
            <line class="iso-b-7" x1="235.7" y1="77.2" x2="235.7" y2="88.2"/>
            <line class="iso-b-7" x1="237.6" y1="76" x2="237.6" y2="87.2"/>
            <line class="iso-b-7" x1="239.5" y1="75" x2="239.5" y2="86"/>
            <line class="iso-b-7" x1="241.5" y1="73.9" x2="241.5" y2="84.9"/>
            <line class="iso-b-7" x1="243.4" y1="72.7" x2="243.4" y2="83.9"/>
            <line class="iso-b-7" x1="245.3" y1="71.7" x2="245.3" y2="82.7"/>
            <line class="iso-b-7" x1="247.2" y1="70.5" x2="247.2" y2="81.7"/>
            <line class="iso-b-7" x1="249.1" y1="69.4" x2="249.1" y2="80.5"/>
            <line class="iso-b-7" x1="251.1" y1="68.4" x2="251.1" y2="79.4"/>
            <line class="iso-b-7" x1="253" y1="67.2" x2="253" y2="78.4"/>
            <line class="iso-b-7" x1="254.9" y1="66.2" x2="254.9" y2="77.2"/>
            <line class="iso-b-7" x1="256.8" y1="65" x2="256.8" y2="76"/>
            <line class="iso-b-7" x1="258.7" y1="63.9" x2="258.7" y2="75"/>
            <line class="iso-b-7" x1="260.7" y1="62.9" x2="260.7" y2="73.9"/>
            <line class="iso-b-7" x1="262.6" y1="61.7" x2="262.6" y2="72.7"/>
            <line class="iso-b-7" x1="264.5" y1="60.6" x2="264.5" y2="71.7"/>
            <line class="iso-b-7" x1="266.4" y1="59.5" x2="266.4" y2="70.5"/>
            <line class="iso-b-7" x1="268.3" y1="58.4" x2="268.3" y2="69.4"/>
            <line class="iso-b-7" x1="270.3" y1="57.2" x2="270.3" y2="68.4"/>
            <line class="iso-b-7" x1="272.2" y1="56.2" x2="272.2" y2="67.2"/>
            <line class="iso-b-7" x1="274.1" y1="55.1" x2="274.1" y2="66.2"/>
            <line class="iso-b-7" x1="276" y1="53.9" x2="276" y2="65"/>
            <line class="iso-b-7" x1="277.8" y1="52.9" x2="277.8" y2="63.9"/>
            <line class="iso-b-7" x1="279.7" y1="51.7" x2="279.7" y2="62.9"/>
            <line class="iso-b-7" x1="281.7" y1="50.7" x2="281.7" y2="61.7"/>
            <line class="iso-b-7" x1="283.6" y1="49.5" x2="283.6" y2="60.6"/>
            <line class="iso-b-7" x1="285.5" y1="48.4" x2="285.5" y2="59.5"/>
            <line class="iso-b-7" x1="287.4" y1="47.4" x2="287.4" y2="58.4"/>
            <line class="iso-b-7" x1="289.3" y1="46.2" x2="289.3" y2="57.2"/>
            <line class="iso-b-7" x1="291.3" y1="45.1" x2="291.3" y2="56.2"/>
            <line class="iso-b-7" x1="293.2" y1="44" x2="293.2" y2="55.1"/>
            <line class="iso-b-7" x1="295.1" y1="42.9" x2="295.1" y2="53.9"/>
            <line class="iso-b-7" x1="297" y1="41.7" x2="297" y2="52.9"/>
            <line class="iso-b-7" x1="298.9" y1="40.7" x2="298.9" y2="51.7"/>
            <line class="iso-b-7" x1="300.9" y1="39.6" x2="300.9" y2="50.7"/>
            <line class="iso-b-7" x1="302.8" y1="38.4" x2="302.8" y2="49.5"/>
            <line class="iso-b-7" x1="304.7" y1="37.4" x2="304.7" y2="48.4"/>
            <line class="iso-b-7" x1="306.6" y1="36.2" x2="306.6" y2="47.4"/>
            <line class="iso-b-7" x1="308.5" y1="35.2" x2="308.5" y2="46.2"/>
            <line class="iso-b-7" x1="310.5" y1="34.1" x2="310.5" y2="45.1"/>
            <line class="iso-b-7" x1="312.4" y1="32.9" x2="312.4" y2="44"/>
            <line class="iso-b-7" x1="314.3" y1="31.9" x2="314.3" y2="42.9"/>
            <line class="iso-b-7" x1="316.2" y1="30.7" x2="316.2" y2="41.7"/>
            <line class="iso-b-7" x1="318.1" y1="29.6" x2="318.1" y2="40.7"/>
            <line class="iso-b-7" x1="320.1" y1="28.5" x2="320.1" y2="39.6"/>
            <line class="iso-b-7" x1="322" y1="27.4" x2="322" y2="38.4"/>
            <line class="iso-b-7" x1="323.9" y1="26.2" x2="323.9" y2="37.4"/>
            <line class="iso-b-7" x1="325.8" y1="25.2" x2="325.8" y2="36.2"/>
            <line class="iso-b-7" x1="327.7" y1="24.1" x2="327.7" y2="35.2"/>
            <line class="iso-b-7" x1="329.7" y1="22.9" x2="329.7" y2="34.1"/>
            <line class="iso-b-7" x1="331.6" y1="21.9" x2="331.6" y2="32.9"/>
            <line class="iso-b-7" x1="333.5" y1="20.7" x2="333.5" y2="31.9"/>
            <line class="iso-b-7" x1="335.4" y1="19.7" x2="335.4" y2="30.7"/>
            <line class="iso-b-7" x1="337.3" y1="18.6" x2="337.3" y2="29.6"/>
            <line class="iso-b-7" x1="339.3" y1="17.4" x2="339.3" y2="28.5"/>
            <line class="iso-b-7" x1="341.2" y1="16.4" x2="341.2" y2="27.4"/>
            <line class="iso-b-7" x1="340.3" y1="14.6" x2="340.3" y2="25.7"/>
            <line class="iso-b-7" x1="338.4" y1="13.6" x2="338.4" y2="24.6"/>
            <line class="iso-b-7" x1="336.5" y1="12.4" x2="336.5" y2="23.4"/>
            <line class="iso-b-7" x1="334.5" y1="11.3" x2="334.5" y2="22.4"/>
            <line class="iso-b-7" x1="332.6" y1="10.2" x2="332.6" y2="21.3"/>
            <line class="iso-b-7" x1="330.7" y1="9.1" x2="330.7" y2="20.1"/>
            <line class="iso-b-7" x1="328.8" y1="7.9" x2="328.8" y2="19.1"/>
            <line class="iso-b-7" x1="326.8" y1="6.9" x2="326.8" y2="17.9"/>
            <line class="iso-b-7" x1="324.9" y1="5.8" x2="324.9" y2="16.9"/>
            <line class="iso-b-7" x1="323" y1="4.6" x2="323" y2="15.7"/>
            <line class="iso-b-7" x1="321.1" y1="3.6" x2="321.1" y2="14.6"/>
            <line class="iso-b-7" x1="319.2" y1="2.4" x2="319.2" y2="13.6"/>
            <line class="iso-b-7" x1="317.2" y1="1.4" x2="317.2" y2="12.4"/>
            <line class="iso-b-7" x1="313.7" y1="12.2" x2="313.7" y2="1"/>
            <line class="iso-b-7" x1="311.5" y1="12.7" x2="311.5" y2="1.5"/>
            <line class="iso-b-7" x1="309.3" y1="13.2" x2="309.3" y2="2.2"/>
            <line class="iso-b-7" x1="307.3" y1="13.7" x2="307.3" y2="2.7"/>
            <line class="iso-b-7" x1="305.1" y1="14.2" x2="305.1" y2="3.2"/>
            <line class="iso-b-7" x1="302.9" y1="14.9" x2="302.9" y2="3.7"/>
            <line class="iso-b-7" x1="300.7" y1="15.4" x2="300.7" y2="4.2"/>
            <line class="iso-b-7" x1="298.7" y1="15.9" x2="298.7" y2="4.9"/>
            <line class="iso-b-7" x1="296.5" y1="16.4" x2="296.5" y2="5.4"/>
            <line class="iso-b-7" x1="294.3" y1="17" x2="294.3" y2="5.9"/>
            <line class="iso-b-7" x1="292.2" y1="17.5" x2="292.2" y2="6.4"/>
            <line class="iso-b-7" x1="290.1" y1="18.1" x2="290.1" y2="7"/>
            <line class="iso-b-7" x1="287.9" y1="18.6" x2="287.9" y2="7.6"/>
            <line class="iso-b-7" x1="285.8" y1="19.1" x2="285.8" y2="8.1"/>
            <line class="iso-b-7" x1="283.6" y1="19.7" x2="283.6" y2="8.6"/>
            <line class="iso-b-7" x1="281.4" y1="20.2" x2="281.4" y2="9.1"/>
            <line class="iso-b-7" x1="279.4" y1="20.7" x2="279.4" y2="9.7"/>
            <line class="iso-b-7" x1="277.2" y1="21.3" x2="277.2" y2="10.2"/>
            <line class="iso-b-7" x1="275" y1="21.8" x2="275" y2="10.8"/>
            <line class="iso-b-7" x1="272.8" y1="22.4" x2="272.8" y2="11.3"/>
            <line class="iso-b-7" x1="270.8" y1="22.9" x2="270.8" y2="11.8"/>
            <line class="iso-b-7" x1="268.6" y1="23.4" x2="268.6" y2="12.4"/>
            <line class="iso-b-7" x1="266.4" y1="23.9" x2="266.4" y2="12.9"/>
            <line class="iso-b-7" x1="264.2" y1="24.5" x2="264.2" y2="13.4"/>
            <line class="iso-b-7" x1="262.2" y1="25.1" x2="262.2" y2="14"/>
            <line class="iso-b-7" x1="260" y1="25.6" x2="260" y2="14.5"/>
            <line class="iso-b-7" x1="257.8" y1="26.1" x2="257.8" y2="15.1"/>
            <line class="iso-b-7" x1="255.7" y1="26.6" x2="255.7" y2="15.6"/>
            <line class="iso-b-7" x1="253.6" y1="27.3" x2="253.6" y2="16.1"/>
            <line class="iso-b-7" x1="251.4" y1="27.8" x2="251.4" y2="16.6"/>
            <line class="iso-b-7" x1="249.3" y1="28.3" x2="249.3" y2="17.3"/>
            <line class="iso-b-7" x1="247.1" y1="28.8" x2="247.1" y2="17.8"/>
            <line class="iso-b-7" x1="244.9" y1="29.3" x2="244.9" y2="18.3"/>
            <line class="iso-b-7" x1="242.9" y1="30" x2="242.9" y2="18.8"/>
            <line class="iso-b-7" x1="240.7" y1="30.5" x2="240.7" y2="19.3"/>
            <line class="iso-b-7" x1="238.5" y1="31" x2="238.5" y2="20"/>
            <line class="iso-b-7" x1="236.3" y1="31.5" x2="236.3" y2="20.5"/>
            <line class="iso-b-7" x1="234.3" y1="32" x2="234.3" y2="21"/>
            <line class="iso-b-7" x1="232.1" y1="32.6" x2="232.1" y2="21.5"/>
            <line class="iso-b-7" x1="229.9" y1="33.2" x2="229.9" y2="22"/>
            <line class="iso-b-7" x1="227.8" y1="33.7" x2="227.8" y2="22.7"/>
            <line class="iso-b-7" x1="225.7" y1="34.2" x2="225.7" y2="23.2"/>
            <line class="iso-b-7" x1="223.5" y1="34.8" x2="223.5" y2="23.7"/>
            <line class="iso-b-7" x1="221.4" y1="35.3" x2="221.4" y2="24.2"/>
            <line class="iso-b-7" x1="219.2" y1="35.8" x2="219.2" y2="24.7"/>
            <line class="iso-b-7" x1="217.1" y1="36.4" x2="217.1" y2="25.3"/>
            <line class="iso-b-7" x1="215" y1="36.9" x2="215" y2="25.9"/>
            <line class="iso-b-7" x1="212.8" y1="37.5" x2="212.8" y2="26.4"/>
            <line class="iso-b-7" x1="210.6" y1="38" x2="210.6" y2="26.9"/>
            <line class="iso-b-7" x1="208.6" y1="38.5" x2="208.6" y2="27.5"/>
            <line class="iso-b-7" x1="206.4" y1="39" x2="206.4" y2="28"/>
            <line class="iso-b-7" x1="204.2" y1="39.6" x2="204.2" y2="28.5"/>
            <line class="iso-b-7" x1="202" y1="40.2" x2="202" y2="29.1"/>
            <line class="iso-b-7" x1="197.9" y1="41.9" x2="197.9" y2="30.7"/>
            <line class="iso-b-7" x1="196" y1="42.9" x2="196" y2="31.9"/>
            <line class="iso-b-7" x1="194.1" y1="44" x2="194.1" y2="32.9"/>
            <line class="iso-b-7" x1="192.2" y1="45.1" x2="192.2" y2="34.1"/>
            <line class="iso-b-7" x1="190.2" y1="46.2" x2="190.2" y2="35.2"/>
            <line class="iso-b-7" x1="188.3" y1="47.4" x2="188.3" y2="36.2"/>
            <line class="iso-b-7" x1="186.4" y1="48.4" x2="186.4" y2="37.4"/>
            <line class="iso-b-7" x1="184.5" y1="49.5" x2="184.5" y2="38.5"/>
            <line class="iso-b-7" x1="182.6" y1="50.7" x2="182.6" y2="39.6"/>
            <line class="iso-b-7" x1="180.6" y1="51.7" x2="180.6" y2="40.7"/>
            <line class="iso-b-7" x1="178.7" y1="52.9" x2="178.7" y2="41.9"/>
            <line class="iso-b-7" x1="176.8" y1="54" x2="176.8" y2="42.9"/>
            <line class="iso-b-7" x1="174.9" y1="55.1" x2="174.9" y2="44"/>
            <line class="iso-b-7" x1="173" y1="56.2" x2="173" y2="45.1"/>
            <line class="iso-b-7" x1="171.2" y1="57.4" x2="171.2" y2="46.2"/>
            <line class="iso-b-7" x1="169.2" y1="58.4" x2="169.2" y2="47.4"/>
            <line class="iso-b-7" x1="167.3" y1="59.5" x2="167.3" y2="48.4"/>
            <line class="iso-b-7" x1="165.4" y1="60.6" x2="165.4" y2="49.5"/>
            <line class="iso-b-7" x1="163.5" y1="61.7" x2="163.5" y2="50.7"/>
            <line class="iso-b-7" x1="161.6" y1="62.9" x2="161.6" y2="51.7"/>
            <line class="iso-b-7" x1="159.6" y1="63.9" x2="159.6" y2="52.9"/>
            <line class="iso-b-7" x1="157.7" y1="65" x2="157.7" y2="54"/>
            <line class="iso-b-7" x1="155.8" y1="66.2" x2="155.8" y2="55.1"/>
            <line class="iso-b-7" x1="153.9" y1="67.2" x2="153.9" y2="56.2"/>
            <line class="iso-b-7" x1="152" y1="68.4" x2="152" y2="57.4"/>
            <line class="iso-b-7" x1="150" y1="69.5" x2="150" y2="58.4"/>
            <line class="iso-b-7" x1="148.1" y1="70.5" x2="148.1" y2="59.5"/>
            <line class="iso-b-7" x1="146.2" y1="71.7" x2="146.2" y2="60.6"/>
            <line class="iso-b-7" x1="144.3" y1="72.8" x2="144.3" y2="61.7"/>
            <line class="iso-b-7" x1="142.4" y1="73.9" x2="142.4" y2="62.9"/>
            <line class="iso-b-7" x1="140.4" y1="75" x2="140.4" y2="63.9"/>
            <line class="iso-b-7" x1="138.5" y1="76" x2="138.5" y2="65"/>
            <line class="iso-b-7" x1="136.6" y1="77.2" x2="136.6" y2="66.2"/>
            <line class="iso-b-7" x1="134.7" y1="78.4" x2="134.7" y2="67.2"/>
            <line class="iso-b-7" x1="132.8" y1="79.4" x2="132.8" y2="68.4"/>
            <line class="iso-b-7" x1="130.8" y1="80.5" x2="130.8" y2="69.5"/>
            <line class="iso-b-7" x1="128.9" y1="81.7" x2="128.9" y2="70.5"/>
            <line class="iso-b-7" x1="127" y1="82.7" x2="127" y2="71.7"/>
            <line class="iso-b-7" x1="125.1" y1="83.9" x2="125.1" y2="72.8"/>
            <line class="iso-b-7" x1="123.2" y1="85" x2="123.2" y2="73.9"/>
            <line class="iso-b-7" x1="121.2" y1="86" x2="121.2" y2="75"/>
            <line class="iso-b-7" x1="119.3" y1="87.2" x2="119.3" y2="76"/>
            <line class="iso-b-7" x1="117.4" y1="88.3" x2="117.4" y2="77.2"/>
            <line class="iso-b-7" x1="115.5" y1="89.4" x2="115.5" y2="78.4"/>
            <line class="iso-b-7" x1="113.6" y1="90.5" x2="113.6" y2="79.4"/>
            <line class="iso-b-7" x1="111.6" y1="91.5" x2="111.6" y2="80.5"/>
            <line class="iso-b-7" x1="109.7" y1="92.7" x2="109.7" y2="81.7"/>
            <line class="iso-b-7" x1="107.9" y1="93.8" x2="107.9" y2="82.7"/>
            <line class="iso-b-7" x1="106" y1="94.9" x2="106" y2="83.9"/>
            <line class="iso-b-7" x1="104.1" y1="96" x2="104.1" y2="85"/>
            <line class="iso-b-7" x1="102.2" y1="97.2" x2="102.2" y2="86"/>
            <line class="iso-b-7" x1="100.2" y1="98.2" x2="100.2" y2="87.2"/>
            <line class="iso-b-7" x1="98.3" y1="99.3" x2="98.3" y2="88.3"/>
            <line class="iso-b-7" x1="96.4" y1="100.5" x2="96.4" y2="89.4"/>
            <line class="iso-b-7" x1="94.5" y1="101.5" x2="94.5" y2="90.5"/>
            <line class="iso-b-7" x1="92.6" y1="102.7" x2="92.6" y2="91.5"/>
            <line class="iso-b-7" x1="90.6" y1="103.8" x2="90.6" y2="92.7"/>
            <line class="iso-b-7" x1="88.7" y1="104.9" x2="88.7" y2="93.8"/>
            <line class="iso-b-7" x1="86.8" y1="106" x2="86.8" y2="94.9"/>
            <line class="iso-b-7" x1="84.9" y1="107" x2="84.9" y2="96"/>
            <line class="iso-b-7" x1="83" y1="108.2" x2="83" y2="97.2"/>
            <line class="iso-b-7" x1="81" y1="109.3" x2="81" y2="98.2"/>
            <line class="iso-b-7" x1="79.1" y1="110.4" x2="79.1" y2="99.3"/>
            <line class="iso-b-7" x1="77.2" y1="111.5" x2="77.2" y2="100.5"/>
            <line class="iso-b-7" x1="132.3" y1="134.7" x2="132.3" y2="145.8"/>
            <line class="iso-b-7" x1="130.3" y1="133.7" x2="130.3" y2="144.7"/>
            <line class="iso-b-7" x1="128.4" y1="132.5" x2="128.4" y2="143.6"/>
            <line class="iso-b-7" x1="126.5" y1="131.4" x2="126.5" y2="142.5"/>
            <line class="iso-b-7" x1="124.6" y1="130.3" x2="124.6" y2="141.3"/>
            <line class="iso-b-7" x1="122.6" y1="129.2" x2="122.6" y2="140.3"/>
            <line class="iso-b-7" x1="120.7" y1="128.2" x2="120.7" y2="139.2"/>
            <line class="iso-b-7" x1="118.8" y1="127" x2="118.8" y2="138"/>
            <line class="iso-b-7" x1="116.9" y1="125.8" x2="116.9" y2="137"/>
            <line class="iso-b-7" x1="115" y1="124.8" x2="115" y2="135.8"/>
            <line class="iso-b-7" x1="113" y1="123.7" x2="113" y2="134.7"/>
            <line class="iso-b-7" x1="111.1" y1="122.5" x2="111.1" y2="133.7"/>
            <line class="iso-b-7" x1="109.2" y1="121.5" x2="109.2" y2="132.5"/>
            <line class="iso-b-7" x1="107.3" y1="120.3" x2="107.3" y2="131.4"/>
            <line class="iso-b-7" x1="105.4" y1="119.2" x2="105.4" y2="130.3"/>
            <line class="iso-b-7" x1="103.4" y1="118.2" x2="103.4" y2="129.2"/>
            <line class="iso-b-7" x1="101.5" y1="117" x2="101.5" y2="128.2"/>
            <line class="iso-b-7" x1="99.6" y1="115.9" x2="99.6" y2="127"/>
            <line class="iso-b-7" x1="97.7" y1="114.8" x2="97.7" y2="125.8"/>
            <line class="iso-b-7" x1="95.8" y1="113.7" x2="95.8" y2="124.8"/>
            <line class="iso-b-7" x1="93.8" y1="112.7" x2="93.8" y2="123.7"/>
            <line class="iso-b-7" x1="91.9" y1="111.5" x2="91.9" y2="122.5"/>
            <line class="iso-b-7" x1="90" y1="110.4" x2="90" y2="121.5"/>
            <line class="iso-b-7" x1="88.1" y1="109.3" x2="88.1" y2="120.3"/>
            <line class="iso-b-7" x1="86.2" y1="108.2" x2="86.2" y2="119.2"/>
            <line class="iso-b-7" x1="84.4" y1="107" x2="84.4" y2="118.2"/>
            <line class="iso-b-7" x1="82.4" y1="106" x2="82.4" y2="117"/>
            <line class="iso-b-7" x1="80.5" y1="104.9" x2="80.5" y2="116"/>
            <line class="iso-b-7" x1="78.6" y1="103.7" x2="78.6" y2="114.8"/>
            <line class="iso-b-7" x1="76.7" y1="102.7" x2="76.7" y2="113.7"/>
            <line class="iso-b-7" x1="238.5" y1="133.1" x2="205.9" y2="109.8"/>
            <polyline class="iso-b-7" points="238.5,133.1 319.8,86.3 287.2,62.9"/>
            <line class="iso-b-7" x1="319.8" y1="86.3" x2="319.9" y2="113.9"/>
            <polyline class="iso-b-7" points="301.8,124.1 301.7,96.7 269.3,73.1"/>
            <polyline class="iso-b-7" points="238.5,133.1 238.5,160.9 205.9,109.8"/>
            <line class="iso-b-7" x1="136.5" y1="219.9" x2="134.2" y2="151.2"/>
            <polyline class="iso-b-7" points="197.3,39.6 193.1,40.7 193.1,34.1 316.1,3.1"/>
            <line class="iso-b-7" x1="0.5" y1="145.3" x2="193.1" y2="34.1"/>
            <polyline class="iso-b-8" points="316.1,3.1 348.9,22 316.1,3.1 193.1,34.1 0.5,145.3 6.3,148.5 193.1,40.7 197.4,39.6 199.1,38.7 
              316.1,9.2 346.6,26.8 346.6,27.4 411.6,64.9 417.4,61.6 316.1,3.1"/>
            <line class="iso-b-7" x1="136.5" y1="223.7" x2="6.3" y2="148.5"/>
            <line class="iso-b-7" x1="316.1" y1="3.1" x2="316.1" y2="9.2"/>
            <polyline class="iso-b-7" points="230.8,175.9 230.8,333 317.5,283.1 317.5,251.6 230.8,301.5"/>
          </g>
        </g>
      </svg>
    </div>
  </div>
  <div class="span">
    <h2 class="apartements-title">Billrothweg 5</h2>
    <table class="apartements">
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
        @foreach($apartements_billroth as $a)
          <tr 
            class="js-list-item" 
            data-id="{{$a->id}}" 
            data-number="{{$a->number}}" 
            data-floor="{{$a->floor}}"
            data-state="{{$a->state}}"
            data-rooms="{{$a->rooms}}"
            data-plan="/assets/media/oerlikonerstrasse-{{$a->number}}.pdf">
            <td>{{$a->number}}</td>
            <td>{{config('content.floors.' . $a->floor)}}</td>
            <td>{{$a->rooms}}</td>
            <td>{{$a->square_footage}}</td>
            <td class="align-right hide-mobile">
              @if ($a->state == 2 || $a->state == 3)
               –
              @else
                {{$a->rent_net}}
              @endif
            </td>
            <td class="align-right hide-mobile">
              @if ($a->state == 2 || $a->state == 3)
               –
              @else
                {{$a->additional_cost}}
              @endif
            </td>
            <td class="align-right">
              @if ($a->state == 2)
                reserviert
              @elseif ($a->state == 3)
                vermietet
              @else
                {{$a->rent_gross}}
              @endif
            </td>
            <td class="align-right apartement-download">
              <a href="/assets/media/billroth-minerva-{{$a->number}}.pdf" target="_blank" title="Download Grundriss {{$a->number}}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 142"><path d="M99.9,125.1H0v16.6H99.9ZM98.2,58.8a6.4,6.4,0,0,0-9.2,0L56.4,91.3V6.6a6.6,6.6,0,1,0-13.1,0V91.3L11.2,59.2a6.7,6.7,0,0,0-9.3,0,6.7,6.7,0,0,0,0,9.3l43.3,43.3.5.4c.1.1.2.1.2.2l.3.2.3.2h.3l.3.2h5.5l.3-.2h.3l.3-.2.3-.2.2-.2.7-.6.2-.2L98.2,68.1a6.5,6.5,0,0,0,0-9.3" style="fill:#ffffff"/></svg>
              </a>
            </td>
            <td class="align-right is-last">
              <a href="{{$a->flatfox_uri}}" target="_blank" class="btn-register">Flatfox</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>