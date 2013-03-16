<?php

/*Create Options*/

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
		'align'        => 'align',


);

foreach($OpNames as $OpName){
	add_option('twi_twe_'.$OpName, '');
}


?>