/********************************************************************************************
  this is the inlinefooter.js file that will run once the page is drawn
  just before the </body> tag.
********************************************************************************************/
//instantiate GalleryHTML
updateDeviceMode(); //buildgallery.js 

//hide gallery-container (default)
$('#gallery-container').hide();

//animated hamburger toggle
document.querySelector( "#nav-toggle" )
  .addEventListener( "click", function() {
	this.classList.toggle( "active" );
});
//reset nav-toggle on nav click 
document.querySelector( "#slidx_menu" )
  .addEventListener( "click", function() {
	  var hamburger = document.getElementById("nav-toggle");
	  hamburger.classList.toggle( "active" );
});

//show galleryContainer when first image is clicked
document.querySelector( "#view-gallery" )
  .addEventListener( "click", function() {
	  $('#gallery-container').show();
	  $('#facility-container').hide();
	  $('#equipment-container').hide();
	  $('#contact-container').hide();
	  window.mySwipe = $('#mySwipe').Swipe().data('Swipe'); //initialize (*moved to line 5)
		$('html, body').css({ 'overflow': 'hidden', 'height': '100%' }); //disable scrolling
});
//hide galleryContainer when exit is clicked 
document.querySelector( "#galleryHide" )
  .addEventListener( "click", function() {
	  $('#gallery-container').hide();
	  $('#facility-container').show();
	  $('#equipment-container').show();
	  $('#contact-container').show();
		$('html, body').css({ 'overflow': 'auto', 'height': 'auto' }); //re-enable scrolling
});
//hide toolbar in mobile safari/chrome
window.addEventListener("load", function() {
	setTimeout(function(){
		window.scrollTo(0, 1); //hide the address bar
	}, 0);
});

// equipment list defaults
$('#eq-body-outboard').hide(); $('#eq-body-mics').hide(); $('#icn-controlroom').hide(); 
