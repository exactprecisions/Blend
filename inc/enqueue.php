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
    //wp_enqueue_style( '_s-style', get_stylesheet_uri() );
    //wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    //wp_enqueue_script( '_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_style( '_s-foundation-style', get_template_directory_uri() . '/css/foundation.min.css' );
    wp_enqueue_script( '_s-foundation-script', get_template_directory_uri() . '/js/foundation.min.js', array(), '', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );