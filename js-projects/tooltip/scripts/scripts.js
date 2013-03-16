$(document).ready(function(){	

	//On hover show and hide tooltip
	$('#user_profiles li').hover( function(){
		
		var tooltip = $(this).children('.tooltip');	
		
		tooltip.show();
		
		var topPos = tooltip.offset().top;
		var leftPos = tooltip.offset().left;
		
		//alert(tooltip.offset().top)
		
		$(this).children('img').clone().prependTo('.tooltip');
							
		if( topPos -50 > 220 ) {
			
			tooltip.css({'bottom': '0'});
			
		} else {
		
			tooltip.css({'top': '0'});			
		
		}
		
		if ( leftPos > 700) {
		
			tooltip.css({'right': '0'});			
			
		}
		
	}, function(){
	
		$(this).children('.tooltip').hide();
		$('.tooltip img').remove();			
	
	});

	
/*
	$('.expand').click( function(){

		$('#fullProfile').empty();		
		$(this).parent().clone().appendTo('#fullProfile');
		$('#fullProfile').addClass('super');
		$('#fullProfile').fadeIn();		
		
	});
*/


	//On click of close button close hide tooltip
	$('.close').click( function(){
	
		$('.tooltip').hide();	
		$('#fullProfile').hide();
		$('#fullProfile.super .expand').hide();

	});
					
});	
