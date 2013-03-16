$(document).ready(function(){

//LIGHTBOX

	var thumbs = $('ul#thumbs li a');
	var thumbsTotal = $('ul#thumbs li a').length;
	var lightbox = $('#lightbox');
	var lightboxPanel = $('#lightbox-panel');
	var speed = 200;
	var slides = $('ul#carousel li');
	var img = new Image()
	//var imgSrc = $('ul#thumbs li a').attr('href');
	
	for(i=0; i<thumbsTotal-1; i++){				
		$('ul#carousel').append('<li><a href="'+ i +'"><img src="' + $(thumbs[i]).attr('href') + '" /></a></li>');		
	};	
		
	$(thumbs).bind('click', function(){	
						
		var imgTitle = $(this).attr('title');
		
		$(lightbox).fadeIn(speed, function(){
			$(lightboxPanel).fadeIn('slow');
			//$('ul#carousel').animate({'left': '-' + currentOffset.left + 'px'}, speed);
			$('#description').empty();
			$('#description').append(imgTitle);				
		});	
				
		return false;	 
						
	});

	$('html, body, #close a').bind('click', function(){			
		$('#lightbox, #lightbox-panel').fadeOut(speed);		
	});

	$('#image-container, #description, #carousel-container').bind('click', function(){			
		return false;		
	});	
	
	//Escape Command to close lightbox
    $(document).bind('keydown', function(e) { 
	    if (e.which == 27) {
	        $('#lightbox, #lightbox-panel').fadeOut(speed);
	    }
    }); 


//CAROUSEL
	
	var slides = $('ul#carousel li');
	var slideWidth = 934;
	var totalSlides = $('ul#carousel li').length;
	var totalSlidesWidth = (totalSlides * slideWidth);
	var currentPos = 1;
	var speed = 500;
	var i;
						
	//Document ready	
	$('ul#carousel').css('width', totalSlidesWidth + 'px');
	
	if(currentPos == 1){
		$('a.btn-prev').hide();
	};					
	
	for(i=0; i<totalSlides; i++){		
		$('#blobs ul').append('<li><a href="' + i + '"></a></li>');
	};	
				
	//Blobs rule
	var allBlobs = $('#blobs ul li a');
	
	if(currentPos == 1){
		$(allBlobs[currentPos - 1]).addClass('active');
	};
		
	//Carousel Animate via buttons	
	$('a.btn-nxt').bind('click', function(){
		currentPos++;
		
		if(currentPos > 1){
			$('a.btn-prev').show();
		};
		
		if(currentPos >= totalSlides){
			$('a.btn-nxt').hide();
		};
		
		$('ul#carousel').animate({'left': '-=934px'}, speed);		
		

		var allBlobs = $('#blobs ul li a');			
		
		//Blobs rule	
		$('#blobs ul li a.active').removeClass();
		$(allBlobs[currentPos - 1]).addClass('active');		
		
	});
	
	$('a.btn-prev').bind('click', function(){
		currentPos--;
		
		if(currentPos == 1){
			$('a.btn-prev').hide();
		};
		
		if(currentPos < totalSlides){
			$('a.btn-nxt').show();		
		};
		
		$('ul#carousel').animate({'left': '+=934'}, speed);
		
		//Blobs rule
		var totalBlobs = $('#blobs ul li a');			
			
		$('#blobs ul li a.active').removeClass();
		$(totalBlobs[currentPos - 1]).addClass('active');		
		
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
		
		if( xslide == iTotal){				
			$('a.btn-nxt').hide();
		}
		
		if( xslide < iTotal){				
			$('a.btn-nxt').show();
		};

		if(currentPos == xslide + 1){
			$('#blobs ul li a.active').removeClass();
			$(this).addClass('active');
		};

		return false;		
	});
		
});