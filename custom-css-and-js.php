<?php
/*
 * Plugin Name:   Custom CSS and JS Plugin
 * Plugin URI:    learningsystems.ca
 * Description:   Add a custom CSS stylesheet and JavaScript file to WordPress, originally from https://github.com/jpen365/custom-css-and-js-plugin
 * Version:       1.0
 * Author:        Jason Shaw
 * Author URI:    learningsystems.ca
 * */
function custom_css_js_enqueue_scripts() {
  /* enqueue the custom-style.css file */
  wp_enqueue_style( 'bootstrap-css', plugins_url( '/css/bootstrap-theme.min.css', __FILE__ ), $ver = false );
  /* enqueue the custom-style.css file */
  wp_enqueue_style( 'custom-css', plugins_url( '/css/custom-style.css', __FILE__ ), $deps = array( 'parent-style','child-style' ), $ver = false );

  /* enqueue the custom-scripts.js file */
  wp_enqueue_script( 'bootstrap-js', plugins_url( '/js/bootstrap-theme.min.js', __FILE__ ), $deps = array( 'jquery' ), $ver = false, $in_footer = true );
  /* enqueue the custom-scripts.js file */
  wp_enqueue_script( 'custom-js', plugins_url( '/js/custom-scripts.js', __FILE__ ), $deps = array( 'jquery', 'child-theme-js', 'twentyseventeen-global' ), $deps = array( 'jquery' ), $ver = false, $in_footer = true );
}
add_action( 'wp_enqueue_scripts', 'custom_css_js_enqueue_scripts' );

