$(document).ready( function(){
	
	//Hover opacity for arrows
	$('#arrow-horizontal a, #arrow-vertical a').hover( function(){
		$(this).css('opacity', '0.5')	
	}, function(){
		$(this).css('opacity', '1')
	});

	//Remove scrollbar
	$('body').css('overflow', 'hidden');

	//Width of viewport
	var winResize = $(document).width();
	$('#viewport, .slides').css('width', winResize);

	//Refresh page on window resize
	function reloadPage() {
		  window.location.href = '';
	};
		
	$(window).resize(function() {
		reloadPage();
	});
		
	//Close box panels
	$('a.close').click( function(){
		$(this).parent().parent().fadeOut();
	});	

	//Draggable
	$('.box').draggable();
			
	//Hide on start
	$('.btn-arrow-left, .btn-arrow-up').hide();	

	//Animate top and bottom
	var slide = $('.slides');
	var slideHeight = 1200;
	var totalSlides = $('#vertical-slides .slides').length;
	var totalHeightSlides = totalSlides * slideHeight;
	var currentPos = 1;
	var speed = 1000;
	
	$('.btn-arrow-down').click( function(){
		
		currentPos++	

		$('#vertical-slides').animate({'top': '-=' + slideHeight + 'px'}, speed);
		
		if( currentPos >= totalSlides ){
			$('.btn-arrow-down').hide();	
		};		
		
		if(currentPos > 1){
			$('.btn-arrow-up').show();
		};

	});

	$('.btn-arrow-up').click( function(){
	
		currentPos--
				
		$('#vertical-slides').animate({'top': '+=' + slideHeight + 'px'}, speed);
			
		if( currentPos == 1 ){
			$('.btn-arrow-up').hide();	
		};

		if( currentPos <= totalSlides ){
			$('.btn-arrow-down').show();	
		};				
		
	});

	//Animate left and right
	var sideSlide = $('#horizontal-slides .slides');
	var sideSlideWidth = winResize + 300;
	var sideTotalSlides = $('#horizontal-slides .slides').length;
	var sideTotalSlidesWidth = sideTotalSlides * sideSlideWidth;
	var sideCurrentPos = 1;

	//Add total slides width to respective container
	$('#horizontal-slides').css('width', sideTotalSlidesWidth + '300' + 'px')

	$('.btn-arrow-right').click( function(){
		
		sideCurrentPos++	

		$('#horizontal-slides').animate({'left': '-=' + sideSlideWidth + 'px'}, speed);
		
		if( sideCurrentPos >= totalSlides ){
			$('.btn-arrow-right').hide();	
		};		
		
		if( sideCurrentPos > 1 ){
			$('.btn-arrow-left').show();
		};
		
	});
	
	$('.btn-arrow-left').click( function(){
		
		sideCurrentPos--	

		$('#horizontal-slides').animate({'left': '+=' + sideSlideWidth + 'px'}, speed);
		
		if( sideCurrentPos == 1 ){
			$('.btn-arrow-left').hide();
		};

		if( sideCurrentPos >= totalSlides ){
			$('.btn-arrow-right').hide();	
		};		
		
		if( sideCurrentPos >= 1 ){
			$('.btn-arrow-right').show();
		};

	});
	
	//Choices of slides	
	$('.btn-arrow-left, .btn-arrow-right').click( function(){
	
		$('#vertical-slides').hide();
		$('#arrow-vertical').hide();
		$('#horizontal-slides').show();

		//On navigating to first slide show all arrows		
		if( sideCurrentPos == 1 ){
			$('#arrow-vertical').show();
		};		
		
	});
	
	$('.btn-arrow-up, .btn-arrow-down').click( function(){
	
		$('#horizontal-slides').hide();
		$('#arrow-horizontal').hide();		
		$('#vertical-slides').show();		

		//On navigating to first slide show UP and Down arrows		
		if( currentPos == 1 ){
			$('#arrow-horizontal').show();
		};		

	});		

	//Back to Start	
	var firstSlide = $('.slides:first-child').offset();
	var sideFirstSlide = $('.slides:first-child').offset();

	$('#back-to-start a').click( function(){
		currentPos = 1
		sideCurrentPos = 1	
		$('#vertical-slides').animate({'top': '-' + firstSlide.top + 'px'}, speed);
		$('#horizontal-slides').animate({'left': '-' + firstSlide.top + 'px'}, speed);
		$('#arrow-horizontal, #arrow-vertical').show();
		$('#arrow-horizontal a, #arrow-vertical a').show();
		$('.btn-arrow-left, .btn-arrow-up').hide();
	});	
		
});