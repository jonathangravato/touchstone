<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>

<?php
	
	$default_sidebar_position = override_sidebar ( get_field('default_sidebar', 'options') );

	if ( $post->post_type === 'team' ) :
		if ( get_field('heading_bg_img_team', 'options') ) :
			$heading_bg = get_field('heading_bg_img_team', 'options');
		else :
			$heading_bg = null;
		endif;
	elseif ( $post->post_type === 'podcast' ) :
		if ( get_field('heading_bg_img_team', 'options') ) :
			$heading_bg = get_field('heading_bg_img_podcast', 'options');
		else :
			$heading_bg = null;
		endif;
	else : 
		$heading_bg = null;
	endif;

	if ( $heading_bg ) :

?>

	<style>
		.page-header { 
			background-image: url('<?php echo $heading_bg['url']; ?>');
			min-height: 300px;
			background-size: cover;
			background-position: center center;
			background-repeat: no-repeat;
		 }
		 .page-title {
			text-shadow: 0 5px 15px rgba(0, 0, 0, 1);
		 }
		 @media (min-width: 768px){
			 .page-header { min-height: <?php echo 'calc(' . $heading_bg['height'] . 'px - 100px)'; ?>; }
		 }
	</style>

	<?php else : ?>

	<style>
		.page-header { 
			background-color: #617B95;
			padding: 3rem 0;
		 }
		 .page-header .page-title { 
			margin-bottom: 0;
		 }
	</style>

	<?php endif; ?>

	<header class="page-header text-light text-center d-flex justify-content-center align-items-center">
		<?php
			echo '<h1 class="page-title">' . get_the_archive_title() . '</h1>';
			the_archive_description( '<div class="archive-description text-muted">', '</div>' );
		?>
	</header><!-- .page-header -->

	<div class="container">
		<div class="row">

			<?php if ( $default_sidebar_position === 'no' ) : ?>
				<div class="col-md-12 wp-bp-content-width">
			<?php else : ?>
				<div class="col-md-8 wp-bp-content-width">
			<?php endif; ?>

				<div id="primary" class="content-area">
					<main id="main" class="site-main">

					<?php
					if ( have_posts() ) : 
						
						if ( !get_field('heading_bg_img', 'options') ) :

					?>

						<header class="page-header mt-3r">
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="archive-description text-muted">', '</div>' );
							?>
						</header><!-- .page-header -->

						<?php

						endif;

						echo '<div class="row">';

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */

							if ( is_category() || is_tag() ) {
								// echo '<pre>';
								// var_dump( get_post_type($post->ID) );
								// echo '</pre>';
								echo '<div class="col-md-4">';
							} else {
								echo '<div class="col-12 col-md-4">';
							}

								if ($post->post_type === 'team') :
									echo '<div class="mt-3r">';
									get_template_part( 'template-parts/content-team', get_post_format() );
									echo '</div>';
								elseif ($post->post_type === 'podcast') :
									echo '<div class="mt-3r">';
									get_template_part( 'template-parts/content-podcast', get_post_format() );
									echo '</div>';
								else : 
									get_template_part( 'template-parts/content', get_post_format() );
								endif;

							echo '</div>';
							

						endwhile;

						echo '</div>';

						the_posts_navigation( array(
							'next_text' => esc_html__( 'Newer Posts', 'wp-bootstrap-4' ),
							'prev_text' => esc_html__( 'Older Posts', 'wp-bootstrap-4' ),
						) );

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
			<!-- /.col-md-8 -->

			<?php if ( $default_sidebar_position != 'no' ) : ?>
				<?php if ( $default_sidebar_position === 'right' ) : ?>
					<div class="col-md-4 wp-bp-sidebar-width">
				<?php elseif ( $default_sidebar_position === 'left' ) : ?>
					<div class="col-md-4 order-md-first wp-bp-sidebar-width">
				<?php endif; ?>
						<?php get_sidebar(); ?>
					</div>
					<!-- /.col-md-4 -->
			<?php endif; ?>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

<?php
get_footer();