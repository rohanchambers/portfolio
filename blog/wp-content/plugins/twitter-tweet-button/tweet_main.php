<?php

/*
Plugin Name: Twitter Tweet Button
Plugin URI: http://blog.ahmedgeek.com/the-official-tweet-button-plugin-for-wordpress
Description: Add the offical Twitter Tweet button to your WordPress blog
Version: 1.1
Author: Ahmed Hussein
Author URI: http://www.ahmedgeek.com
License: GPL2

Copyright 2010  Twitter Tweet Button for WP  (email : me@ahmedgeek.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

//Include classes
include_once(ABSPATH . 'wp-content/plugins/twitter-tweet-button/inc/layout_class.php');
include_once(ABSPATH . 'wp-content/plugins/twitter-tweet-button/inc/main_class.php');
include_once(ABSPATH . 'wp-content/plugins/twitter-tweet-button/inc/buttons_class.php');
include_once(ABSPATH . 'wp-content/plugins/twitter-tweet-button/inc/options.php');
require_once(ABSPATH . 'wp-content/plugins/twitter-tweet-button/inc/activation.php');

//The admin box function 
function TTB_Admin_Box()
{
    add_menu_page('Tweet Button', 'Tweet Button', 8, basename(__file__), '' , plugins_url('icon.png',__FILE__));
    add_submenu_page(basename(__file__), 'Twitter Tweet Button Settings', 'Settings', 8, basename(__file__),
        array('Layout', 'Admin_Layout'));

}

//Start the main class
$Main = new Main();
$Main->Save_Settings();

//Add the admin box
add_action('admin_menu', 'TTB_Admin_Box');

//Add the button
add_filter('the_content', array('Buttons', 'Main_Button'));

//Add shortcuts
add_shortcode('tweet_vertical', array('Buttons', 'Vertical_Count'));
add_shortcode('tweet_horizontal', array('Buttons', 'Horizontal_Count'));
add_shortcode('tweet_none', array('Buttons', 'No_Count'));

ActivationTweet(TActivate());

?>