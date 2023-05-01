 <?php
/**
 * Child theme Functions and definitions
 *
 */

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );

function woocommerce_category_image() {
    if ( is_product_category() ){
      global $wp_query;
      $cat = $wp_query->get_queried_object();
      $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
      $image = wp_get_attachment_url( $thumbnail_id );
      if ( $image ) {
          echo '<p class="category-img"><img src="' . $image . '" alt="" /></p>';
      }
  }
}

function lw_search_filter_pages($query) {
    if ($query->is_search) {
        $query->set('post_type', 'product');
        $query->set( 'wc_query', 'product_query' );
    }
    return $query;
}
 
add_filter('pre_get_posts','lw_search_filter_pages');

//add_action( 'woocommerce_after_add_to_cart_button', 'dcwd_add_cf7_form_under_add_to_cart' );
function dcwd_add_cf7_form_under_add_to_cart() {

	echo do_shortcode('[popup_anything id="851"]');
}

/*	function twenty_twenty_one_setup() {
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
				'footer'  => __( 'Secondary menu', 'twentytwentyone' ),
				'custom'  => __( 'Custom menu', 'twentytwentyone' ),
				'header_links'  => __( 'Header links', 'twentytwentyone' ),
			)
		);
	}

function twenty_twenty_one_scripts() {
	if ( has_nav_menu( 'custom' ) ) {
		wp_enqueue_script(
			'twenty-twenty-one-primary-navigation-script',
			get_template_directory_uri() . '/assets/js/primary-navigation.js',
			array( 'twenty-twenty-one-ie11-polyfills' ),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}
}*/