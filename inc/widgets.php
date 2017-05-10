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
function _blend_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', '_blend' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', '_blend' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
	register_sidebar( array(
		'name'          => esc_html__( 'Blog', '_blend' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', '_blend' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', '_blend_widgets_init' );