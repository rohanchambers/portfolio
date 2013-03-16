$(document).ready(function(){	

	var speed = 2500;
	
	$('.timeline-container').append('<div class="timeline"></div>');
	$('.timeline-container').append('<div class="pin"></div>');
	
	function Country(name,tweets){
		this.name = name;
		this.tweets = tweets;
	};
	
	var list = new Array();
	list[0] = new Country("gb", 1820); 
	list[1] = new Country("de", 450); 
	list[2] = new Country("jpn", 1220); 
	list[3] = new Country("bra", 310); 

	var timeline = $('.timeline');
	var pin = $('.pin');
	var a = new Array();	
	
	for(i=0; i<list.length; i++){
	
		$(pin[i]).addClass(list[i].name);		
		a.push(list[i].tweets);
		var all_tweets = list[i].tweets;
		var max_tweet = Math.max.apply(0,a);		
		var all_tweets_percent = Math.round(100 / max_tweet * all_tweets);
		$(pin[i]).addClass(list[i].name).animate({'left': '+=' + all_tweets_percent + '%' }, speed);	
			
	}; 
					
});	

	



















/******************** Snippets Tests ********************/

//width 100%
//var max_timeline = ( 100 * parseFloat($('.timeline').css('width')) / parseFloat($('.timeline').parent().css('width')) ) + '%';		


/*
	for(i=0; i<list.length; i++){
		$(pin[i]).addClass(list[i].name).animate({'left': '+=' + list[i].tweets + 'px'}, speed);
		$(timeline[i]).addClass(list[i].name).animate({'width': + list[i].tweets + 'px'}, speed);
	}
*/

/*
	Array.max = function( array ){
	    return Math.max.apply( Math, array );
	};	
*/
	  
	
/*
	for(i=0; i<list.length; i++){
	    var a = list[i].twets;
	    alert(Math.max(a))
	};
*/
	
	    //alert(Math.max())      

			
		
/*
	Array.prototype.max = function() {
	var max = this[0];
	var len = this.length;
	for (var i = 1; i < len; i++) if (this[i] > max) max = this[i];
	return max;
	}	
*/
/*
	var myarray = [5,8,2,4,11,7,3,78];
	Array.max = function( array ){
	    return Math.max.apply( Math, array );
	};
		
	alert(list.tweets);
*/
	
	//alert(Array.max(myarray));
	
	//var max_tweet = ;
	//var length_timeline = 302 / 850 * 100;
	//alert(length_timeline)
	//var max_tweets = 100 / 850;
	//var tweet_percent = Math.floor(max_tweets * country_tweets[i]);	

		
//var max_tweets = 100 / 850;
//var tweet_percent = Math.floor(max_tweets * country_tweets[i]);		