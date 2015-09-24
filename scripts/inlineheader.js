/********************************************************************************************
  this is the inlineheader.js code that runs just before the <body> tag
  includes important resize and orientation detection scripts.
		see: buildgallery.js  for gallery / device mode
********************************************************************************************/
// smart resize (http://www.paulirish.com/2009/throttled-smartresize-jquery-event-handler/)
$(window).smartresize(function(){
  updateDeviceMode(); //change gallery orientation (debounced)
});

// conditional padding based on page var | formerly: $(location).attr('hash');
function ttlMrgn(page) {
  $('#swequipment').removeClass("swcontentmain");
  $('#swcontact').removeClass("swcontentmain");
  if 		( page === "equipment" )	{ $('#swequipment').addClass("swcontentmain"); }
  else if   ( page === "contact" )		{ $('#swcontact').addClass("swcontentmain"); }
}

//eqipment list functions
function eqacrdn(section,icon,heading) { 
  $('#hdg-controlroom').removeClass("eq-section-heading").addClass("eq-section-heading-dim"); $('#hdg-outboard').removeClass("eq-section-heading").addClass("eq-section-heading-dim"); 
  $('#hdg-mics').removeClass("eq-section-heading").addClass("eq-section-heading-dim"); $(heading).removeClass("eq-section-heading-dim").addClass("eq-section-heading");
  $('#eq-body-controlroom').hide("fast"); $('#eq-body-outboard').hide("fast"); $('#eq-body-mics').hide("fast"); 
  $('#icn-controlroom').show("fast"); $('#icn-outboard').show("fast"); $('#icn-mics').show("fast"); $(section).show("fast"); $(icon).hide("fast"); 
}


//move to top of equipment list on section change
function eqLocate() { 
	document.location='#equipment-container'; 
}
//set delay before JQuery animation (after moving to top of equipment page) | eqToggle(2000);
function eqToggle(delayTime) {
	ttlMrgn('equipment');
	window.setTimeout(eqLocate(),delayTime);
}
