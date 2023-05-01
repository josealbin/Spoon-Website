<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" role="contentinfo">
		<div class="site-footer">
			<div class="footer-images">
				<ul>
					<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_eat-safe.jpg"></li>
					<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_haccp.jpg"></li>
				</ul>
			</div>

			<div class="footer-copyright-content">
				<?php
				printf(
					/* translators: %s: WordPress. */
					esc_html__( '© 2020 Spoon Wholesale Kitchen'));
				?>

			<?php if ( has_nav_menu( 'footer' ) ) : ?>
					<ul class="footer-navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'items_wrap'     => '%3$s',
								'container'      => false,
								'depth'          => 1,
								'link_before'    => '<span>',
								'link_after'     => '</span>',
								'fallback_cb'    => false,
							)
						);
						?>
					</ul><!-- .ooter-navigation -->
			<?php endif; ?>
			</div><!-- .powered-by -->

		</div>
	</footer><!-- #colophon -->

	<div id="back-top"><a class="nav_up" href="#top">Back to top</a></div>

</div><!-- #page -->

<?php wp_footer(); ?>

	<script type="text/javascript">

		function scrollFunction() {
			if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
				jQuery("#back-top").fadeIn();
			} else {
				jQuery("#back-top").fadeOut();
			}
		}

		window.onscroll = function() { scrollFunction();}

		jQuery("#back-top").click(function() {
			return jQuery("body,html").animate({
				scrollTop: 0
			}, 400), !1
		})
	</script>

</body>
</html>
