$(document).ready( function(){
	
	var speed = 700;
	
	$('#filter a').bind('click', function(){

		var list = $(this).attr('class');
		
		$('#filter li').removeClass('active');
		$(this).parent().addClass('active');
		
		if( $(this).hasClass(list) ) {
		
			$('#album-covers li').hide().parent().find('.' + list).fadeIn(speed);
			
		} else if( $(this).parent(speed).hasClass('all') ){

			$('#album-covers li').hide().fadeIn(speed);

		};
			
	});

	var copy = $('#album-covers li .copy');
	
	$('#album-covers li').hover( function(){
		
		$(this).children('.copy').stop(true, true).slideDown(400);
		
	}, function(){
	
		$(this).children('.copy').stop(true, true).slideUp(400);
	
	});
	
});