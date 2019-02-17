<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _blend
 */
global $blend_opt;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if($blend_opt['menu-mobile'] === 'offcanvas') : ?>
	<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
<?php endif; ?>	
	
<div id="page" class="grid-y site">

    <div id="header" class="cell">

    <a class="show-for-small-only skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_blend' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <?php
            if(!has_custom_logo()):
                if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php
                endif;
            else :
            the_custom_logo();
            endif;
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                <?php
            endif; ?>
        </div><!-- .site-branding -->

    </header><!-- #masthead -->
		
	<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
		<div class="title-bar-left">
			<button aria-label="<?php _e( 'Main Menu', '_blend' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
		</div>
	</div>

    <div id="navigation" class="top-bar">
        <div id="site-navigation" class="top-bar-left main-navigation" role="navigation">
            <?php foundationpress_top_bar_l(); ?>
			<?php if($blend_opt['menu-mobile'] === 'topbar') {
				get_template_part( 'template-parts/mobile-top-bar' );
			} ?>
        </div><!-- #site-navigation -->
    </div><!-- #navigation -->

    </div>

    <div id="content" class="cell site-content">
        <div class="grid-x grid-container">