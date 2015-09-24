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
       		
      <h3 class="equipmentheading">STUDIO A</h3>	
      
        <div class="equipmentgroup">
          <h3 class="equipmentsubheading">Console:</h3>
          <ul class="equipmentlist">
            <li>Avid (Digidesign) D-Control 32</li>
            <li>Argosy Mirage for D-Control 32</li>
            <li>Neve BCM-10 Console [vintage]</li>
          </ul>
        </div>
        <div class="equipmentgroup">
          <h3 class="equipmentsubheading">ProTools:</h3>
          <ul class="equipmentlist">
            <li>Apple MacPro</li>
            <li>ProTools HDX</li>
            <li>Digidesign HD I/O</li>
            <li>ProTools Version 10 &amp; 11</li>
          </ul>
        </div>
        <div class="equipmentgroup clearfix">
          <h3 class="equipmentsubheading">Monitoring:</h3>
          <ul class="equipmentlist">
            <li>Yamaha NS-10 + SW10 Subwoofer</li>
            <li>Quested HQ210 (2) Mains</li>
            <li>Quested QSB118 (2) Subwoofer</li>
            <li>Genelec 1030a <em>(Opt)</em></li>
            <li>Genelec 1031a <em>(Opt)</em></li>
            <li>Genelec 7070a subwoofer <em>(Opt)</em></li>
            <li>&nbsp;</li>
          </ul>
        </div>
    
    <h3 class="equipmentheading">MICS &amp; OUTBOARD</h3>	
      
        <div class="equipmentgroup">
          <h3 class="equipmentsubheading">Mic Pre's/EQ's:</h3>
          <ul class="equipmentlist">
            <li>Neve 1073 (14)</li>
            <li>Neve 1082 (2)</li>
            <li>Telefunken V76</li>
            <li>Focusrite ISA110 (2) <em>(Opt)</em></li>
            <li>Martech MSS-10 (2)</li>
            <li>Neve 1081R Remote Control <em>(Opt)</em></li>
          </ul>
        <!--</div><div class="equipmentgroup">-->
          <h3 class="equipmentsubheading">Outboard EQ's:</h3>
          <ul class="equipmentlist">
            <li>Pultec EQP-1A</li>
            <li>Pultec EQP-1A3</li>
            <li>Pultec EQP-1S</li>
            <li>Pultec EQH-2 (2)</li>
            <li>Manley Stereo Pultec</li>
          </ul>
        <!--</div><div class="equipmentgroup">-->
          <h3 class="equipmentsubheading">Cue System:</h3>
          <ul class="equipmentlist">
            <li>Aviom Personal Monitoring</li>
            <li>Aviom Control Units (5)</li>
          </ul>
        <!--</div><div class="equipmentgroup">-->
          <h3 class="equipmentsubheading">Effects:</h3>
          <ul class="equipmentlist">
            <li>Lexicon 480L</li>
            <li>Lexicon 960L</li>
            <li>Lexicon PCM81</li>
            <li>Lexicon PCM91</li>
            <li>TC Electronics System 3000</li>
            <li>TC Electronics M3000</li>
            <li>Eventide H3000-D/SE</li>
            <li>Eventide H8000</li>
            <li>Eventide 2016 Princeton Digital</li>
          </ul>
        </div>
        <div class="equipmentgroup">
          <h3 class="equipmentsubheading">Compressors:</h3>
          <ul class="equipmentlist">
            <li>Alan Smart C1 &amp; C2</li>
            <li>Empirical Labs Distressor (2)</li>
            <li>Focusrite Red3</li>
            <li>Universal Audio 1176 (2)</li>
            <li>Universal Audio LA-2A (2)</li>
            <li>Esoteric Audio Research 660</li>
            <li>DBX 160vu (2)</li>
            <li>DBX 902 Deesser (2)</li>
            <li>Millenia Twincom</li>
            <li>Neve 2254/e (2)</li>
            <li>Neve 34628</li>
            <li>Neve 32264a (2)</li>
            <li>Crane Song STC-8</li>
            <li>Summit DCL-200</li>
            <li>Manley Slam</li>
          </ul>
        <!--</div><div class="equipmentgroup">-->
          <h3 class="equipmentsubheading">Microphones:</h3>
          <ul class="equipmentlist">
            <li>Telefunken ELA M-251 [vintage]</li>
            <li>Dirk Brauner VM1 Klaus Heyne Ltd</li>
            <li>AKG C12 [vintage-1960s]</li>
            <li>AKG C24 [vintage-1960s]</li>
            <li>Neumann M49 [vintage-1955]<br>Klaus Heyne Mod (2)</li>
            <li>Neumann U47 [vintage-1959] (2)</li>
            <li>Neumann U48 [vintage-1959]</li>
            <li>Neumann U67 [vintage-1960s]</li>
            <li>Neumann U87 [vintage-1960s] (5)</li>
            <li>Neumann M149 (2)</li>
            <li>Neumann M150 (3)</li>
            <li>Neumann M147</li>
            <li>Neumann U47 fet</li>
          </ul>
        </div>
        <div class="equipmentgroup">
          <h3 class="equipmentsubheading">Microphones <em>continued</em>:</h3>
          <ul class="equipmentlist">
            <li>Sony C800G</li>
            <li>Manley Gold Reference Stereo</li>
            <li>Royer R-121 Ribbon</li>
            <li>Coles 4038 Ribbon (2)</li>
            <li>AEA R44C Ribbon (2)</li>
            <li>AEA R84 Ribbon (2)</li>
            <li>AEA R88 Ribbon (Stereo)</li>
            <li>AKG C12 VR</li>
            <li>Soundelux ELUX 251</li>
            <li>Soundelux U195</li>
            <li>Neumann KM184 (2)</li>
            <li>Neumann KM183 (2)</li>
            <li>AKG C451 B (4)</li>
            <li>AKG C414 B-TLII (2)</li>
            <li>AKG C414 B-ULS (2)</li>
            <li>DPA 4006 Omnidirectional (2)</li>
            <li>Microtech Gefell UMT800</li>
            <li>Blue Baby Bottle</li>
            <li>Studio Projects T3</li>
            <li>Studio Projects C3</li>
            <li>Rode NT1000 (2)</li>
            <li>Rode NT Classic (2)</li>
            <li>CAD VX2</li>
            <li>AKG D112</li>
            <li>Shure Beta52</li>
            <li>Shure SM57 (6)</li>
            <li>Sennheiser White MD421 (3) [vintage]</li>
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