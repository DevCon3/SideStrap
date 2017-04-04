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
		'default'    => '#DBE7A2',
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
		'label'    => __('Outer Title Shadow', 'SideStrap'),
		'section'  => 'sidestrap_custom_menu_colors',
		'settings' => 'sidestrap_custom_menu_color'
	)));

	/**
	* Adds Post Color Options To Admin Panel*
	*/
	$wp_customize->add_section( 'sidestrap_post_colors', array(
		'title'    => __('Post Colors', 'SideStrap'),
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
		'section'  => 'sidestrap_post_colors',
		'settings' => 'sidestrap_post_title_color'
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
}

add_action( 'customize_register', 'sidestrap_customize_register' );

/**
* Outputs Customizer CSS changes*
*/
function sidestrap_customizer_css_changes() { ?>
	<style type="text/css">
    #top-block {
			background: <?php echo get_theme_mod('sidestrap_top_block_color'); ?>;
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
