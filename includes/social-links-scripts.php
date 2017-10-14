<?php

//Add scripts

function dksl_add_scripts() {
	wp_enqueue_style('dksl-main-style',plugins_url().'/social-links/css/style.css');
	wp_enqueue_script('dksl-main-script',plugins_url().'/social-links/css/script.js');
}
add_action('wp_enqueue_scripts','dksl_add_scripts');