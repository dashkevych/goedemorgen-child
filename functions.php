<?php
/**
 * Functions and definitions of Goedemorgen child theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Goedemorgen
 * @since 1.0
 */

/**
 * Enqueue parent style.
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function goedemorgen_child_enqueue_parent_styles() {
    wp_enqueue_style( 'goedemorgen-parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'goedemorgen_child_enqueue_parent_styles' );
