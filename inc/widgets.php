<?php
/**
 * Created by PhpStorm.
 * User: exact
 * Date: 4/15/2017
 * Time: 8:00 AM
 */
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _s_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', '_s' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', '_s' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', '_s_widgets_init' );