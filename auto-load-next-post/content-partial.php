<?php
/**
 * The Template for displaying a post when called.
 *
 * @author  Sébastien Dumont
 * @package Auto Load Next Post/Templates
 * @license GPL-2.0+
 * @version 1.5.0
 */

if ( have_posts() ) :

	// Load content before the loop.
	do_action( 'alnp_load_before_loop' );

	// Check that there are posts to load.
	while ( have_posts() ) : the_post();

		$post_format = get_post_format(); // Post Format e.g. video

		// Load content before the post content.
		do_action( 'alnp_load_before_content' );

		// Load content before the post content for a specific post format.
		do_action( 'alnp_load_before_content_post_format_' . $post_format );

		get_template_part( 'sections/content', get_post_format() );

		get_template_part( 'sections/prev-next' );

		// Load content after the post content for a specific post format.
		do_action( 'alnp_load_after_content_post_format_' . $post_format );

		// Load content after the post content.
		do_action( 'alnp_load_after_content' );

	// End the loop.
	endwhile;

	// Load content after the loop.
	do_action( 'alnp_load_after_loop' );

endif; // END if have_posts()
