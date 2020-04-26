<?php

if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
}
else {
    if ( ! is_page_template() ) {
        get_header();

        get_template_part( 'template-parts/front-page/cover' );

        ?>

        <?php if ( get_theme_mod( 'show_main_content', 1 ) ) : ?>
        <section id="main-content" class="home-content pb-5">
            <div class="container">
                <div class="row">
                    <div class="content-block col-md-4 d-flex justify-content-center align-items-center">
                        <div class="content mt-4">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="code-block col-md-8">
                        <div class="embed-responsive embed-responsive-16by9 shadow"><iframe class="embed-responsive-item" src="https://player.vimeo.com/video/249737122?title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                    </div>
                </div>
            </div>
        </section>

        <?php endif; ?>

        <?php

        get_template_part( 'template-parts/testimonial-slider' );

        get_template_part( 'template-parts/front-page/services' );

        get_footer();
    }
    else {
        include( get_page_template() );
    }
}
?>
