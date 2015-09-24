<?php session_start();
$pagefilename = basename($_SERVER['PHP_SELF']);
//if template is 'facility.php' include header
if( $pagefilename == 'facility.php' ) {
	include 'inc_header.php';
}
?>
<div id="facility-container">
  <div class="gridContainer clearfix">
    <div id="swfacility" class="fluid swcontentmain">
      <!--<h1 class="pagetitlemain">facility</h1>-->
      <div id='mySwipe' style='margin:0 auto' class='swipe'>
        <div class='swipe-wrap'>
          <div><img class="galleryImg" src="images/bgi_laketahoe_2048x1280.jpg" alt=""/></div>
          <div><img class="galleryImg" src="images/bgi_themoonappears_2048x1280.jpg" alt=""/></div>
          <div><img class="galleryImg" src="images/bgi_whalebeachii_2048x1280.jpg" alt=""/></div>
          <div><img class="galleryImg" src="images/bgi_gorgeousdayatbedruthansteps_2048x1280.jpg" alt=""/></div>
          <div><img class="galleryImg" src="images/bgi_heavenandearth_2048x1280.jpg" alt=""/></div>
          <div><img class="galleryImg" src="images/bgi_icelandsblackstones_2048x1280.jpg" alt=""/></div>
      </div>
      <div class="gallerynav">
        <button class="swgallery" onclick='mySwipe.prev()'>&lt;&nbsp;prev</button> 
        <button class="swgallery" onclick='mySwipe.next()'>next&nbsp;&gt;</button>
      </div>

    </div> 
  </div>
</div>      
<?php 
//if template is 'facility.php' include footer
if( $pagefilename == 'facility.php' ) {
	include 'inc_footer.php';
}
?>