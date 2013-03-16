$(document).ready(function(){

	var slides = $('ul#carousel li');
	var slideWidth = $('ul#carousel li').width();
	var totalSlides = $('ul#carousel li').length;
	var totalSlidesWidth = (totalSlides * slideWidth);
	var currentPos = 1;
	var speed = 1000;
	var i;
		
	//On Load
	$('ul#carousel').css('width', totalSlidesWidth + 'px');
	
	if(currentPos == 1){
		$('a.btn-prev').hide();	
	};
	
	for (i=0; i<totalSlides; i++){
		$('#blobs ul').append('<li><a href="' + i + '"></a></li>');
	};
	
	//Blobs rule
	var allBlobs = $('#blobs li a');
	
	if(currentPos == 1){
		$(allBlobs[0]).addClass('active');
	};
	
	//Buttons nxt and prev
	$('.btn-nxt').bind('click', function(){
		currentPos++;
				
		if(currentPos > 1){
			$('a.btn-prev').show();
		};

		if(currentPos -1 == totalSlides){
			$('ul#carousel').animate({'left' : '0px'}, function(){
				currentPos = 1;	
				$(allBlobs[currentPos - 1]).addClass('active');
				$('a.btn-prev').hide();
			});				
		}else {
			$('ul#carousel').animate({'left' : '-=' + slideWidth + 'px'}, speed/* , 'easeInOutExpo' */);
		};
			
		//Blobs rule	
		allBlobs.removeClass();
		$(allBlobs[currentPos - 1]).addClass('active');
			
	});

	$('.btn-prev').bind('click', function(){		
		currentPos--;
		
		if(currentPos == 1){
			$('a.btn-prev').hide();	
		};
		
		if(currentPos <= totalSlides){
			$('a.btn-nxt').show();
		};
		
		$('ul#carousel').animate({'left' : '+=' + slideWidth + 'px'}, speed/* , 'easeInOutExpo' */);

		//Blobs rule					
		allBlobs.removeClass();
		$(allBlobs[currentPos - 1]).addClass('active');	
		
	});	

	//Blobs nav
	$('#blobs ul li a').bind('click', function(){
	
		var xslide = $(this).attr('href');		
		var slideOffset = $(slides[xslide]).position();
		var iTotal = totalSlides - 1;
		xslide = parseInt(xslide);
		currentPos = xslide + 1;
		
		$('ul#carousel').animate({'left': '-' + slideOffset.left + 'px'}, speed);		

		if( xslide == 0){
			$('a.btn-prev').hide();
		};
		
		if( xslide > 0){
			$('a.btn-prev').show();
		};
				
		if( xslide < iTotal){				
			$('a.btn-nxt').show();
		};

		$('#blobs a').removeClass();
		$(this).addClass('active');

		return false;		
	});

	//Auto Play
	var intervalId = 0;
	var timer = 4000;
	
	function autoPlay(){
		currentPos++;
		
		$('ul#carousel').animate({'left' : '-=' + slideWidth + 'px'}, speed);
		
		//If last slide animate to first slide
		if(currentPos == totalSlides +1){
			$('ul#carousel').stop();		
			$('ul#carousel').animate({'left' : '0px'});
			currentPos = 1;				
		};
		
		if(currentPos ==  1){
			$('.btn-prev').hide();
		};
		
		if(currentPos > 1){
			$('.btn-prev').show();
		};
		
		//Blobs rule	
		allBlobs.removeClass();
		$(allBlobs[currentPos - 1]).addClass('active');	
				
	};
	
	intervalId = setInterval (autoPlay, timer);	
	
	$('ul#carousel, a.btn-nxt, a.btn-prev').stop().hover( function(){
		clearInterval(intervalId)
	}, function(){
		intervalId = setInterval (autoPlay, timer);
	});

/*
	//Cursor left + right functionality
	$(document.documentElement).keyup(function (event) {
	
		// handle cursor keys
		if (event.keyCode == 37) {
			// go left
			currentPos--;
			$('ul#carousel').animate({'left' : '+=' + slideWidth + 'px'}, speed);
			alert(currentPos)
		} else if (event.keyCode == 39) {
			// go right
			currentPos++;
			$('ul#carousel').animate({'left' : '-=' + slideWidth + 'px'}, speed);
			alert(currentPos)
		}
	
	});	
*/
	
});