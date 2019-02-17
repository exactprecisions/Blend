<?php
/**
 * Created by PhpStorm.
 * User: exact
 * Date: 5/7/2017
 * Time: 10:59 AM
 */
if ( ! class_exists( 'Foundationpress_Top_Bar_Walker' ) ) :
	class Foundationpress_Top_Bar_Walker extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent  = str_repeat( "\t", $depth );
			$output .= "\n$indent<ul class=\"dropdown menu vertical\" data-toggle>\n";
		}
	}
endif;

if ( ! class_exists( 'Foundationpress_Mobile_Walker' ) ) :
	class Foundationpress_Mobile_Walker extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent  = str_repeat( "\t", $depth );
			$output .= "\n$indent<ul class=\"vertical nested menu\">\n";
		}
	}
endif;