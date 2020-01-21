<?php
if( ! defined( 'ABSPATH' )){
	exit;
}

$wp_customize->add_setting('product_menu_setting', array(
    'default' =>'product_menu_1',
    'transport' =>'refresh'
));

$wp_customize->add_section('product_menu_section', array(
    'title' => __('Product Menu', 'stb'),
    'prioryty' => 35,
    'panel' => 'stb_headers_panel'
));

// Hero section Choices
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'product_menu_control',
        array(
            'label'  => __('Product Menu choices','stb'),
            'section' => 'product_menu_section',
            'settings' => 'product_menu_setting',
            'type' => 'radio',
            'choices'        => array(
                'menu 1'   => __( 'product menu 1' ),
                'menu 2'  => __( 'product menu 2' ),
                'menu 3'  => __( 'product menu 3' )
            )
        )
    )
);

// Header 4 settings
include( get_template_directory() . '/includes/customizer_parts/product-menu-parts/product_menu_2.php' );
