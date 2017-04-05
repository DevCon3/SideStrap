<?php
/**
 * SideStrap Theme Customizer
 *
 * @package SideStrap
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sidestrap_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/**
	* Adds Block Section To Admin Panel*
	*/
	$wp_customize->add_section( 'sidestrap_custom_block_colors', array(
		'title'    => __('Block Colors', 'SideStrap'),
	  'priority'  => 30
	));

	/**
	* Top Block Color Option*
	*/
	$wp_customize->add_setting( 'sidestrap_top_block_color', array(
		'default'    => '#455A64',
	  'transport'  => 'refresh'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'sidestrap_top_block_control', array(
		'label'    => __('Top Block Color', 'SideStrap'),
	  'section'  => 'sidestrap_custom_block_colors',
		'settings' => 'sidestrap_top_block_color'
	)));

	/**
	* Top Block Image Options*
	*/
	$wp_customize->add_setting( 'sidestrap_top_block_image', array(
		'default'    => get_bloginfo('template_directory') . '/images/castle4.jpg',
		'type'  => 'theme_mod'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'sidestrap_top_block_image_control', array(
		'label'    => __('Top Block Image', 'SideStrap'),
		'section'  => 'sidestrap_custom_block_colors',
		'settings' => 'sidestrap_top_block_image'
	)));

	/**
	* Left Block Color Option*
	*/
	$wp_customize->add_setting( 'sidestrap_left_block_color', array(
		'default'    => '#263238',
	  'transport'  => 'refresh'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'sidestrap_left_block_control', array(
		'label'    => __('Left Block Color', 'SideStrap'),
	  'section'  => 'sidestrap_custom_block_colors',
		'settings' => 'sidestrap_left_block_color'
	)));

	/**
	* Right Block Color Option*
	*/
	$wp_customize->add_setting( 'sidestrap_right_block_color', array(
		'default'    => '#263238',
		'transport'  => 'refresh'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'sidestrap_right_block_control', array(
		'label'    => __('Right Block Color', 'SideStrap'),
		'section'  => 'sidestrap_custom_block_colors',
		'settings' => 'sidestrap_right_block_color'
	)));

	/**
	* Adds Title Section To Admin Panel*
	*/
	$wp_customize->add_section( 'sidestrap_custom_title_colors', array(
		'title'    => __('Title Colors', 'SideStrap'),
	  'priority'  => 20
	));

	/**
	* Title Color Option*
	*/
	$wp_customize->add_setting( 'sidestrap_custom_title_color', array(
		'default'    => '#000000',
	  'transport'  => 'refresh'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'sidestrap_custom_title_control', array(
		'label'    => __('Title Color', 'SideStrap'),
	  'section'  => 'sidestrap_custom_title_colors',
		'settings' => 'sidestrap_custom_title_color'
	)));

	/**
	* Title Inner Shadow Option*
	*/
	$wp_customize->add_setting( 'sidestrap_inner_shadow_color', array(
		'default'    => '#c5e829',
	  'transport'  => 'refresh'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'sidestrap_inner_shadow_control', array(
		'label'    => __('Inner Title Shadow', 'SideStrap'),
	  'section'  => 'sidestrap_custom_title_colors',
		'settings' => 'sidestrap_inner_shadow_color'
	)));

	/**
	* Title Outer Shadow Option*
	*/
	$wp_customize->add_setting( 'sidestrap_outer_shadow_color', array(
		'default'    => '#FFFFFF',
	  'transport'  => 'refresh'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'sidestrap_outer_shadow_control', array(
		'label'    => __('Outer Title Shadow', 'SideStrap'),
	  'section'  => 'sidestrap_custom_title_colors',
		'settings' => 'sidestrap_outer_shadow_color'
	)));

	/**
	* Adds Menu Colors Section To Admin Panel*
	*/
	$wp_customize->add_section( 'sidestrap_custom_menu_colors', array(
		'title'    => __('Menu Colors', 'SideStrap'),
	  'priority'  => 20
	));

	/**
	* Menu Color Option*
	*/
	$wp_customize->add_setting( 'sidestrap_custom_menu_color', array(
		'default'    => '#FFFFFF',
		'transport'  => 'refresh'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'sidestrap_menu_color_control', array(
		'label'    => __('Menu Color', 'SideStrap'),
		'section'  => 'sidestrap_custom_menu_colors',
		'settings' => 'sidestrap_custom_menu_color'
	)));

	/**
	* Adds Post Options To Admin Panel*
	*/
	$wp_customize->add_section( 'sidestrap_post_options', array(
		'title'    => __('Post Options', 'SideStrap'),
	  'priority'  => 40
	));

	/**
	* Post Title Color Options*
	*/
	$wp_customize->add_setting( 'sidestrap_post_title_color', array(
		'default'    => '#000000',
		'transport'  => 'refresh'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'sidestrap_post_title_control', array(
		'label'    => __('Post Title Color', 'SideStrap'),
		'section'  => 'sidestrap_post_options',
		'settings' => 'sidestrap_post_title_color'
	)));

	// Inlcude the Alpha Color Picker.
	require_once( dirname( __FILE__ ) . '/alpha-color-picker/alpha-color-picker.php' );

  /**
	* Post Background Color
	*/
	$wp_customize->add_setting(
		'sidestrap_post_background',
		array(
			'default'     => 'rgba(255,255,163,.65)',
			'transport'   => 'refresh'
		)
	);

	/**
	* Post Background Color Control
	*/
	$wp_customize->add_control(
		new Customize_Alpha_Color_Control(
			$wp_customize,
			'sidestrap_post_background_control',
			array(
				'label'     => __( 'Post Background Color', 'sidestrap' ),
				'section'   => 'sidestrap_post_options',
				'settings'  => 'sidestrap_post_background',
				'capability'  => 'edit_theme_options',
				'transport'   => 'refresh'
	)));

	/**
	* Post Link Color Options*
	*/
	$wp_customize->add_setting( 'sidestrap_post_links_color', array(
		'default'    => '#640c0e',
		'transport'  => 'refresh'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'sidestrap_post_link_control', array(
		'label'    => __('Post Link Color', 'SideStrap'),
		'section'  => 'sidestrap_post_options',
		'settings' => 'sidestrap_post_links_color'
	)));

	/**
	* Adds Background Options To Admin Panel*
	*/
	$wp_customize->add_section( 'sidestrap_background_options', array(
	  'title'    => __('Background', 'SideStrap'),
	  'priority'  => 50
	));

	/**
	* Background Color Options*
	*/
	$wp_customize->add_setting( 'sidestrap_custom_background_color', array(
		'default'    => '#ffffff',
		'transport'  => 'refresh'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'sidestrap_custom_background_color_control', array(
		'label'    => __('Background Color', 'SideStrap'),
		'section'  => 'sidestrap_background_options',
		'settings' => 'sidestrap_custom_background_color'
	)));

	/**
	* Background Image Options*
	*/
	$wp_customize->add_setting( 'sidestrap_background_image', array(
		'default'    => get_bloginfo('template_directory') . '/images/castle4.jpg',
		'type'  => 'theme_mod'
	));

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'sidestrap_background_image_control', array(
		'label'    => __('Background Image', 'SideStrap'),
		'section'  => 'sidestrap_background_options',
		'settings' => 'sidestrap_background_image'
	)));

  /**
	* Adds Widget Options To Admin Panel
	*/
	$wp_customize->add_section( 'sidestrap_widget_options', array(
	  'title'    => __('Widget Colors', 'SideStrap'),
	  'priority'  => 50
	));

	/**
	* Widget Color Options*
	*/
	$wp_customize->add_setting( 'sidestrap_widget_background_color', array(
		'default'    => '#ffffff',
		'transport'  => 'refresh'
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'sidestrap_widget_background_color_control', array(
		'label'    => __('Gradient Color', 'SideStrap'),
		'section'  => 'sidestrap_widget_options',
		'settings' => 'sidestrap_widget_background_color'
	)));

}

