<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <div class="title-bar" data-responsive-toggle="masthead" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle="masthead"></button>
        <div class="title-bar-title">Menu</div>
    </div>
    <div id="navigation" class="top-bar site-header">
        <nav id="site-navigation" class="top-bar-left main-navigation" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'menu' ) ); ?>
        </nav><!-- #site-navigation -->
    </div><!-- #masthead -->

    <div id="content" class="row site-content">
