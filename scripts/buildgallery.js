/********************************************************************************************
  the function will generate innerHTML for the image gallery based on deviceMode 
	deviceMode = LND-DSK (Landscape Desktop), for example
	  [  Landscape : LND   Portrait: PTR  |  Mobile: MBL   Tablet: TBL   Desktop: DSK  ]
********************************************************************************************/

//output galleryHTML based on device type & orientation
function buildGallery(deviceMode) {
	//init variables
	var imgPrefix = "";
	var imgExt = "";
	var imgTitle = "";
	var imgOutputHtml = "";
	//master imageList
	var imageList = [
		{'imgPrefix':'neve-racks', 'imgExt':'jpg', 'imgTitle':'Neve Racks'},
		{'imgPrefix':'dcontrol-ns10', 'imgExt':'jpg', 'imgTitle':'Dcontrol and NS10s'},
		{'imgPrefix':'hammond-c3', 'imgExt':'jpg', 'imgTitle':'Hammond C3'},
		{'imgPrefix':'avid-icon', 'imgExt':'jpg', 'imgTitle':'Avid Icon'}
	];
	
	//get length of imageList
	objLen = Object.keys(imageList); 
	//loop over images & create gallery innerHTML
	for(i = 0; i < objLen.length; i++){
		var imgObj = imageList[i]; //get current imageObject [i]
		var html = "<div><img class=\"galleryImg\" src=\"images/gal/"+imgObj["imgPrefix"]+"_"+deviceMode+"."+imgObj["imgExt"]+"\" alt=\""+imgObj["imgTitle"]+"\"/></div>";
		imgOutputHtml += html; 			
	}
	//output gallery html //console.log(imgOutputHtml);
	$('#swipeWrap').html(imgOutputHtml);
	//initialize new Swipe object with updated data 
	window.mySwipe = $('#mySwipe').Swipe().data('Swipe'); //re-initialize (see also: inlinefooter.js)
	  //$('html, body').css({ 'overflow': 'hidden', 'height': '100%' }); //disable scrolling
}

//determine screen size and orientation for image gallery optimization
function updateDeviceMode() {
	var height	= $(window).height();
	var width 	= $(window).width();
	if (width>height) { var mode="LND"; var maxDim=width; } else { var mode="PTR"; var maxDim=height; }
	if (maxDim < 768) { var devType = "MBL"; } else if (maxDim >= 768 && maxDim < 1080) { var devType = "TBL"; } else { var devType = "DSK"; }
	var deviceMode = mode+'-'+devType; //$("#mode").text(deviceId); //debugging 
	//call above function to generate gallery HTML
	buildGallery(deviceMode); 
}
