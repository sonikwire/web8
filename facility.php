<?php session_start();
$pagefilename = basename($_SERVER['PHP_SELF']);
//if template is 'facility.php' include header
if( $pagefilename == 'facility.php' ) {
	include 'inc_header.php';
}
?>
<div id="facility-container">
<div style="height:60px;">&nbsp;</div>
<img src="images/bgi_controlroom-shot.jpg" class="homeFeatureImg" />
  <div id="galleryLinkLauncher">
    <div id="view-gallery">
    </div>
  </div> 
  <div class="gridContainer clearfix">
    <div id="swfacility" class="fluid">
    </div>
  </div>
</div>
<?php 
//if template is 'facility.php' include footer
if( $pagefilename == 'facility.php' ) {
	include 'inc_footer.php';
}
?>