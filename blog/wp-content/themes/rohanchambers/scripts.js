$(document).ready(function() {
	$('nav ul li').hover( function(){
		
		$(this).stop().animate({backgroundColor: '#0074C0'}, 500);
				
	}, function(){
	
		if( $(this).hasClass('currentpage') ){
				
			return false;
						
		} else {
		
			$(this).stop().animate({backgroundColor: '#171922'}, 500);	
			
		}
			
	});
});