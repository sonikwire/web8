<?php session_start();
$pagefilename = basename($_SERVER['PHP_SELF']);
//if template is 'equipment.php' include header
if( $pagefilename == 'equipment.php' ) {
	include 'inc_header.php';
}
?>
<div id="equipment-container">
  <div class="gridContainer clearfix">
    <div id="swequipment" class="fluid">
      <h1 class="pagetitlemain">equipment</h1>
      
      <div class="eq-section-shell"> 
        <div id="hdg-controlroom" class="eq-section-heading" onClick="eqToggle(2000);eqacrdn('#eq-body-controlroom','#icn-controlroom','#hdg-controlroom');">
          <div id="icn-controlroom" class="eq-toggle-icon"></div>CONTROL ROOM</div>
        <div id="eq-body-controlroom">
        
            <div class="eql-column">  
              <div class="eql-grouping-2col">
                  <div class="eql-subhead-2col">CONSOLE</div>
                  <div class="eql-itembox-2col">
                    <div>Avid D-Control ES 32-fader</div>
                    <div>Neve BCM-10 sidecar</div>
                  </div>
              </div>
              <div class="eql-grouping-2col">
                  <div class="eql-subhead-2col">MONITORS</div>
                  <div class="eql-itembox-2col">
                    <div>Yamaha NS-10 with Subwooofer</div>
                    <div>Genelec 1031a</div>    
                    <div>Freestanding Dynaudio/Munro C4 Mains</div>
                  </div>
              </div>              
              <div class="eql-grouping-2col">
                  <div class="eql-subhead-2col">PRO TOOLS</div>
                  <div class="eql-itembox-2col">
                    <div>ProTools 11</div>
                    <div>Avid HDX1 with (2) HD I/O</div>
                    <div>Apple Mac Pro 6-Core, SSD, 32GB ram</div>
                  </div>
              </div>
            </div>
            <div class="eql-column">              
              <div class="eql-grouping-2col">
                  <div class="eql-subhead-2col">HEADPHONES</div>
                  <div class="eql-itembox-2col">
                    <div>Aviom Personal Monitoring System with (4) Control Units</div>
                  </div>
              </div>
              <div class="eql-grouping-2col">
                  <div class="eql-subhead-2col">INSTRUMENTS</div>
                  <div class="eql-itembox-2col">
                    <div>Yamaha U1 Upright Grand Piano</div>
                    <div>Hammond C3 + Leslie 122</div>
                  </div>
              </div>
              <div class="eql-grouping-2col">
                  <div class="eql-subhead-2col">CONTROL ROOM</div>
                  <div class="eql-itembox-2col">
                    <div>20’ x 22’ x 13’</div>
                  </div>
              </div>
              <div class="eql-grouping-2col">
                  <div class="eql-subhead-2col">BIG ROOM</div>
                  <div class="eql-itembox-2col">
                    <div>20’ x 18’ x 15’</div>
                  </div>
              </div>
              <div class="eql-grouping-2col">
                  <div class="eql-subhead-2col">ISO BOOTH</div>
                  <div class="eql-itembox-2col">
                    <div>10’ x 9’ x 8’</div>
                  </div>
              </div>
            </div> 
            <div class="clearfix"></div>
            
        </div>
      </div>
      
      <div class="eq-section-shell">
        <div id="hdg-outboard" class="eq-section-heading-dim" onClick="eqToggle(2000);eqacrdn('#eq-body-outboard','#icn-outboard','#hdg-outboard');">
          <div id="icn-outboard" class="eq-toggle-icon"></div>OUTBOARD</div>
        <div id="eq-body-outboard">
			<div class="eql-column">
              <div class="eql-grouping-2col">
                <div class="eql-subhead-2col">COMPRESSORS</div>
                <div class="eql-itembox-2col">
                  <div><div class="eql-qty">(2)</div>&nbsp;Universal Audio 1176</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;Universal Audio LA­2A</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;Empirical Labs Distressor</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;DBX 160vu</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Neve 34628</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Esoteric Audio Research 660</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Focusrite RED3</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Alan Smart C1</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Alan Smart C2</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Crane Song STC­8</div>
                </div>
              </div>
            </div>
            <div class="eql-column">
              <div class="eql-grouping-2col">
                <div class="eql-subhead-2col">MIC PRE/EQ</div>
                <div class="eql-itembox-2col">
                  <div><div class="eql-qty">(24)</div>&nbsp;Neve 1073, 1075 and 1084</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;Dan Alexander Neve 1272</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;Wunder Audio PEQ1</div>
                </div>
              </div>
              <div class="eql-grouping-2col">
                <div class="eql-subhead-2col">OUTBOARD EQ</div>
                <div class="eql-itembox-2col">
                  <div><div class="eql-qty">(1)</div>&nbsp;Pultec EQP­1A</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Pultec EQP­1S</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;Pultec EQH­2</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Manley Stereo Pultec</div>
                </div>
              </div>
              <div class="eql-grouping-2col">
                <div class="eql-subhead-2col">EFFECTS</div>
                <div class="eql-itembox-2col">
                  <div><div class="eql-qty">(1)</div>&nbsp;Eventide H3000DSE</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Eventide H8000</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;Line 6 Echo Pro</div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

        </div>
      </div>
      
      <div class="eq-section-shell">
        <div id="hdg-mics" class="eq-section-heading-dim" onClick="eqToggle(2000);eqacrdn('#eq-body-mics','#icn-mics','#hdg-mics');">
          <div id="icn-mics" class="eq-toggle-icon"></div>MICROPHONES</div>
        <div id="eq-body-mics">

            <div class="eql-column">
              <div class="eql-grouping-2col">
                <div class="eql-subhead-2col">TUBE Microphones</div>
                <div class="eql-itembox-2col">
                  <div><div class="eql-qty">(2)</div>&nbsp;Neumann M49</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;Neumann U48</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;Neumann U67</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;Neumann M149</div>
                  <div><div class="eql-qty">(3)</div>&nbsp;Neumann M150</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Neumann M147</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Telefunken ELA M­251</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Soundelux ELUX 251</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;AKG C12</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;AKG C12 VR</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Sony C800G</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Brauner VM1 (Klaus Heyne Edition)</div>
                </div>
              </div>
              <div class="eql-grouping-2col">
                <div class="eql-subhead-2col">CONDENSER Microphones</div>
                <div class="eql-itembox-2col">
                  <div><div class="eql-qty">(5)</div>&nbsp;Neumann U87</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Neumann U47 fet</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;AKG C414 B­TLII</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;AKG C414 B­ULS</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Blue Baby Bottle</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;Rode NT Classic</div>
                </div>
              </div>
            </div>
            <div class="eql-column">
              <div class="eql-grouping-2col">
                <div class="eql-subhead-2col">SMALL DIAPHRAGM Microphones</div>
                <div class="eql-itembox-2col">
                  <div><div class="eql-qty">(4)</div>&nbsp;AKG C451 B</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;Neumann KM184</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;Neumann KM183 Omnidirectional</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;DPA 4006 Omnidirectional</div>
                </div>
              </div>
              <div class="eql-grouping-2col">
                <div class="eql-subhead-2col">RIBBON Microphones</div>
                <div class="eql-itembox-2col">
                  <div><div class="eql-qty">(1)</div>&nbsp;Royer R­121 Ribbon</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;Coles 4038 Ribbon</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;AEA R44C Ribbon</div>
                  <div><div class="eql-qty">(2)</div>&nbsp;AEA R84 Ribbon</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;AEA R88 Stereo Ribbon</div>  
                </div>
              </div>
              <div class="eql-grouping-2col">
                <div class="eql-subhead-2col">DYNAMIC Microphones</div>
                <div class="eql-itembox-2col">
                  <div><div class="eql-qty">(6)</div>&nbsp;Shure SM57</div>
                  <div><div class="eql-qty">(4)</div>&nbsp;Sennheiser Black MD421</div>
                  <div><div class="eql-qty">(3)</div>&nbsp;Sennheiser White MD421</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Sennheiser MD441</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Electro Voice RE20</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Electro Voice RE27</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;AKG D112</div>
                  <div><div class="eql-qty">(1)</div>&nbsp;Shure Beta52</div>
                </div>
              </div>
            </div>
			<div class="clearfix"></div>
            
        </div>
        <div class="clearfix"></div>
      </div>
      <div style="height:30px;" class="clearfix">&nbsp;</div>

    </div>
  </div>  
</div>    
<?php 
//if template is 'equipment.php' include footer
if( $pagefilename == 'equipment.php' ) {
	include 'inc_footer.php';
}
?>