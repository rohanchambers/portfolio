$(document).ready(function(){

	var close = $('.close').hide();

	$('#img-list li img').toggle( function(){
		
		close.fadeIn();
		
		$(this).parent().wrap('<div class="img-wrap"/>');
		var imgOffset = $(this).parent().parent().parent().position();

		$(this).animate({			
			'width': 930,
			'height': 540,
			'left': -imgOffset.left,
			'top': -imgOffset.top
		});
											
	}, function(){
	
		close.fadeOut();

		var imgOffset = $(this).parent().parent().parent().parent().position();
	
		$(this).animate({			
			'width': 300,
			'height': 170,
			'left': 0,
			'top': 0
		}, function(){
		
			$(this).parent().unwrap('<div class="img-wrap"/>');		
		
		});
	
	});

});























		
/*
	$('#img-list li img').bind('click', function(){
		
		close.fadeIn();
		
		$(this).parent().wrap('<div class="img-wrap"/>');
		var imgOffset = $(this).parent().parent().parent().position();

		$(this).animate({			
			'width': 930,
			'height': 540,
			'left': -imgOffset.left,
			'top': -imgOffset.top
		});
											
	});
*/

	//Close image	
/*
	$('#img-list li.close a').bind('click', function(){
		var imgOffset = $(this).parent().parent().parent().position();
		
		//$('.img-wrap img').fadeOut();
		close.fadeOut();
		
		$('#img-list li img').animate({			
			'width': 300,
			'height': 170,
			'left': -imgOffset.left,
			'top': -imgOffset.top
		});
		
	});
*/

/*
	//Add alt tag to title div
	$('#img-list li img').each( function(){

		$(this).parent().parent().append('<div class="title">' + this.alt + '</div>');
		 
	});
	
	//Hover title up and down
	$('#img-list li').hover( function(){		
	
		$(this).find('.title').stop(true, true).slideDown();
		
	}, function(){

		$(this).find('.title').stop(true, true).slideUp();
	
	});
*/
	//Toggle fade of thumbnails
/*
	$('#img-list li img').hover( function(){		
		$(this).css( 'opacity', '0.6');
	}, function(){
		$(this).css( 'opacity', '1');	
	});
*/
	
