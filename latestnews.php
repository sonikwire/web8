<?php session_start();
$pagefilename = basename($_SERVER['PHP_SELF']);
//if template is 'latestnews.php' include header
if( $pagefilename == 'latestnews.php' ) {
	include 'inc_header.php';
}
?>
<div id="latestnews-container">
  <div class="gridContainer clearfix">
    <div id="swlatestnews" class="fluid">
      <br><br>
      <h1 class="pagetitlegrey">latest news</h1>
      <div style="color:#dddddd; font-size:1.2em; font-family:VaudDisplay-Thin; padding-left:2px;">
        now running AVID Pro Tools 11 / HDX + DControl 32
      </div>
      <div style="height:30px;" class="clearfix">&nbsp;</div>
      <br><br>
    </div>
  </div>  
</div>    
<?php 
//if template is 'latestnews.php' include footer
if( $pagefilename == 'latestnews.php' ) {
	include 'inc_footer.php';
}
?>