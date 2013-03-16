$(document).ready(function(){
		
	$('ul.hover-list li a').hover( function(){
		
		//Twitter Icon animate
		$(this).find('img').stop().animate({			
			marginLeft: 5
		}, 250);
	
		var twitter_url = $(this).find('.twitter_url').html();
		var twitter_username = twitter_url.split("/")[1];			
		//alert(twitter_username)
				
		//Fade in latest tweet class and call twitter function
		$(this).find('.latest_tweet').show( function(){
			twitter(twitter_username)
		});		
		
	}, function(){
		
		$(this).find('img').stop().animate({
			marginLeft: 10
		}, 250);
		
		//$(this).find('.latest_tweet').fadeOut();
		//$('.latest_tweet').empty();
	});	

});