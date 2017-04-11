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

	<footer id="sidestrap-footer" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sidestrap' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'sidestrap' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'sidestrap' ), 'SideStrap', '<a href="https://devcon3.com/" rel="designer">Christian Hingle</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">
(function(){

		 var parallax = document.querySelectorAll("#content"),
		 speed = 0.05;

		 window.onscroll = function(){
			 [].slice.call(parallax).forEach(function(el,i){

				 var windowYOffset = window.pageYOffset,
				 elBackgrounPos = "50% " + (windowYOffset * speed) + "px";
				 el.style.backgroundPosition = elBackgrounPos;
				 });
			 };
		 })();

		 function fadeout(el){
				var elem = document.getElementById(el);
				elem.style.transition = "opacity 1.0s linear 0s";
				elem.style.opacity = 0;
		 }
		 function fadein(el){
			 var elem = document.getElementById(el);
			 elem.style.transition = "opacity 1.0s linear 0s";
			 elem.style.opacity = 1;
	  }
		function slideout(el){
			 var elem = document.getElementById(el);
			 elem.style.transition = "left 0.25s linear 0s";
			 elem.style.left = '-400px';
		}
		function shrink_left(el){
			 var elem = document.getElementById(el);
			 elem.style.transition = "width .75s linear 0s";
			 elem.style.width = '4.2%';
		}
		function grow_right(el){
			 var elem = document.getElementById(el);
			 elem.style.transition = "width .75s linear 0s";
			 elem.style.width = '28%';
		}
		function slide_left(el){
			 var elem = document.getElementById(el);
			 elem.style.transition = "margin-left .75s linear 0s";
			 elem.style.marginLeft = '5.5%';
		}
		function background_left(el){
			 var elem = document.getElementById(el);
			 elem.style.transition = "background .75s linear 0s";
			 elem.style.background = '#FFFFFF';
		}

</script>
</body>
</html>
