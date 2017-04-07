<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SideStrap
 */

?>

	</div><!-- #content -->

	<footer id="sidestrap-footer" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sidestrap' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'sidestrap' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'sidestrap' ), 'SideStrap', '<a href="https://devcon3.com/" rel="designer">Christian Hingle</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
