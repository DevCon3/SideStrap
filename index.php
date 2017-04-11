<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SideStrap
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<div id="featured-posts-section">
	<h2>Featured Articles</h2>
	  <div id="tile1" class="featured-post-tile">
			<span class="dashicons dashicons-megaphone">37</span>
			<hr>
	    <h3>Featured Post Title</h3>
	    <div class="featured-post-content">
	      <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec.</p>
	    </div>
	  </div>
	  <div class="featured-post-tile">
			<span class="dashicons dashicons-megaphone"></span>
			<hr>
	    <h3>Featured Post Title</h3>
	    <div class="featured-post-content">
	      <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec.</p>
	    </div>
	  </div>
	  <div class="featured-post-tile">
			<span class="dashicons dashicons-megaphone"></span>
			<hr>
	    <h3>Featured Post Title</h3>
	    <div class="featured-post-content">
	      <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec.</p>
	    </div>
	  </div><!-- featured-posts-section -->

		<button onclick="slideout('secondary'), shrink_left('left-block'), slide_left('featured-posts-section'), grow_right('right-block');">Change Layout</button>
		<button onclick="fadein('tile1');">Fade In</button>
	</div><!-- content-area -->

<?php
get_sidebar();
get_footer();
