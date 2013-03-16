$(document).ready(function(){	

function animateBar(){

	var	speed = 1500;		
	var bar = $('.bar');
	var value = $('.value');	
	var x = new Array();	
		
	for(i=0; i<value.length; i++){

		//Get all values from .value spans
		var all_tweets = value[i].innerHTML;
	
		//Push all values from .value spans into a new array x
		x.push(value[i].innerHTML);
		
		//Get the highest value from .value spans from new array x
		var max_tweet = Math.max.apply(0,x);	

		//Get the highest value from .value spans from new array x
		var min_tweet = Math.min.apply(0,x);	
		
		//Get a percentage value for all .value spans
		var all_tweets_percent = Math.round(100 / max_tweet * all_tweets);
		
		//Animate .bar span to its correct percentage
		$(bar[i]).animate({'width': '+=' + all_tweets_percent + '%' }, speed);			
				
	};
	
}	

animateBar();

/*
	var	speed = 1000;
	
	function Values(tweets){
		this.tweets = tweets;
	};
	
	var list = new Array();
	list[0] = new Values(1820); 
	list[1] = new Values(731); 
	list[2] = new Values(1220); 
	list[3] = new Values(310); 

	var bar = $('.bar');
	var a = new Array();		
	
	for(i=0; i<list.length; i++){

		a.push(list[i].tweets);				
		var all_tweets = list[i].tweets;
		var max_tweet = Math.max.apply(0,a);			
			
		var all_tweets_percent = Math.round(100 / max_tweet * all_tweets);
		$(bar[i]).animate({'width': '+=' + all_tweets_percent + '%' }, speed);	
		
	}; 
*/
					
});	
