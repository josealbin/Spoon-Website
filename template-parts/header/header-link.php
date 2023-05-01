<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>
<?php if ( has_nav_menu( 'header_links' ) ) : ?>
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'header_links',
				'container_class' => 'header_link',
				'items_wrap'      => '<ul>%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
<?php endif; ?>
