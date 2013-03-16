$(document).ready( function(){
	
	var thumbs = $('ul#thumbs li a');
	var lightbox = $('#lightbox');
	var lightboxPanel = $('#lightbox-panel');
	var speed = 200;
	var imgContainer = $('#image-container');
	var img = new Image()
	
	$(thumbs).bind('click', function(){		
		
		var imgTitle = $(this).attr('title');
		var imgSrc = $(this).attr('href');
				
		$(lightbox).fadeIn(speed, function(){
			$(lightboxPanel).fadeIn('slow');
			$(img).appendTo(imgContainer).attr('src', imgSrc);
			$(img).appendTo(imgContainer).attr('alt', imgTitle);						
			$('#description').empty();
			$('#description').append(imgTitle);				
		});	
		
		return false;	
						
	});

	$('html, body, #close a').bind('click', function(){			
		$('#lightbox, #lightbox-panel').fadeOut(speed);		
	});

	$('#image-container, #description').bind('click', function(){			
		return false;		
	});	
		
});