<header><img src=img/anthem-logo.svg /></header>

<div id="main_zone_page" class="page avm70">
  

  <div class="power-btn">
    <button role="switch" aria-checked="true" id="main_zone_power_sw" class="switch">
    <span class="switch_track"></span>
    </button>
  </div>


  <div id="main_zone_volume" class="col-6 range">
     <div class="minus">-</div>
     <input id="main_zone_volume_range" type="range" min="-90" max="-18" step="0.5" value="-35.0">
     <div class="plus">+</div>
     <div class="range_value text-center">-50.0 dB</div>
  </div>

  <div class="DF_input_select">
    <label for="main_current_input_select" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Selects the current input for the main zone." data-original-title="" title="">Current Input</label>
    <select id="main_current_input_select">
       <!-- dynamically added -->
    <option value="1">PLEX</option><option value="2">XBOX</option><option value="3">SHIELD</option><option value="4">4AUX</option><option value="5">ARC</option><option value="6">Streaming</option><option value="7">Bluetooth</option></select>
  </div>

  <div class="DF_audio_select">
    <label for="main_audio_processing_select" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Selects the audio processing mode." data-original-title="" title="">Current Audio Mode</label>
    <select id="main_audio_processing_select">
       <option value="0">None</option>
       <option value="1">AnthemLogic-Cinema</option>
       <option value="2">AnthemLogic-Music</option>
       <option value="3" selected="selected">Dolby Surround</option>
       <option value="4">DTS Neural:X</option>
       <option value="5">DTS Virtual:X</option>
       <option value="6">All Channel Stereo</option>
       <option value="7">Mono</option>
       <option value="8">All Channel Mono</option>
    </select>
  </div>



</div>
