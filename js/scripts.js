$(function(){

	console.log("It's working");
	$('.main-gallery').flickity({
	  // options
	  cellAlign: 'center',
	  contain: true,
	  imagesLoaded: true,
	  wrapAround: true,
	  autoPlay: true
	});

});