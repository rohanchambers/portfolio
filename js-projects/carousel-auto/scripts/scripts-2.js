$(document).ready(function(){
	var carousel = $('#carousel');
	var slides = $('#carousel li');
	var slideWidth = $('#carousel li').width();
	var totalSlides = $('#carousel li').length;
	var totalSlidesWidth = (totalSlides * slideWidth);
	var speed = 500;
		
	//On Load
	$('ul#carousel').css('width', totalSlidesWidth + 'px');
	
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
		
});
