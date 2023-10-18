    
    <div id="power-source">
      <button id="power"><svg><use href="img/i.svg#power"/></svg></button>
      <select id="main_current_input_select">
        <!-- dynamically added -->
        <option>SHIELD</option>
      </select>
    </div>

    <div id="aspect-lights">
      <button class="madvr aspect169" value="1">16:9</button>
      <button class="madvr aspect241" value="2">2.4:1</button>
      <button class="bulb high"><svg><use href="img/i.svg#bulb-high"/></svg></button>
      <button class="bulb med"><svg><use href="img/i.svg#bulb-med"/></svg></button>
      <button class="bulb low"><svg><use href="img/i.svg#bulb-low"/></svg></button>
      <button class="bulb off"><svg><use href="img/i.svg#bulb"/></svg></button>
    </div>


    <div id="main_zone_volume">
      <button class="plus">+</button>
      <div class="range_value">-50.0 dB</div>
      <input id="main_zone_volume_range" type="range" min="-90" max="-20" value="-35.0">
      <button class="minus">-</button>
    </div>

    <nav class="d-pad">
      <div>
        <button class="player up"><i></i></button>
        <button class="player right"><i></i></button>
        <button class="player left"><i></i></button>
        <button class="player down"><i></i></button>
        <button class="player enter"></button>
      </div>
      <button class="player back"><svg><use href="img/i.svg#back"/></svg></button>
      <button class="player home"><svg><use href="img/i.svg#circle"/></svg></button>
    </nav>

    <div id="video_controls">
      <button class="player rewind-fast"><<</button>
      <button class="player rewind"><</button>
      <button class="player playPause"><svg><use href="img/i.svg#play-pause"/></svg></button>
      <button class="player forward">></button>
      <button class="player forward-fast">>></button>
    </div>
