$(document).ready( function(){

	var tabs = $('#tabs li');	
	var tabs_copy = $('.tabs-copy');
	var tab_total = $(tabs).length;

	$(tabs[0]).addClass('first-active');	
	tabs_copy.hide();	
	$(tabs_copy[0]).show();

	if( $(tabs).hasClass('active') ){
	
		$(tabs).removeClass('first-active');
		$(tabs_copy).hide();
		$('#tabs li.active').find(tabs_copy).show();
		
	};
		
	$(tabs).bind('click', function(){
	
		tabs_copy.hide();		
		$(this).find(tabs_copy).fadeIn(800);
		$(tabs).removeClass('active');
		$(tabs).removeClass('first-active');
		$(this).addClass('active');	
			
		return false;
		
	});
		
	$('#tabs li .tabs-copy').click(function(){
		return false;			
	});	
	
});