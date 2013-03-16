$(document).ready( function(){

	$('.button').click( function(){
		
		$('#box').animate({
			'left' : '+=150',
			'opacity' : '0.30',
			'height' : 'toggle' 
		}, 800, function(){
				//$(this).hide();
			});
	
	});

});