<?php session_start();
$pagefilename = basename($_SERVER['PHP_SELF']);
//if template is 'resources.php' include header
if( $pagefilename == 'resources.php' ) {
	include 'inc_header.php';
}
?>
<div id="resources-container">
  <div class="gridContainer clearfix">
    <div id="swlatestnews" class="fluid">
      <br><br>
      <h1 class="pagetitlebleu">resources</h1>
      <div style="color:#999999;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt lacus ultricies pretium facilisis. Vestibulum vitae lacus maximus, auctor libero eu, tristique felis. Nullam tempus malesuada lorem eget convallis. Sed sagittis mauris ac nibh commodo, id scelerisque sem dignissim. 
      </div>
      <div style="height:30px;" class="clearfix">&nbsp;</div>
      <br><br>
    </div>
  </div>  
</div>    
<?php 
//if template is 'resources.php' include footer
if( $pagefilename == 'resources.php' ) {
	include 'inc_footer.php';
}
?>