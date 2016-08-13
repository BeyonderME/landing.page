//Interações do How It Works
$(document).ready(function() {
	$('#how-it-works').hide();
	$('#show-how-it-works').on('click', function(){
		$('#how-it-works').slideDown();
	});
	$('#hide-how-it-works').on('click', function(){
		$('#how-it-works').slideUp();
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

//Interações do formulário
$(document).ready(function() {
	$('[data-toggle=popover]').popover();
	
	var validateForm = function() {
		var emailVal = $('input[name=email]').val();
		if(emailVal === '') {
			showErrorPopover($('.email-popover'), 'Preencha com seu endereço de email');
			return false;
		}
		
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if(!emailReg.test(emailVal)) {
			showErrorPopover($('.email-popover'), 'Preencha com um endereço de email válido');
			return false;
		}
		
		return true;
	};
	var showErrorPopover = function(el, msg) {
		el.attr('data-content', msg);
		el.popover('show');
		
		setTimeout(function(){
			el.popover('hide');
		}, 5000);
	};
	
	$('#landing-page-form').submit(function(e){
		e.preventDefault();
		
		if(validateForm()) {
			console.log( $( this ).serializeArray() );
		}
			
	});
});