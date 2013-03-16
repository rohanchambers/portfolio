// Live Preview code

$(document).ready(function(){
	
	var layout     = $('#layout').val();;
	var lang       = $('#language').val();
	var tweet_a    = $('#twitter_account').val();
	var relate_a   = $('#related_account').val();
	var relate_des = $('#related_des').val();
	var tweet_t    = $('#tweet_text').val();
	var html  = '<a href="http://twitter.com/share" class="twitter-share-button" data-count="'+layout+'" ';
	   	if($('#tweet_t').is(":checked")){html += 'data-text="'+tweet_t+'"';}
	    html += ' data-lang="'+lang+'">Tweet</a>';
		html += '<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>';
		
	$('#live').html(html);
	
	$('#form').change(function(){
		
	var layout     = $('#layout').val();;
	var lang       = $('#language').val();
	var tweet_a    = $('#twitter_account').val();
	var relate_a   = $('#related_account').val();
	var relate_des = $('#related_des').val();
	var tweet_t    = $('#tweet_text').val();
	
	var html  = '<a href="http://twitter.com/share" class="twitter-share-button" data-count="'+layout+'"';
	    if($('#tweet_t').is(":checked")){html += 'data-text="'+tweet_t+'" ';}
		html += 'data-lang="'+lang+'">Tweet</a>';
		html += '<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>';
		
			$('#live').html(html);

		
		});
	
	});