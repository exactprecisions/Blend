<?php
/**
 * Created by PhpStorm.
 * User: exact
 * Date: 4/15/2017
 * Time: 10:48 PM
 */

/**
 * Register menus
 */
function _blend_menus() {
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary', '_blend' ),
    ) );
}
add_action('after_setup_theme', '_blend_menus');

/**
 * Add active class to current-menu-item
 */
function foundation_active_class($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'foundation_active_class' , 10 , 2);