<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= true === get_theme_mod( 'display_title_and_tagline', true ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>" role="banner">

	<p class="banner_header"><?php echo esc_attr("chef made cakes & savoury | a solid understanding of the end users and café market requirements");?></p>
	
	<div class="header_bottom container">
		<div class="row">
			<div class="header-left col-xs-12 col-sm-5">
				<?php get_template_part( 'template-parts/header/header-link' ); ?>
				<?php get_template_part( 'template-parts/header/site-nav-left' ); ?>
				<?php get_template_part( 'template-parts/header/site-nav' ); ?>
			</div>

			<?php get_template_part( 'template-parts/header/site-branding' ); ?>

			<div class="header-right col-xs-12 col-sm-5">
				<?php get_template_part( 'searchform' ); ?>
				<?php get_template_part( 'template-parts/header/site-nav-custom' ); ?>
			</div>
		</div>
	</div>


</header><!-- #masthead -->
