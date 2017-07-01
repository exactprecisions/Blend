<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _blend
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area hide-for-small-only medium-5 large-4 cell" role="complementary" data-sticky-container>
    <div class="sticky" data-sticky data-anchor="content">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div>
</aside><!-- #secondary -->
