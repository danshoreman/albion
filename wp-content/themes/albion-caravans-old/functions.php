<?php

// Add custom functions
require_once( 'includes/custom-functions.php' ); 

// Add theme support woocommerce
add_theme_support( 'woocommerce' );


// Add theme support post thumbnails
add_theme_support('post-thumbnails');


// WP menus
add_theme_support( 'menus' );


// Add image sizes
add_image_size( 'thumbnail', 200, 200, true );
add_image_size( 'image', 700, 350, true );
add_image_size( 'featuredImage', 800, 590, true );
add_image_size( 'sidebarImage', 400, 300, true );
add_image_size( 'carouselImageOne', 9999, 500, true );
add_image_size( 'carouselImageTwo', 1200, 500, true );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Main Sidebar',
		'id'            => 'mainSidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );



// Change default excerpt
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


add_action('wp', create_function("", "if (is_singular(array('product'))) remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);") );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

/**
 * WooCommerce Extra Feature
 * --------------------------
 *
 * Change number of related products on product page
 * Set your own value for 'posts_per_page'
 *
 */ 
function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {

	$args['posts_per_page'] = 4; // 4 related products
	$args['columns'] = 4; // arranged in 2 columns
	return $args;
}