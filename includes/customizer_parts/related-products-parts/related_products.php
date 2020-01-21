<?php

$wp_customize->add_setting('stb_main_page_related_products_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_section('stb_main_page_related_products_section', array(
    'title' => __('STB Related Products', 'stb'),
    'prioryty' => 65,
    'panel' => 'stb_headers_panel'
));

// Hero section Choices
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_main_page_related_products_control',
        array(
            'label'  => __('Related Products choices','stb'),
            'section' => 'stb_main_page_related_products_section',
            'settings' => 'stb_main_page_related_products_setting',
            'type' => 'radio',
            'choices'        => array(
                'related 1'   => __( 'related 1' ),
                'related 2'  => __( 'related 2' ),
                'related 3'  => __( 'related 3' )
            )
        )
    )
);
