<?php


/**
 * BizCanvas functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage BizCanvas
 * @since BizCanvas 1.0
 */

 function bizcanvas_block_assets(){
    // Enqueue theme stylesheet for the front-end.
    wp_enqueue_style( 'bizcanvas-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'bizcanvas-fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );
	wp_enqueue_style( 'bizcanvas-animatecss', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_script('bizcanvas-wow-script', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'));
	wp_enqueue_script('bizcanvas-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('bizcanvas-jquery-sticky', get_template_directory_uri() . '/assets/js/jquery-sticky.js', array('jquery') );    
}

add_action('enqueue_block_assets', 'bizcanvas_block_assets');

// register own theme pattern

function bizcanvas_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'bizcanvas' => array( 'label' => __( 'BizCanvas', 'bizcanvas' ) )
	);

	$block_pattern_categories = apply_filters( 'bizcanvas_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}

add_action( 'init', 'bizcanvas_register_pattern_category');

// Admin Info
require get_template_directory() . '/class/admin-info.php';