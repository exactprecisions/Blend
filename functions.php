<?php
/**
 * _blend functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _blend
 */

/**
 * Theme setup
 */
require get_template_directory() . '/inc/setup.php';
/**
 * Register widgets
 */
require get_template_directory() . '/inc/widgets.php';
/**
 * foundation navwalker
 */
require get_template_directory() . '/inc/foundation-navwalker.php';
/**
 * Register menus
 */
require get_template_directory() . '/inc/menus.php';
/**
 * Load functions to secure your WP install.
 */
require get_template_directory() . '/inc/security.php';
/**
 * Enqueue scripts & styles
 */
require get_template_directory() . '/inc/enqueue.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';