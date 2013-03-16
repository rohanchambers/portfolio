$(document).ready(function(){
	
	var close = $('.close');

	//Toggle fade of thumbnails
/*
	$('#img-list li img').hover( function(){		
		$(this).stop().animate({'opacity': '0.6'});
	}, function(){
		$(this).stop().animate({'opacity': '1'});	
	});		
*/
		
	$('#img-list li img').bind('click', function(){	
		
		var videoLlink = $(this).parent().attr('href');			
		$(this).parent().wrap('<div class="img-wrap"/>');
		$(this).addClass('active')
		var imgOffset = $(this).parent().parent().parent().position();

		$(this).animate({	
			'opacity': 1,		
			'width': 930,
			'height': 540,
			'left': -imgOffset.left,
			'top': -imgOffset.top
		}, function(){
			
			vimeo(videoLlink);	
			
			$('#img-list').delay(1000).fadeOut(1000, function(){
				$('#video-container').show();
					
				close.show();	
			});		
			
		});	
		
		return false;
		
	});

	$('.close').bind('click', function(){	
		
		close.fadeOut()
		
		var imgOffset = $(this).parent().parent().parent().position();
	
		$('#img-list li img.active').animate({			
			'width': 300,
			'height': 170,
			'left': 0,
			'top': 0
		}, function(){
			
			$('#img-list li img.active').parent().unwrap('<div class="img-wrap"/>');
			$('#img-list li img').removeClass('active');		
		
		});
	
		$('#video-container').empty().hide();
		$('#img-list').show();							
		
	});

	//http://vimeo.com/api/docs/player-js
	function vimeo(videoLlink){
	
		var videoData = [
		{
		    'title':'Rohan',
		    'id':'rohan',
		    'autoplay': '1',
		    'videoURL': videoLlink
		}];
		
		$.getJSON('http://www.vimeo.com/api/oembed.json?url=' 
		+ encodeURIComponent(videoData[0]['videoURL']) + 
		'&api=1&player_id='+ videoData[0]['id'] +'&width=930&callback=?' + '&autoplay=true', 
		
		function(data){
		    $('#video-container').html(data.html); //puts an iframe embed from vimeo's json
		    $('#video-container iframe').load(function(){
		        player = document.querySelectorAll('iframe')[0];
		        $('#video-container iframe').attr('id', videoData[0]['id']);
		        $f(player).addEvent('ready', function(id){
		            var vimeoVideo = $f(id);
		            console.log('success');
		        });
		    });
		});
	}

});