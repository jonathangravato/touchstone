<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area sidebar-1-area mt-3r mb-5 card">
	<?php 
		if ( is_singular() && $post->post_type === 'post' || 
			 is_singular() && $post->post_type === 'page' ||
			 is_singular() && $post->post_type === 'podcast' 
		) :
		?>
		<div class="d-none d-md-block"> <?php wp_bootstrap_4_post_thumbnail(); ?></div>
		<?php

		endif;
		dynamic_sidebar( 'sidebar-1' ); 
	?>
</aside><!-- #secondary -->
