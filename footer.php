<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _blend
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="grid-x grid-container site-footer" role="contentinfo">
        <div id="footer-navigation" class="small-12 cell">
            <nav id="site-footer-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'secondary-menu', 'menu_class' => 'menu' ) ); ?>
            </nav>
        </div>
		<div class="small-12 cell text-center site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_blend' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', '_blend' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', '_blend' ), 'Blend', '<a href="https://robertparker.me" rel="designer">Robert Parker</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
