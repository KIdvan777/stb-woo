<?php
if( ! defined( 'ABSPATH' )){
	exit;
}

$wp_customize->add_setting('product_menu_2_bgc_color_setting', array(
    'default' =>'product_menu_2',
    'transport' =>'refresh'
));

// Hero section Choices
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_menu_2_control',
        array(
            'label'  => __('Product Menu 2 settings','stb'),
            'section' => 'product_menu_section',
            'settings' => 'product_menu_2_bgc_color_setting',
        )
    )
);
