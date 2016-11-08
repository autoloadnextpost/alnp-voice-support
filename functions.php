<?php
/*
 * Support for Auto Load Next Post.
 */
function alnp_voice_support() {
	add_theme_support('auto-load-next-post');
}
add_action('after_setup_theme', 'alnp_voice_support');

/**
 * Enqueues stylesheet.
 */
function alnp_voice_scripts() {
	// Voice Theme stylesheet.
	wp_enqueue_style('voice-css', get_template_directory_uri() . '/style.css');

	// Child Theme stylesheet.
	wp_enqueue_style( 'alnp-voice', get_stylesheet_directory_uri() . '/style.css', array('voice-css') );
}
add_action('wp_enqueue_scripts', 'alnp_voice_scripts');