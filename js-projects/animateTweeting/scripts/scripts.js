$(document).ready(function(){	
	
	function pinTweet(){

		var pins = $('#viewport').children();
		var random = Math.floor(Math.random() * pins.length);	
		pins.removeClass('tweeter')
		pins.eq(random).addClass('tweeter');
	
		//Pin Rowing
		$('.pin-rowing').animate({'left' : '+=550px', 'bottom' : '+=105px' }, 1000, function(){
			if($(this).hasClass('tweeter')){
				$(this).children().wrap('<div class="tweet" />');
				$('.tweet').animate({'opacity' : '1',  'bottom' : '+=55px'}, 300).delay(1500)
				.animate({'opacity' : '0',  'bottom' : '+=20px'});
			};
		}).delay(2100);
		
		$('.pin-rowing').animate({'left' : '+=420px', 'bottom' : '+=80px' }, 1100, function(){	
			$('.pin-rowing').css({'bottom' : '40px', 'left' : '-211px'});
			$('.tweet').hide();
		});	

		//Pin Cycling
		$('.pin-cycling').animate({'left' : '+=500px', 'bottom' : '+=95px' }, 1200, function(){
			if($(this).hasClass('tweeter')){
				$(this).children().wrap('<div class="tweet" />');
				$('.tweet').animate({'opacity' : '1',  'bottom' : '+=55px'}, 300).delay(1300)
				.animate({'opacity' : '0',  'bottom' : '+=20px'});
			};
		}).delay(2000);
				
		$('.pin-cycling').animate({'left' : '+=500px', 'bottom' : '+=95px' }, 900, function(){	
			$('.pin-cycling').css({'bottom' : '-32px', 'left' : '-340px'});
			$('.tweet').hide();		
		});

		//Pin Gym
	  	$('.pin-gym').animate({'left' : '+=450px', 'bottom' : '+=85px' }, 600, function(){
			if($(this).hasClass('tweeter')){
				$(this).children().wrap('<div class="tweet" />');
				$('.tweet').animate({'opacity' : '1',  'bottom' : '+=55px'}, 300).delay(1900)
				.animate({'opacity' : '0',  'bottom' : '+=20px'});
			};			
		}).delay(2500);	
			
		$('.pin-gym').animate({'left' : '+=550px', 'bottom' : '+=105px' }, 900, function(){	
			$('.pin-gym').css({'bottom' : '-40px', 'left' : '-150px'});
			$('.tweet').hide();								
		});		
		
	}
	
	pinTweet();
	
	setInterval( function(){ 
		
		pinTweet();	
	
	}, 5000);	

});