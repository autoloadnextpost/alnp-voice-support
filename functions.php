<?php
/*
 * Support for Auto Load Next Post.
 */
function alnp_voice_support() {
	add_theme_support( 'auto-load-next-post', array(
		'content_container'    => 'main.main-box-single',
		'title_selector'       => 'h1.entry-title',
		'navigation_container' => 'nav.prev-next-nav',
		'comments_container'   => 'div#comments',
	) );
}
add_action( 'after_setup_theme', 'alnp_voice_support' );

// This removes the default post navigation in the repeater template.
remove_action( 'alnp_load_after_content', 'auto_load_next_post_navigation', 1, 10 );

/**
 * Enqueues stylesheet.
 */
function alnp_voice_scripts() {
	// Voice Theme stylesheet.
	wp_enqueue_style( 'voice-css', get_template_directory_uri() . '/style.css' );

	// Child Theme stylesheet.
	wp_enqueue_style( 'alnp-voice', get_stylesheet_directory_uri() . '/style.css', array('voice-css') );
}
add_action( 'wp_enqueue_scripts', 'alnp_voice_scripts' );
