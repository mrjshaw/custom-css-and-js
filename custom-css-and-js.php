<?php
/*
Plugin Name:    Custom CSS and JS
Plugin URI:     https://github.com/mrjshaw/custom-css-and-js/
Description:    A simple plugin to add custom CSS and JS. Comes in handy when you are making slight customizations to a child theme.
Version:        1.0
Author:         Jason Shaw
Author URI:     https://learningsystems.ca
License:        GNU General Public License v2 or later
License URI:    http://www.gnu.org/licenses/gpl-2.0.html
*/
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

