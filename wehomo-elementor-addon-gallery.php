<?php
/**
 * Plugin Name: Wehomo Elementor Addon Gallery
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor
 */

function register_wehomo_elementor_gallery_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/wehomo_elementor_gallery.php' );

	$widgets_manager->register( new \Wehomo_Elementor_Gallery() );

}
add_action( 'elementor/widgets/register', 'register_wehomo_elementor_gallery_widget' );

/**
 * Register scripts and styles for Elementor widgets.
 */
function wehomo_elementor_gallery_dependencies() {

	/* Scripts */
	wp_register_script( 'wehomo-flexslider-js', plugins_url( 'flexslider/jquery.flexslider-min.js', __FILE__ ), 'jquery', true );
	wp_register_script( 'wehomo-gallery-js', plugins_url( 'assets/js/wehomo-gallery.js', __FILE__ ), [ 'jquery' ], true);

	/* Styles */
	wp_register_style( 'wehomo-flexslider-css', plugins_url( 'flexslider/flexslider.css', __FILE__ ), array(), null  );


}
add_action( 'wp_enqueue_scripts', 'wehomo_elementor_gallery_dependencies' ); 