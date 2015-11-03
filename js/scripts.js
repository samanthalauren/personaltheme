$(function(){

	console.log("It's working");
	$('.main-gallery').flickity({
	  // options
	  cellAlign: 'left',
	  contain: true,
	  imagesLoaded: true,
	  wrapAround: true
	});

});