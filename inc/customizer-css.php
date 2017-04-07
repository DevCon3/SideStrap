<?php
function sidestrap_customizer_css_changes() { ?>
	<style type="text/css">
    #top-block {
			background-color: <?php echo get_theme_mod('sidestrap_top_block_color'); ?>;
			background-image: url(<?php echo get_theme_mod('sidestrap_top_block_image', get_template_directory_uri() . '/images/castle4.jpg'); ?>);
		}
		#left-block,
		#left-block::before {
			background-color: <?php echo get_theme_mod('sidestrap_left_block_color'); ?>;
      background-image: url(<?php echo get_theme_mod('sidestrap_left_block_image', get_template_directory_uri() . '/images/castle4.jpg'); ?>);
		}
		#right-block,
		#right-block::before {
			background: <?php echo get_theme_mod('sidestrap_right_block_color'); ?>;
      background-image: url(<?php echo get_theme_mod('sidestrap_right_block_image', get_template_directory_uri() . '/images/castle4.jpg'); ?>);
		}
		.site-title a {
      color: <?php echo get_theme_mod('sidestrap_custom_title_color'); ?>;
			text-shadow: 0 0 20px <?php echo get_theme_mod('sidestrap_inner_shadow_color'); ?>;
      text-shadow: <?php if ( get_theme_mod( 'sidestrap_title_shadow' ) == 1 ) {
      echo 'none';} ?>;
		}
		.h1background {
      display: <?php if ( get_theme_mod( 'sidestrap_title_shadow' ) == 1 ) {
      echo 'none';} ?>;
			color: <?php echo get_theme_mod('sidestrap_outer_shadow_color'); ?>;
			text-shadow: 0 0 20 <?php echo get_theme_mod('sidestrap_outer_shadow_color'); ?>;
		}
		.main-navigation li,
		.main-navigation a {
			color: <?php echo get_theme_mod('sidestrap_custom_menu_color'); ?>;
		}
		.entry-title,
		.entry-title a {
		  color: <?php echo get_theme_mod('sidestrap_post_title_color'); ?>;
		}
		#content {
			background-color: <?php echo get_theme_mod('sidestrap_main_background_color'); ?>;
			background-image: url(<?php echo get_theme_mod('sidestrap_main_background_image', get_template_directory_uri() . '/images/castle4.jpg'); ?>);
			background-repeat: no-repeat;
      background-attachment: fixed;
			background-size: cover;
		}
    .sidebar-module {
      box-shadow: <?php if ( get_theme_mod( 'sidestrap_widget_shadows' ) == 1 ) {
      echo 'none';} ?>;
		}
		article {
			background-color: <?php echo get_theme_mod('sidestrap_post_background'); ?>;
		}
    article,
    #content,
    #top-block {
      box-shadow: <?php if ( get_theme_mod( 'sidestrap_content_shadows' ) == 1 ) {
      echo 'none';} ?>;
    }
		article span,
		.entry-content p {
			color: <?php echo get_theme_mod('sidestrap_post_text_color'); ?>;
		}
		article a {
			color: <?php echo get_theme_mod('sidestrap_post_links_color'); ?>;
		}
		.sidebar-module {
			background: -moz-linear-gradient(45deg,<?php echo get_theme_mod('sidestrap_widget_background_color'); ?> 0%, rgba(242,82,2,0) 100%); /* FF3.6-15 */
		  background: -webkit-linear-gradient(45deg,<?php echo get_theme_mod('sidestrap_widget_background_color'); ?> 0%,rgba(242,82,2,0) 100%); /* Chrome10-25,Safari5.1-6 */
		  background: linear-gradient(45deg,<?php echo get_theme_mod('sidestrap_widget_background_color'); ?> 0%,rgba(242,82,2,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo get_theme_mod('sidestrap_widget_background_color'); ?>', endColorstr='#00f25202',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
		}

	</style>
<?php }
