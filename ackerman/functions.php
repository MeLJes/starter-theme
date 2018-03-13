<?php
/**
 * Functions and definitions
 *
 * @package ackerman
 */


function ackerman_scripts() {
  // Styles
  wp_enqueue_style( 'default', get_stylesheet_uri(), array(), '1.0.0', 'all' );
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css', array( 'default' ), '1.0.0', 'all' );
  wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css', array( 'main' ), '1.0.0', 'all' );

  // Scripts
  // --- Remove unnecessary
  wp_deregister_script( 'wp-embed' );
  wp_deregister_script( 'jquery' );
  // --- Libraries
  wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '2.2.4', true );
  // --- Main
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'ackerman_scripts' );


function ackerman_setup() {
  // Make theme available for translation. Translations can be filed in the /languages/ directory
  load_theme_textdomain( 'ackerman', get_template_directory() . '/languages' );

  // Add page title in <head>. Allows plugins to change the title
  add_theme_support( 'title-tag' );

  // Enable support for Post Thumbnails on posts and pages
  add_theme_support( 'post-thumbnails' );

  // Add 'Selective Refresh' support for widgets (customize live preview)
  add_theme_support( 'customize-selective-refresh-widgets' );

  // Custom logo support
  add_theme_support( 'custom-logo', array(
    'height'      => 150,
    'width'       => 150,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
  ) );

  // Register custom navigation menus
  $locations = array(
    'main_menu' => __( 'Main menu', 'ackerman' ),
  );
  register_nav_menus( $locations );

}
add_action( 'after_setup_theme', 'ackerman_setup' );


// Add custom post types and taxonomies
// require get_parent_theme_file_path( '/inc/custom.php' );
// Add Google Analytics
require get_parent_theme_file_path( '/inc/google-analytics.php' );
// Remove unnecessary WP stuff
require get_parent_theme_file_path( '/inc/remove-unnecessary.php' );
// require get_parent_theme_file_path( '/inc/remove-rest-api.php' );
