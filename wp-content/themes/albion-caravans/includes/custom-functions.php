<?php

function scripts_and_styles() {
   //only effect front-end of your website
	if (!is_admin() && $_SERVER['SCRIPT_NAME'] != '/wp-login.php') {
	
		
		// respond
		wp_register_script( 'respondjs', get_stylesheet_directory_uri() . '/library/js/libs/min/respond.min.js', array(), null, false );
		wp_enqueue_script( 'respondjs' );
		
		
		// modernizr (without media query polyfill)
		wp_register_script( 'modernizr', get_stylesheet_directory_uri() . '/library/js/libs/modernizr.custom.min.js', array(), '2.5.3', false );
		wp_enqueue_script( 'modernizr' );

		
		// register main stylesheet
		wp_register_style( 'stylesheet', get_stylesheet_directory_uri() . '/library/css/style.css', array(), '', 'all' );
		wp_enqueue_style( 'stylesheet' );
		
		
		//register styles for our theme
		wp_register_style( 'respgrid', get_template_directory_uri() . '/library/css/foundation.css', array(), 'all' );
		wp_enqueue_style( 'respgrid' );
		
		
		//font styles 
		wp_register_style( 'fontstyle', get_template_directory_uri() . '/library/css/font-style.css', array(), 'all' );
		wp_enqueue_style( 'fontstyle' );
		
		
		//register Foundation scripts
		wp_register_script( 'foundationscript', get_stylesheet_directory_uri() . '/library/js/libs/foundation/foundation.js', array(), null, true );
		wp_enqueue_script( 'foundationscript' );
		
		wp_register_script( 'equalizerscript', get_stylesheet_directory_uri() . '/library/js/libs/foundation/foundation.equalizer.js', array(), null, true );
		wp_enqueue_script( 'equalizerscript' );
		
		//register Slider scripts
		wp_register_script( 'slidescript', get_stylesheet_directory_uri() . '/library/js/libs/min/jquery.bxslider.min.js', array(), null, true );
		wp_enqueue_script( 'slidescript' );
		
		
		//register all scripts
		wp_register_script( 'allscripts', get_stylesheet_directory_uri() . '/library/js/scripts.js', array(), null, true );
		wp_enqueue_script( 'allscripts' );
		
		
		
	}
}

// enqueue base scripts and styles
add_action('wp_enqueue_scripts', 'scripts_and_styles', 999);


// remove product tabs
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      				// Remove the description tab
    unset( $tabs['reviews'] ); 									// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;

}

// move product description below the title
function woocommerce_template_product_description() {
woocommerce_get_template( 'single-product/tabs/description.php' );
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 15 );



//remove "Add to Cart" button on product listing page in WooCommerce
function remove_loop_button(){
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
}
add_action('init','remove_loop_button');


// move ralted outside of product summary
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
add_action( 'woocommerce_after_main_content', 'woocommerce_output_related_products', 5 );


// Modify the default WooCommerce orderby dropdown
//
// Options: menu_order, popularity, rating, date, price, price-desc
// In this example I'm removing price & price-desc but you can remove any of the options
function my_woocommerce_catalog_orderby( $orderby ) {
	unset($orderby["popularity"]);
	unset($orderby["rating"]);
	return $orderby;
}
add_filter( "woocommerce_catalog_orderby", "my_woocommerce_catalog_orderby", 20 );




//Hide Admin Bar
show_admin_bar( false );