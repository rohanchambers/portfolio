$(document).ready(function(){

	function goToByScroll(id){
		$('html, body').animate({scrollTop: $("#"+id).offset().top},'slow');
	};
	
	var button_down = $('a.arrow-down');
	var button_up = $('a.arrow-up');

 	$('#button a').toggle( function(){
		$(button_down).attr('href', '#bottom');
		$(button_down).attr('title', 'Back to top');		
		$(this).addClass('arrow-up');
		goToByScroll("button");		
	}, function(){
		$(button_up).attr('href', '#top');
		$(button_down).attr('title', 'Skip to content');
		$(this).removeClass('arrow-up');
		goToByScroll("top");				
	});
	
});