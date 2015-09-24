<?php session_start();
$pagefilename = basename($_SERVER['PHP_SELF']);
//if template is 'equipment.php' include header
if( $pagefilename == 'equipment.php' ) {
	include 'inc_header.php';
}
?>
<div id="equipment-container">
  <div class="gridContainer clearfix">
    <div id="swequipment" class="fluid swcontentmain">
      <h1 class="pagetitlemain">equipment</h1>
      
      <h3 class="equipmentheading">CONTROL ROOM</h3>	
      
        <div class="equipmentgroup">
          <h3 class="equipmentsubheading">Console:</h3>
          <ul class="equipmentlist">
            <li>Avid D-Control ES 32-Fader</li>
            <li>Neve BCM-10 [vintage]</li>
          </ul>
        <!--</div>
        <div class="equipmentgroup">-->
          <h3 class="equipmentsubheading">ProTools:</h3>
          <ul class="equipmentlist">
            <li>ProTools HDX1</li> 
            <li>Avid HD I/O (2)<br>[16x16 Analog, 32 I/O Total]</li>   
            <li>Apple Mac Pro<br>3.3 Ghz 6-Core Xeon<br>SSD, 32GB Ram</li>    
          </ul>
        </div>
        <div class="equipmentgroup">
          <h3 class="equipmentsubheading">Monitoring:</h3>
          <ul class="equipmentlist">
            <li>Yamaha NS-10 + Subwoofer</li>
            <li>Genelec 1031a</li>
          </ul>
        </div>
        <div class="equipmentgroup">
          <h3 class="equipmentsubheading">Freestanding Mains:</h3>
          <ul class="equipmentlist">
            <li>Quested HQ210 (2) Mains</li>
            <li>Quested QSB118 (2) Subwoofer</li>
          </ul>
        </div>
        <div class="equipmentgroup">
          <h3 class="equipmentsubheading">Cue System:</h3>
          <ul class="equipmentlist">
            <li>Aviom Personal Monitoring System</li>
            <li>Aviom Control Units (4)</li>
          </ul>
        </div>
        
      <h3 class="equipmentheading">MIC PREs, EQs, COMPRESSORS &amp; EFFECTS</h3>
      
        <div class="equipmentgroup">
          <h3 class="equipmentsubheading">Mic Pre's/EQ's:</h3>
          <ul class="equipmentlist">
            <li>Neve 1073 [vintage] (14)</li>
            <li>Neve 1075 [vintage] (8)</li>
            <li>Neve 1084 (2)</li>
            <li>Neve 1272 [vintage] (2)<br>Dan Alexander Racked</li>
            <li>Wunder Audio PEQ1</li>
            <li>Focusrite ISA110 (2)</li>
            <li>Martech MSS-10 (2)</li>
            <li>Neve 1081R Remote Control</li>
          </ul>
        </div>
        <div class="equipmentgroup">
          <h3 class="equipmentsubheading">Compressors:</h3>
          <ul class="equipmentlist">
            <li>Alan Smart C1 &amp; C2</li>
            <li>Empirical Labs Distressor (2)</li>
            <li>Focusrite RED3</li>
            <li>Universal Audio 1176 (2)</li>
            <li>Universal Audio LA-2A (2)</li>
            <li>Esoteric Audio Research 660</li>
            <li>DBX 160vu (2)</li>
            <li>Neve 34628</li>
            <li>Crane Song STC-8</li>
          </ul>
        </div>
        <div class="equipmentgroup">
          <h3 class="equipmentsubheading">Outboard EQ:</h3>
          <ul class="equipmentlist">
            <li>Pultec EQP-1A</li>
            <li>Pultec EQP-1S</li>
            <li>Pultec EQH-2 (2)</li>
            <li>Manley Stereo Pultec</li>
          </ul>
        </div>
        <div class="equipmentgroup">
          <h3 class="equipmentsubheading">Effects:</h3>
          <ul class="equipmentlist">
            <li>Eventide H3000DSE</li>
            <li>Eventide H8000</li>
            <li>Lexicon 480L <em>(opt)</em></li>
            <li>Lexicon 960L <em>(opt)</em></li>
          </ul>
        </div>
          
        <h3 class="equipmentheading">MICROPHONES</h3>  
          
        <div class="equipmentgroup">
          <h3 class="equipmentsubheading">Microphones</h3>
          <ul class="equipmentlist">
            <li>Neumann M49 [vintage] (2)</li>
            <li>Neumann U48 [vintage] (2)</li>
            <li>Neumann U67 [vintage] (2)</li>
            <li>Neumann U87 [vintage] (5)</li>
            <li>Neumann M149 (2)</li>
            <li>Neumann M150 (3)</li>
            <li>Neumann M147</li>
            <li>Neumann U47 fet</li>
            <li>Telefunken ELA M-251 [vintage]</li>
            <li>Soundelux ELUX 251</li>
            <li>AKG C12 [vintage]</li>
            <li>AKG C12 VR</li>
          </ul>
        </div>
        <div class="equipmentgroup">
          <h3 class="equipmentsubheading">&nbsp;</h3>
          <ul class="equipmentlist">
            <li>Sony C800G</li>
            <li>Dirk Brauner VM1 Klaus Heyne Ltd</li>
            <li>Royer R-121 Ribbon</li>
            <li>Coles 4038 Ribbon (2)</li>
            <li>AEA R44C Ribbon (2)</li>
            <li>AEA R84 Ribbon (2)</li>
            <li>AEA R88 Ribbon (Stereo)</li>
            <li>Neumann KM184 (2)</li>
            <li>Neumann KM183 (2)</li>
            <li>AKG C451 B (4)</li>
            <li>AKG C414 B-TLII (2)</li>
            <li>AKG C414 B-ULS (2)</li>
          </ul>
        </div>
        <div class="equipmentgroup">
          <h3 class="equipmentsubheading">&nbsp;</h3>
          <ul class="equipmentlist">
            <li>DPA 4006 Omnidirectional (2)</li>
            <li>Blue Baby Bottle</li>
            <li>Rode NT1000 (2)</li>
            <li>Rode NT Classic (2)</li>
            <li>AKG D112</li>
            <li>Shure Beta52</li>
            <li>Shure SM57 (6)</li>
            <li>Sennheiser White MD421 [vintage] (3)</li>
            <li>Sennheiser Black MD421 (4)</li>
            <li>Sennheiser MD441</li>
            <li>Electro Voice RE20</li>
            <li>Electro Voice RE27</li>
          </ul>
        </div>

    </div>
  </div>  
</div>    
<?php 
//if template is 'equipment.php' include footer
if( $pagefilename == 'equipment.php' ) {
	include 'inc_footer.php';
}
?>