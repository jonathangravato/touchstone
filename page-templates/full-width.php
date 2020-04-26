<?php
/*
* Template Name: Full Width Without Container
*/

get_header(); 

$fields = get_fields();

?>

    <?php if ($fields) : 

        $heading_bg = get_field('heading_bg_img');

        if ( $heading_bg ) : ?>

        <style>
            .header-img { 
                background-image: url('<?php echo $heading_bg['url']; ?>');
                min-height: 300px;
                background-size: cover;
                background-position: center center;
                background-repeat: no-repeat;
            }
            .header-content {
                height: 100%;
            }
            .header-content div {
                max-width: 500px;
            }
            .header-content div h2 {
                font-size: 1.6rem; line-height: 1.8rem;
            }
            .page-header {
                /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#617b95+0,ffffff+66&1+33,0+100 */
                background: -moz-linear-gradient(top,  rgba(97,123,149,1) 0%, rgba(176,189,202,1) 33%, rgba(255,255,255,0.51) 66%, rgba(255,255,255,0) 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(top,  rgba(97,123,149,1) 0%,rgba(176,189,202,1) 33%,rgba(255,255,255,0.51) 66%,rgba(255,255,255,0) 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to bottom,  rgba(97,123,149,1) 0%,rgba(176,189,202,1) 33%,rgba(255,255,255,0.51) 66%,rgba(255,255,255,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#617b95', endColorstr='#00ffffff',GradientType=0 ); /* IE6-9 */
            }
            @media (min-width: 992px){
                .header-img { max-width: 800px; }
            } 
            @media (min-width: 768px){
                .header-img { min-height: <?php echo 'calc(' . $heading_bg['height'] . 'px - 100px)'; ?>; width: 100%; }
                .page-header .page-title { font-size: 3rem; line-height: 3rem; }
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

        <?php endif;

		if ( get_field('custom_title') ) : ?>
			<div class="page-header pt-lg-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg pt-5 py-lg-5 order-2 order-lg-1">
                            <div class="header-content d-flex justify-content-center align-items-center">
                                <div>
                                    <h1 class="page-title h2"><?php echo get_field('custom_title'); ?></h1>
                                    <?php if ( get_field('custom_intro') ) : ?><p class="intro-text"><?php echo get_field('custom_intro'); ?></p><?php endif; ?>
                                    <?php if ( get_field('contact_form') ) : echo do_shortcode( '[contact-form-7 id="' . get_field('contact_form') . '"]' ); endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg px-0 order-1 order-lg-2">
                            <div class="header-img special-shadow"></div>
                        </div>
                    </div>
                </div>
            </div><!-- .entry-header -->
		<?php endif; ?>
	<?php else : ?>
		<header class="page-header">
			<?php the_title( '<h1 class="page-title h2">', '</h1>' ); ?>
		</header><!-- .entry-header -->
    <?php endif; ?>
    
    <div class="container-fluid pb-5 py-lg-5">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">

                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'page-full' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>

            </main><!-- #main -->
        </div><!-- #primary -->
        <?php // get_template_part( 'template-parts/row-builder' ); ?>
    </div>

<?php
get_footer();
