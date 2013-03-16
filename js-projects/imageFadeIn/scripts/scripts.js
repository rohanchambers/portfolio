$(document).ready(function(){

	var bg_img = $('#box img');
	var content = $('#box-content');
	 
	$(bg_img).hide();

	$('#box').hover(function(){
		$(bg_img).fadeIn(300, function(){
			$(content).slideDown();
		});		
	}, function(){
		$(bg_img).fadeOut(300, function(){
			$(content).slideUp();	
		});
	});
	
});

/*
	$('#box').hover( 
		function(){
		$(bg_img).fadeIn(300);
		$(content).slideDown();
		},
		function(){
		$(bg_img).fadeOut(300);
		$(content).slideUp();
	});
*/
	
		
/*
	$('#box').mouseenter( function(){
		$(bg_img).fadeIn(300);
		$(content).animate({'bottom': '+=65px'});
	});
	$('#box').mouseleave( function(){
		$(bg_img).fadeOut(300);
		$(content).animate({'bottom': '-=65px'});
	});
*/