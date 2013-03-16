$(document).ready(function(){
		
	$('#clients li img').hover( function(){
	
		var imgAttr = $(this).attr('alt');
		
		$('ul#clients li img').not(this).hide();
		$('#client-content').removeClass();
		$('#client-content').addClass(imgAttr);				
			
	}, function(){
		
		$('ul#clients li img').show();
		
	});
	
});