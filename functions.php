<?php
/**
 * khalsa Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package khalsa
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_KHALSA_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function wpb_add_google_fonts() {
  
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap', false ); 
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), CHILD_THEME_KHALSA_VERSION, true );

    }
      
    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
	
function child_enqueue_styles() {

	wp_enqueue_style( 'khalsa-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_KHALSA_VERSION, 'all' );
  

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
add_action( 'wp_enqueue_scripts', 'my_files_enqueue_function' );

// custom work
add_action( 'wp_enqueue_scripts', 'my_files_enqueue_function' );
function my_files_enqueue_function(){
    wp_enqueue_style( 'my-css-custom-file', get_stylesheet_directory_uri().'/assets/css/customstyle.css');
    wp_enqueue_script( 'my-js-custom-file', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js?ver=1');
    wp_enqueue_script( 'my-js-custom-file2', '//code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous');
    wp_enqueue_style( 'my-owl-custom-file', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css?ver=6.5.4');
}
add_theme_support( 'align-wide' );
