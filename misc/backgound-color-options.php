<?php
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
$wp_customize->add_setting( 'sidestrap_background_color', array(
  'default'    => '#FFFFFF',
  'transport'  => 'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'sidestrap_background_color_control', array(
  'label'    => __('Background Color', 'SideStrap'),
  'section'  => 'sidestrap_background_options',
  'settings' => 'sidestrap_background_color'
)));
