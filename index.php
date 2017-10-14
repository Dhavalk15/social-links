<?php

/**
* Plugin Name:Social Links
* Description:Add social icons with links in profile 
* Version:1.0
* Author:Dhaval Kasavala
**/

// Exit if Accessed Directly 
if(!defined('ABSPATH')) {
   exit;
} 	

//Load Scripts
require_once(plugin_dir_path( __FILE__ ).'/includes/social-links-scripts.php');

//Load class
require_once(plugin_dir_path( __FILE__ ).'/includes/social-links-class.php');

//Register Widget 
function  register_social_links() {
	register_widget('Social_Links_Widget');
}
add_action('widgets_init','register_social_links');