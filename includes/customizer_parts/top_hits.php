<?php
if( ! defined( 'ABSPATH' )){
	exit;
}

$wp_customize->add_setting('stb_main_page_top_hits_setting', array(
    'default' =>'top_hits 1',
    'transport' =>'refresh'
));

$wp_customize->add_section('top_hits_menu_section', array(
    'title' => __('Top Hits Menu', 'stb'),
    'prioryty' => 55,
    'panel' => 'stb_headers_panel'
));

// Hero section Choices
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_main_page_top_hits_control',
        array(
            'label'  => __('Top Hits choices','stb'),
            'section' => 'top_hits_menu_section',
            'settings' => 'stb_main_page_top_hits_setting',
            'type' => 'radio',
            'choices'        => array(
                'top_hits 1'   => __( 'top hits 1' ),
                'top_hits 2'  => __( 'top hits 2' ),
				'top_hits 2_2'  => __( 'top hits 2 ajax' ),
                'top_hits 3'  => __( 'top hits 3' )
            )
        )
    )
);
