<?php
/**
 * Template part for displaying team posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

 $fields = get_fields();

 if ($fields):

    $episode_id = get_field('episode_id');

	if ( is_singular() ): 
		
    ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'card mt-3r' ); ?>>
		<div class="d-sm-block d-md-none"> <?php wp_bootstrap_4_post_thumbnail(); ?></div>	  
        <div class="card-body">
        
                <header class="entry-header">
                    <?php 
                      the_title( '<h1 class="entry-title card-title h2">', '</h1>' );
                    ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->

    <?php else : ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class( 'card text-center' ); ?>>

            <?php if ( is_sticky() ) : ?>
            
                <span class="oi oi-bookmark wp-bp-sticky text-muted" title="<?php echo esc_attr__( 'Sticky Post', 'wp-bootstrap-4' ); ?>"></span>
            
            <?php endif;
                
                // wp_bootstrap_4_post_thumbnail(); 
                // echo '<header class="entry-header">';
                // the_title( '<h2 class="entry-title h5 mt-2 mb-0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="text-dark">', '</a></h2>' );
                // echo '</header>';

                wp_bootstrap_4_post_thumbnail(); ?>

		<div class="card-body">

		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title card-title h2">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title card-title h4"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="text-dark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta text-muted">
				<?php wp_bootstrap_4_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->

		<?php if( is_singular() || get_theme_mod( 'default_blog_display', 'excerpt' ) === 'full' ) : ?>
			<div class="entry-content">
				<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wp-bootstrap-4' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-4' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		<?php else : ?>
			<div class="entry-summary">
                <?php 
                //the_excerpt(); 
                $excerpt = wp_trim_words( get_the_excerpt(), 32 );
                echo $excerpt;
                ?>
				<div class="">
					<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn text-primary btn-sm"><?php esc_html_e( 'Continue Reading', 'wp-bootstrap-4' ); ?> <small class="oi oi-chevron-right ml-1"></small></a>
				</div>
			</div><!-- .entry-summary -->
		<?php endif; ?>

	</div>
	<!-- /.card-body -->

	<?php if ( 'post' === get_post_type() ) : ?>
		<footer class="entry-footer card-footer text-muted">
			<?php wp_bootstrap_4_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	<?php endif;
                
    endif; ?>

    </article><!-- #post-<?php the_ID(); ?> -->

<?php 

endif;