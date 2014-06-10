$(document).ready(function(){

	var carousel = $('#carousel');
	var slides = $('#carousel li');
	var slideWidth = $('#carousel li').width();
	var totalSlides = $('#carousel li').length;
	var totalSlidesWidth = (totalSlides * slideWidth);
	var speed = 500;
	var currentPos = 1;	
		
	//On Load
	$('#carousel').css('width', totalSlidesWidth + 'px');

	//Buttons NXT
	$("#carousel").swipe({
	  swipe:function(phase, event, direction, distance, duration, fingerCount){
	    $('h2').text("You swiped " + direction + " for " + distance + "px" );
	  },	  
	  threshold:20,

	  swipeLeft:function(phase, event, direction, distance, duration, fingerCount){
	  	currentPos++
	  	alert(currentPos)	  
	  	$('#carousel:not(:animated)').animate({'left' : '-=' + slideWidth + 'px'}, speed);

		if(currentPos == 1){
			console.log('first');
		};
	  },

	  swipeRight:function(event, direction, distance, duration, fingerCount){
	  	currentPos--
	  	alert(currentPos)
	  	$('#carousel:not(:animated)').animate({'left' : '+=' + slideWidth + 'px'}, speed);

		if(currentPos == 4){
			 alert('Last')
		};
	  }

	});




	// $('.btn-nxt').bind('click', function(){
	// 	$('#carousel:not(:animated)').animate({'left' : '-=' + slideWidth + 'px'}, speed);
	// });
	
	// //Buttons PREV
	// $('.btn-prev').bind('click', function(){					
	// 	$('#carousel:not(:animated)').animate({'left' : '+=' + slideWidth + 'px'}, speed);		
	// });	

});
