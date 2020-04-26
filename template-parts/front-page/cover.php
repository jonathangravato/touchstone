<?php
$default_cover_title = get_bloginfo( 'name' );
$default_cover_lead = get_bloginfo( 'description' );
?>

<section class="d-block d-xl-none text-center jumbotron-small border-bottom text-white">
    <div class="wp-bp-jumbo-overlay">
        <div class="container px-0">
            <div>
                <img src="<?php echo esc_url( get_header_image() ); ?>" />
            </div>
            <div class="py-5">
                <h1 class="jumbotron-heading"><?php echo wp_kses_post( get_theme_mod( 'front_cover_title', $default_cover_title ) ); ?></h1>
                <p class="lead mb-4"><?php echo wp_kses_post( get_theme_mod( 'front_cover_lead', $default_cover_lead ) ); ?></p>
                <?php if( get_theme_mod( 'front_cover_btn_text' ) ) : ?><a href="<?php echo esc_url( get_theme_mod( 'front_cover_btn_link' ) ); ?>" class="btn btn-primary btn-lg"><?php echo esc_html( get_theme_mod( 'front_cover_btn_text' ) ); ?></a><?php endif; ?>
            </div> 
        </div>
    </div>
</section>

<section class="d-none d-xl-block jumbotron text-left wp-bs-4-jumbotron border-bottom text-white">
    <div class="wp-bp-jumbo-overlay">
        <div class="container d-flex justify-content-start">
            <div class="mt-n5">
                <h1 class="jumbotron-heading"><?php echo wp_kses_post( get_theme_mod( 'front_cover_title', $default_cover_title ) ); ?></h1>
                <p class="lead mb-4"><?php echo wp_kses_post( get_theme_mod( 'front_cover_lead', $default_cover_lead ) ); ?></p>
                <?php if( get_theme_mod( 'front_cover_btn_text' ) ) : ?><a href="<?php echo esc_url( get_theme_mod( 'front_cover_btn_link' ) ); ?>" class="btn btn-primary btn-lg"><?php echo esc_html( get_theme_mod( 'front_cover_btn_text' ) ); ?></a><?php endif; ?>
            </div> 
        </div>
    </div>
</section>