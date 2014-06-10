$(document).ready(function(){
	var carousel = $('#carousel');
	var slides = $('#carousel li');
	var slideWidth = $('#carousel li').width();
	var totalSlides = $('#carousel li').length;
	var totalSlidesWidth = (totalSlides * slideWidth);
	var speed = 500;
	var i;
		
	//On Load
	$('ul#carousel').css('width', totalSlidesWidth + 'px');

/*
	for (i=0; i<totalSlides; i++){
		$('#blobs ul').append('<li><a href="' + i + '"></a></li>');
	};
*/
	
	$('#carousel li:first').before($('#carousel li:last')); 		
	
	//Buttons NXT
	$('.btn-nxt').bind('click', function(){

		$('ul#carousel:not(:animated)').animate({'left' : '-=' + slideWidth + 'px'}, speed, function(){
		
			$('#carousel li:last').after($('#carousel li:first'));
			$('#carousel').css({'left' : '-800px'});  		
			
		});
		
	});
	
	//Buttons PREV
	$('.btn-prev').bind('click', function(){		
				
		$('ul#carousel:not(:animated)').animate({'left' : '+=' + slideWidth + 'px'}, speed, function(){

			$('#carousel li:first').before($('#carousel li:last'));
			$('#carousel').css({'left' : '-800px'});  		
		
		});
		
	});	

	//Auto Play
	var intervalId = 0;
	var timer = 1000;
	
	function autoPlay(){

		$('.btn-nxt').trigger('click');
				
	};
	
	intervalId = setInterval (autoPlay, timer);	

	$('#carousel, .btn-nxt, .btn-prev, #blobs').hover( function(){
	
		 clearTimeout(intervalId);
	
	}, function(){
	
		intervalId = setInterval (autoPlay, timer);	
		
	});
	
	//Blobs nav
/*
	$('#blobs ul li a').bind('click', function(){
	
		var xslide = $(this).attr('href');		
		var slideOffset = $(slides[xslide]).position();
		var iTotal = totalSlides - 1;
		xslide = parseInt(xslide);
		currentPos = xslide + 1;
		
		$('ul#carousel').animate({'left': '-' + slideOffset.left + 'px'}, speed);		

		$('#blobs a').removeClass();
		$(this).addClass('active');

		return false;		
	});
*/
		
});
