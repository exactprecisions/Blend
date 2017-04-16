<?php
/**
 * Created by PhpStorm.
 * User: exact
 * Date: 4/15/2017
 * Time: 8:01 AM
 */
/**
 * Enqueue scripts and styles.
 */
function _s_scripts() {
    wp_enqueue_style( '_s-blend-style', get_template_directory_uri() . '/css/blend.min.css', '', '0.0.1' );
    wp_enqueue_script( '_s-foundation-script', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '6.3.1', true );
    wp_enqueue_script( '_s-theme-script', get_template_directory_uri() . '/js/theme.js', array('jquery'), '0.0.1', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );