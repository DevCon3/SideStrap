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
	* Top Block Custom Color*
	*/
	$wp_customize->add_setting( 'sidestrap_top_block_color', array(
		'default'    => '#455A64',
	  'transport'  => 'refresh'
	));

	$wp_customize->add_section( 'sidestrap_custom_block_colors', array(
		'title'    => __('Block Colors', 'SideStrap'),
	  'priority'  => 30
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'sidestrap_top_block_control', array(
		'label'    => __('Top Block Color', 'SideStrap'),
	  'section'  => 'sidestrap_custom_block_colors',
		'settings' => 'sidestrap_top_block_color'
	)));

	/**
	* Left Block Custom Color*
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
	* Right Block Custom Color*
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
