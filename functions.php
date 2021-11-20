<?php
/**
 *
 * This theme uses PSR-4 and OOP logic instead of procedural coding
 * Every function, hook and action is properly divided and organized inside related folders and files
 * Use the file `inc/Custom/Custom.php` to write your custom functions
 *
 * @package awps
 */

wp_enqueue_script( 'jquery' );



if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) :
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
endif;

if ( class_exists( 'Awps\\Init' ) ) :
	Awps\Init::register_services();
endif;

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'Theme Name' ),  
	'footer' => __( 'Footer Menu', 'Theme Name' ),     
) );

// LOAD STYLES
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/dist/css/style.css' );
}
function wpb_adding_scripts() {
	wp_register_script('app', get_template_directory_uri() . '/assets/dist/js/app.js', array('jquery'),'1.1', true);
	wp_enqueue_script('app');
	}
	  
	add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' ); 

	//Featured image stuff
	add_theme_support( 'post-thumbnails' );


	//CF7 AUTO P TAGS
	add_filter( 'wpcf7_autop_or_not', '__return_false' );

	


/* Get the slug for the city page */
function the_slug() {
	$post_data = get_post($post->ID, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug;
}

/* Shortcode for city name */
function city_name(){
	return '<span class="city-name">' . get_the_title() . '</span>';
}

add_shortcode('city','city_name');