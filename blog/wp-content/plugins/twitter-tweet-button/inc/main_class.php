<?php

class Main

{
	
	public function Save_Settings()
	
	{
		
		if($_POST['submit']){
		
		$OpNames = array(

        1      => 'layout',
		2      => 'lang',
		3      => 'account',
		4      => 'rel_account',
		5      => 'rel_des',
		6      => 'tweet_t',
		7      => 'pos',
		8      => 'home',
		9      => 'page',
		10     => 'post',
		11     => 'tweet_text',
		12     => 'align'

        );
		
		$OpValues = array(
		
		1      => $_POST['layout'],
		2      => $_POST['language'],
		3      => $_POST['twitter_account'],
		4      => $_POST['related_account'],
		5      => $_POST['related_des'],
		6      => ($_POST['tweet_t'] == 'custom') ? $_POST['tweet_text'] : false,
		7      => $_POST['pos'],
		8      => ($_POST['home'] == true) ? true : false,
		9      => ($_POST['page'] == true) ? true : false,
		10     => ($_POST['post'] == true) ? true : false,
		11     => $_POST['tweet_text'],
		12     => $_POST['align']


		
		);
		
		for($i = 0; $i <=12 ; $i++){
			
		update_option("twi_twe_".$OpNames[$i], $OpValues[$i]);

	       }
		   		?><div id="message" class="updated fade"><p><strong><?php _e("Settings saved!") ?></strong></p></div><?php

		}
		return true;
		}
	
	}

?>