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

    $job_title      = get_field('job_position');
    $social_media   = get_field('social_media');
    $post_author    = get_field('user')['ID']; 

    if ( is_singular() ): ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class( 'card mt-3r' ); ?>>
        <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail-container">
                    <div class="social-media">
                        <?php 

                            if( $social_media ) {
                                if ( $social_media['facebook'] ) : echo '<a class="fa fa-facebook btn bg-white text-dark" href="' . $social_media['facebook'] . '"></a>';
                                elseif ( $social_media['twitter'] ) : echo '<a class="fa fa-twitter btn bg-white text-dark" href="' . $social_media['twitter'] . '"></a>';
                                elseif ( $social_media['instagram'] ) : echo '<a class="fa fa-instagram btn bg-white text-dark" href="' . $social_media['instagram'] . '"></a>';
                                elseif ( $social_media['linkedin'] ) : echo '<a class="fa fa-linkedin btn bg-white text-dark" href="' . $social_media['linkedin'] . '"></a>';
                                elseif ( $social_media['youtube'] ) : echo '<a class="fa fa-youtube btn bg-white text-dark" href="' . $social_media['youtube'] . '"></a>';
                                endif; 
                            }

                        ?>
                    </div>
                    <?php wp_bootstrap_4_post_thumbnail(); ?>
                </div>
                <p id="team-sidebar-btn" class="mt-3 d-sm-block d-md-none">
                    <button class="btn btn-primary w-100" type="button" data-toggle="collapse" data-target="#team-sidebar" aria-expanded="false" aria-controls="team-sidebar">
                        View my profile details and contact link
                    </button>
                </p>
                <div id="team-sidebar" class="collapse show team-sidebar-container mt-3">
                    
                <?php 
                    foreach ($fields as $key => $value) :

                        $items = [];

                        if ( $value ) :

                            switch ($key) {
                                case 'education' :
                                    $title = $key;
                                    $items = $value;
                                    display_list($title, $items);
                                break;
                                case 'practice_areas' :
                                    $title = str_replace('_', ' ' , $key);
                                    $items = $value;
                                    display_list($title, $items);
                                break;
                                case 'community' :
                                    $title = $key;
                                    $items = $value;
                                    display_list($title, $items);
                                break;
                                case 'admission' :
                                    $title = $key;
                                    $items = $value;
                                    display_list($title, $items);
                                break;
                                case 'contact' :
                                    $title = $key;
                                    $items = $value;
                                    display_list($title, $items);
                                break;
                                default:
                                    // Do Nothing
                            }

                        endif;

                    endforeach; 
                ?>

                </div>
            </div>
            <div class="col-md-8">
                <header class="entry-header">
                    <?php 
                        if ( get_field('nickname') ) : 
                            echo '<h1 class="entry-title card-title h2">' . get_field('nickname') . '</h1>';
                        else : 
                            the_title( '<h1 class="entry-title card-title h2">', '</h1>' );
                        endif; 
                    ?>
                    <h2 class="h5"><?php echo $job_title; ?></h2>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->

            <?php if ( $post_author ) : ?>    

                <div class="article-archive">
                    <h2 class="h4">Articles</h2>
                    <div class="row">

                <?php 
                    
                            // Posts by author.
                            $args = array (
                                'post_author' => $post_author,
                            );
                            
                            $posts_arr = get_posts( $args );

                            foreach($posts_arr as $user_post) :
                                $user_post_title = $user_post->post_title;
                                $user_post_thumb = get_the_post_thumbnail( $user_post->ID, array( 200, 200 ) );
                                ?>

                                <div class="article col-6 col-md-4 mb-3">
                                    <a href="<?php echo get_the_permalink( $user_post->ID ); ?>">
                                        <?php echo $user_post_thumb; ?>
                                        <h3 class="h6 mt-2"><?php echo $user_post_title; ?></h3>
                                    </a>
                                </div>

                            <?php endforeach; wp_reset_postdata(); ?>
                        
                    </div> <!-- end .row -->
                </div> <!-- end .article -->

            <?php endif; ?>

            </div>
        </div>

    <?php else : ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class( 'text-center' ); ?>>

            <?php if ( is_sticky() ) : ?>
            
                <span class="oi oi-bookmark wp-bp-sticky text-muted" title="<?php echo esc_attr__( 'Sticky Post', 'wp-bootstrap-4' ); ?>"></span>
            
            <?php endif;
                
                wp_bootstrap_4_post_thumbnail(); 
                echo '<header class="entry-header">';
                the_title( '<h2 class="entry-title h5 mt-2 mb-0"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="text-dark">', '</a></h2>' );
                echo '<h3 class="h6">' . $job_title . '</h3>';
                echo '</header>';
                
    endif; ?>

    </article><!-- #post-<?php the_ID(); ?> -->

<?php 

endif;