add_action( 'customize_register', 'sidestrap_customize_register' );

/**
* Outputs Customizer CSS changes*
*/
function sidestrap_customizer_css_changes() { ?>
	<style type="text/css">
    #top-block {
			background-color: <?php echo get_theme_mod('sidestrap_top_block_color'); ?>;
			background-image: url(<?php echo get_theme_mod('sidestrap_top_block_image', get_bloginfo('template_url'). '/images/castle4.jpg'); ?>);
		}
		#left-block,
		#left-block::before {
			background: <?php echo get_theme_mod('sidestrap_left_block_color'); ?>;
		}
		#right-block,
		#right-block::before {
			background: <?php echo get_theme_mod('sidestrap_right_block_color'); ?>;
		}
    .site-title a {
			color: <?php echo get_theme_mod('sidestrap_custom_title_color'); ?>;
		}
		.site-title a {
			text-shadow: 0 0 20px <?php echo get_theme_mod('sidestrap_inner_shadow_color'); ?>;
		}
		.h1background {
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
			background-color: <?php echo get_theme_mod('sidestrap_custom_background_color'); ?>;
			background-image: url(<?php echo get_theme_mod('sidestrap_background_image', get_bloginfo('template_url'). '/images/castle4.jpg'); ?>);
			background-repeat: no-repeat;
      background-attachment: fixed;
			background-size: cover;
		}
		article {
			background-color: <?php echo get_theme_mod('sidestrap_post_background'); ?>;
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

add_action('wp_head', 'sidestrap_customizer_css_changes');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sidestrap_customize_preview_js() {
	wp_enqueue_script( 'sidestrap_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'sidestrap_customize_preview_js' );
