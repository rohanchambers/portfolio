<?php

class Buttons
{
	public function Vertical_Count()
	{
		$OpNames = array(

        'layout'       => 'layout',
		'lang'         => 'lang',
		'account'      => 'account',
		'rel_account'  => 'rel_account',
		'rel_des'      => 'rel_des',
		'tweet_t'      => 'tweet_t',
		'tweet_text'   => 'tweet_text',
		'pos'          => 'pos',
		'home'         => 'home',
		'page'         => 'page',
		'post'         => 'post',
		'align'        => 'align'


         );
		 
		 foreach($OpNames as $OpName)
		 {
			 $Values[$OpName] = get_option('twi_twe_'.$OpName);
			 
			 } // End ForEach
			 
		$Button  = '<div style="float:'.$Values['align'].';"><a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical"';
		$Button .= ' data-via="'.$Values['account'].'" data-related="'.$Values['rel_account'].':'.$Values['rel_des'].'" 
		             data-lang=""'.$Values['lang'].'">Tweet</a>';
		$Button .= '<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>';
		
		
		return $Button;

		
		} // End Vertical_Count
	
	public function Horizontal_Count()
	{
		$OpNames = array(

        'layout'       => 'layout',
		'lang'         => 'lang',
		'account'      => 'account',
		'rel_account'  => 'rel_account',
		'rel_des'      => 'rel_des',
		'tweet_t'      => 'tweet_t',
		'tweet_text'   => 'tweet_text',
		'pos'          => 'pos',
		'home'         => 'home',
		'page'         => 'page',
		'post'         => 'post'


         );
		 
		 foreach($OpNames as $OpName)
		 {
			 $Values[$OpName] = get_option('twi_twe_'.$OpName);
			 
			 } // End ForEach
			 
		$Button  = '<div style="float:'.$Values['align'].';"><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal"';
		$Button .= ($Values['tweet_t'] != false) ?  ' data-text="'.$Values['tweet_t'].'" ' : '';
		$Button .= ' data-via="'.$Values['account'].'" data-related="'.$Values['rel_account'].':'.$Values['rel_des'].'"
		             data-lang=""'.$Values['lang'].'">Tweet</a>';
		$Button .= '<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>';
		
		
		return $Button;

		
		} // End Horizontal_Count
		
			public function No_Count()
	{
		$OpNames = array(

        'layout'       => 'layout',
		'lang'         => 'lang',
		'account'      => 'account',
		'rel_account'  => 'rel_account',
		'rel_des'      => 'rel_des',
		'tweet_t'      => 'tweet_t',
		'tweet_text'   => 'tweet_text',
		'pos'          => 'pos',
		'home'         => 'home',
		'page'         => 'page',
		'post'         => 'post',
		'align'        => 'align'


         );
		 
		 foreach($OpNames as $OpName)
		 {
			 $Values[$OpName] = get_option('twi_twe_'.$OpName);
			 
			 } // End ForEach
			 
		$Button  = '<div style="float:'.$Values['align'].';"><a href="http://twitter.com/share" class="twitter-share-button" data-count="none"';
		$Button .= ($Values['tweet_t'] != false) ?  ' data-text="'.$Values['tweet_t'].'" ' : '';
		$Button .= ' data-via="'.$Values['account'].'" data-related="'.$Values['rel_account'].':'.$Values['rel_des'].'" 
		             data-lang="'.$Values['lang'].'">Tweet</a>';
		$Button .= '<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>';
		
		
		return $Button;

		
		} // End Horizontal_Count
		
		public function Main_Button($content)
		{
			$OpNames = array(

        'layout'       => 'layout',
		'lang'         => 'lang',
		'account'      => 'account',
		'rel_account'  => 'rel_account',
		'rel_des'      => 'rel_des',
		'tweet_t'      => 'tweet_t',
		'tweet_text'   => 'tweet_text',
		'pos'          => 'pos',
		'home'         => 'home',
		'page'         => 'page',
		'post'         => 'post',
		'align'        => 'align'


         );
		 
		 foreach($OpNames as $OpName)
		 {
			 $Values[$OpName] = get_option('twi_twe_'.$OpName);
			 
			 } // End ForEach
			 
		$Button  = '<div style="float:'.$Values['align'].';">
		<a href="http://twitter.com/share" class="twitter-share-button" data-count="'.$Values['layout'].'"';
		$Button .= ($Values['tweet_t'] != false) ?  ' data-text="'.$Values['tweet_t'].'" ' : '';
		$Button .= ' data-via="'.$Values['account'].'" data-related="'.$Values['rel_account'].':'.$Values['rel_des'].'" 
		             data-lang="'.$Values['lang'].'">Tweet</a>';
		$Button .= '<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>';
		
		if(($Values['home'] == false) && is_front_page())
		{
			return $content;
			
			}
		
		else if(($Values['post'] == false) && is_single())
		{
			return $content;
			
			}
		else if(($Values['page'] == false) && is_page())
		{
			return $content;
			
			}
		else{
		if($Values['pos'] == 'af')
		{
			return $content . $Button;
			
			} // End if af
		
		if($Values['pos'] == 'bf')
		{
			return $Button . $content;
			
			} // End if bf
			
		if($Values['pos'] == 'fnb')
		{
			return $Button . $content . $Button;
			
			} // End if fnb
			
		}

			
			}
		
		
	
	} // End Class

?>