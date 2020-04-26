<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>

	</div><!-- #content -->

	<!-- <section id="footer-ig" class="ig-footer pt-5 bg-white">
		<h2 class="text-center mb-4 h4">Follow Us on Instagram</h2>
		<?php //echo do_shortcode( '[instagram-feed user="1627229371"]' ); ?>
	</section> -->

	<footer id="colophon" class="site-footer">

		<section class="footer-widgets text-left">
			<div class="container-fluid">
				<div class="row">
					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
						<div class="col-md px-0">
							<aside class="widget-area footer-1-area">
								<?php dynamic_sidebar( 'footer-1' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
						<div class="col-md px-0">
							<aside id="contact-us" class="widget-area footer-2-area h-100 d-flex justify-content-center align-items-center">
								<?php dynamic_sidebar( 'footer-2' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
						<div class="col-md">
							<aside class="widget-area footer-3-area">
								<?php dynamic_sidebar( 'footer-3' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
						<div class="col-md">
							<aside class="widget-area footer-4-area">
								<?php dynamic_sidebar( 'footer-4' ); ?>
							</aside>
						</div>
					<?php endif; ?>
				</div>
				<!-- /.row -->
			</div>
		</section>

		<section id="footer-message" class="footer-message py-3 py-lg-5">
			<div class="container">
				<h2 class="h4">Attorney Advertising</h2>
				<span class="text-small">In accordance with rules established by the Supreme Judicial Court of Massachusetts, this web site must be labeled “advertising.” It is designed to provide general information for clients and friends of Touchstone Closing, LLC and should not be construed as legal advice, or legal opinion on any specific facts or circumstances. This web site is designed for general information only. The information presented on this site should not be construed to form legal advice nor the formation of a lawyer/client relationship. Serving Massachusetts and New Hampshire.</span>
			</div>
		</section>

		<section id="footer-copy" class="py-2 bg-dark">
			<div class="container">
				<div class="site-info">
					<p class="text-small mb-0">&copy; Touchstone Closing & Escrow, L.L.C.</p>
				</div><!-- .site-info -->
			</div>
			<!-- /.container -->
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<div class="modal fade" id="general-contact" tabindex="-1" role="dialog" aria-labelledby="general-contact-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="general-contact-label">Questions about Closing? Fill out this inquiry and we will respond shortly.</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
		<?php echo do_shortcode('[contact-form-7 id="1979" title="Become Our Client"]'); ?>
		</div>
		</div>
	</div>
</div> 

<?php wp_footer(); ?>

</body>
</html>
