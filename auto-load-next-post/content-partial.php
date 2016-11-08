<?php
/**
 * This file loads the content partially.
 */

// Check that there are more posts to load.
while ( have_posts() ) : the_post();

	get_template_part( 'sections/content', get_post_format() );

	get_template_part( 'sections/prev-next' );

// End the loop.
endwhile;