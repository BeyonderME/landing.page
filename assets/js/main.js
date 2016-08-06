$(document).ready(function() {
	$('#how-it-works').hide();
	$('#show-how-it-works').on('click', function(){
		$('#how-it-works').slideDown();
	});
	
	var howItWorksCarousel = undefined;
	var buildHowItWorksCarousel = function()
	{
		if(typeof howItWorksCarousel === 'undefined')
		{
			$("#how-it-works-carousel").owlCarousel({
				singleItem: true,
				paginationNumbers: true
			});
			howItWorksCarousel = $('.owl-carousel').data('owlCarousel');
			console.log('Owl Carousel build');
		}
	};
	var destroyHowItWorksCarousel = function()
	{
		if(typeof howItWorksCarousel === 'object')
		{
			howItWorksCarousel.destroy();
			howItWorksCarousel = undefined;
			console.log('Owl Carousel destroyed');
		}
	};
	
	if($(window).width() < 768)
	{
		buildHowItWorksCarousel();
	}
	$(window).resize(function(){
		if($(window).width() < 768)
		{
			buildHowItWorksCarousel();
		}
		else 
		{
			destroyHowItWorksCarousel();
		}
	});
	
	
	
});