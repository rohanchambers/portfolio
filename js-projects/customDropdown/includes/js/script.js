$(document).ready( function(){

	$('.scroll-pane').jScrollPane({showArrows: true});

	function Country(name,tweets){
		this.name = name;
		this.tweets = tweets;
	};
	
	var list = new Array();
	list[0] = new Country("gb", 620); 
	list[1] = new Country("us", 331); 
	list[2] = new Country("de", 220); 
	list[3] = new Country("ru", 310); 
	list[4] = new Country("pl", 310);
	list[5] = new Country("es", 310);
		
	var speed = 200;
	var options = $('#countries option');
	var input = $('.input');

	for(i=0; i<options.length; i++){
		$('.country').append('<li><a href="#">'+ $(options[i]).val() + '</a></li>')
	}

	var flags = $('.country li a');	
	for(i=0; i<list.length; i++){		

		$(flags[i]).append('<span class=' + list[i].name + '></span>');
		
	}

	$('.btn-tweet').click(function(e){
	 
	  e.stopPropagation();
	
	  if( $('.input').is(':visible') ) {
	  
	    $('.input').fadeOut(speed);
	  }
	  
	  else {
	  
	    $('.input').slideDown(speed);
	    
	  }
	  
	});
	
	$('.country li').bind('click', function (){
		
		$(input).fadeOut(speed);
		
		var selected = $(this).text();
		
		var flagSelect = $(this).children().children().attr('class');
		
		$('.btn-tweet').empty().append('<span class='+ flagSelect +'></span>' + selected);
		
	});
		
	$(document).click(function(){
	    $('.input').fadeOut(speed);
	});			
	
});	