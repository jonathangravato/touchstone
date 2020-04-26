<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

get_header(); 

$fields = get_fields();

$default_sidebar_position = override_sidebar (get_field('default_sidebar'));

?>

	<?php if ($fields) : 
		if ( get_field('custom_title') ) : ?>
			<header class="entry-header text-center d-flex justify-content-center align-items-center py-5 text-light" style="background-color: #617B95;">
				<div>
					<h1 class="entry-title h2"><?php echo get_field('custom_title'); ?></h1>
					<?php if ( get_field('custom_intro') ) : ?><h2 class="h6"><?php echo get_field('custom_intro'); ?></h2><?php endif; ?>
				</div>
			</header><!-- .entry-header -->
		<?php endif; ?>
	<?php else : ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title h2">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

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
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

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
