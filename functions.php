<?php
/**
Tai Crane Karate Functions 
**/

// load stylesheets
function load_stylesheets() {
    wp_register_style('style', get_template_directory_uri() . '/css/temp/styles/style.css', array(), false, 'all');
    wp_enqueue_style('style');
    
   /**  
    wp_register_style('name of file', get_template_directory_uri() . '/css/name of file.css', array(), false, 'all');
    wp_enqueue_style('name of file');
    **/
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// javascript
function include_jquery() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', '', 1, true);
}
add_action('wp_enqueue_scripts', 'include_jquery');

function loadjs() {
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');

//theme support for menus
register_nav_menus(
    array(
     'top-menu' => __('Top Menu', 'theme'),
     'footer-menu' => __('Footer Menu', 'theme'),
     )
);

add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

// custom image sizes
add_image_size( 'image-post', 300, 300, true);

// Add post format support
add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image'));

//shortcode
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

// google fonts
function wpb_add_google_fonts() {
   wp_enqueue_style( 'https://fonts.googleapis.com/css?family=Merriweather:700|Open+Sans&display=swap', false );
   }
  add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


// Custom Post Types
function custom_post_types() {
    
// images post type - custom  
  register_post_type('image',
    array(
        'supports' => array('thumbnail', 'title'),
        'rewrite' => array('slug' => 'images'),
        'labels' => array(
        'name' => 'images',
        'singular_name' => 'image',
        'add_new_item' => 'Add New Image',
        'edit_item' => 'Edit Image'
        ),
        'menu-icon' => 'dashicons-format-image',
        'public' => true,
        )
     );  
}
add_action('init', 'custom_post_types'); 



