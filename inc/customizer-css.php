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
      color: <?php echo get_theme_mod('sidestrap_site_title_color'); ?>;
			text-shadow: 0 0 20px <?php echo get_theme_mod('sidestrap_inner_shadow_color'); ?>;
      text-shadow: <?php if ( get_theme_mod( 'sidestrap_title_shadow' ) == 1 ) {
      echo 'none';} ?>;
		}
    .site-description {
      color: <?php echo get_theme_mod('sidestrap_site_tagline_color'); ?>;
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
		.entry-title a,
    .page-title {
		  color: <?php echo get_theme_mod('sidestrap_post_title_color'); ?>;
		}
		#content {
			background-color: <?php echo get_theme_mod('sidestrap_main_background_color'); ?>;
			background-image: url(<?php echo get_theme_mod('sidestrap_main_background_image');?>);
			background-repeat: repeat-y;
      background-attachment: fixed;
			background-size: cover;
		}
    .sidebar-module {
      box-shadow: <?php if ( get_theme_mod( 'sidestrap_widget_shadows' ) == 1 ) {
      echo 'none';} ?>;
			border-top: 5px solid <?php
			if ( get_theme_mod( 'sidestrap_widget_top_border_option' ) == 1 ) :
				echo 'none';
			else :
				echo get_theme_mod('sidestrap_widget_top_border_color');
			endif; ?>;
			border-bottom: 5px solid <?php
      if ( get_theme_mod( 'sidestrap_widget_bottom_border_option' ) == 1 ) :
        echo 'none';
      else :
        echo get_theme_mod('sidestrap_widget_bottom_border_color');
      endif; ?>;
			border-left: 5px solid <?php
			if ( get_theme_mod( 'sidestrap_widget_left_border_option' ) == 1 ) :
				echo 'none';
			else :
				echo get_theme_mod('sidestrap_widget_left_border_color');
			endif; ?>;
			border-right: 5px solid <?php
	    if ( get_theme_mod( 'sidestrap_widget_right_border_option' ) == 1 ) :
	      echo 'none';
	    else :
	      echo get_theme_mod('sidestrap_widget_right_border_color');
	    endif; ?>;
		}
    .sidebar-module h2 {
      color: <?php echo get_theme_mod('sidestrap_widget_title_color'); ?>;
		}
		article {
			background-color: <?php echo get_theme_mod('sidestrap_post_background'); ?>;
			border-top: 5px solid <?php
			if ( get_theme_mod( 'sidestrap_post_top_border_option' ) == 1 ) :
				echo 'none';
			else :
				echo get_theme_mod('sidestrap_post_top_border_color');
			endif; ?>;
			border-bottom: 5px solid <?php
      if ( get_theme_mod( 'sidestrap_post_bottom_border_option' ) == 1 ) :
        echo 'none';
      else :
        echo get_theme_mod('sidestrap_post_bottom_border_color');
      endif; ?>;
			border-left: 5px solid <?php
			if ( get_theme_mod( 'sidestrap_post_left_border_option' ) == 1 ) :
				echo 'none';
			else :
				echo get_theme_mod('sidestrap_post_left_border_color');
			endif; ?>;
			border-right: 5px solid <?php
	    if ( get_theme_mod( 'sidestrap_post_right_border_option' ) == 1 ) :
	      echo 'none';
	    else :
	      echo get_theme_mod('sidestrap_post_right_border_color');
	    endif; ?>;
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
			background: <?php
        if ( get_theme_mod( 'sidestrap_widget_gradient' ) == 1 ) :
          echo get_theme_mod('sidestrap_widget_background_color');
        else : ?>;
          -moz-linear-gradient(45deg,<?php echo get_theme_mod('sidestrap_widget_background_color'); ?> 0%, rgba(0,0,0,0) 100%); /* FF3.6-15 */
		      -webkit-linear-gradient(45deg,<?php echo get_theme_mod('sidestrap_widget_background_color'); ?> 0%,rgba(0,0,0,0) 100%); /* Chrome10-25,Safari5.1-6 */
		      background:linear-gradient(45deg,<?php echo get_theme_mod('sidestrap_widget_background_color'); ?> 0%,rgba(0,0,0,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo get_theme_mod('sidestrap_widget_background_color'); ?>', endColorstr='#00f25202',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */ <?php
        endif; ?>
			}
			#sidestrap-footer {
				background-color: <?php echo get_theme_mod('sidestrap_custom_footer_color'); ?>;
				background-image: url(<?php echo get_theme_mod('sidestrap_custom_footer_image');?>);
			}

	</style>
<?php }
