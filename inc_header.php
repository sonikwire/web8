<?php  
$pagefilename	= basename($_SERVER['PHP_SELF']);
$pagename 		= substr($pagefilename,0,strlen($pagefilename)-4);
$pagetitle 		= strtolower($pagename);
if ($pagefilename == 'index.php') {
  $pagename		= 'a premier commercial recording facility';
}
//$pageid 	    = 'sw';
//$pageid      .= $pagetitle;
?>
<!doctype html>
<html class="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1; user-scalable=0;">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <title>sonikwire studio | <?php echo $pagetitle; ?></title>
  <link href="styles/boilerplate.css" rel="stylesheet" type="text/css">
  <link href="styles/fluid-grid.css?k=7" rel="stylesheet" type="text/css">
  <link href="styles/custom.css?k=7" rel="stylesheet" type="text/css">
  <script src="scripts/modernizr-2.8.3.html5.js"></script>
  <script src="scripts/jquery-1.9.1.min.js"></script>
  <script src="scripts/respond.min.js"></script>
  <script src="scripts/contact.js"></script>
  <script src="scripts/slidx.js"></script>	
  <script src="scripts/swipe.js"></script>
  <script src="scripts/smartresize.js"></script>
  <script src="scripts/buildgallery.js?k=7"></script>
  <script src="scripts/inlineheader.js?k=7"></script>
</head>
<body onorientationchange="updateOrientation();">
  <?php include 'inc_menu.php';?>
  <?php include 'inc_masthead.php';?>
  <?php include 'inc_gallery.php';?>