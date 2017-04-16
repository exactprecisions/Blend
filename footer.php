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

	<footer id="colophon" class="row column site-footer" role="contentinfo">
		<div class="text-center site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_blend' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', '_blend' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', '_blend' ), '_blend', '<a href="https://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
