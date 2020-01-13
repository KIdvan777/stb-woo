<?php

$wp_customize->add_setting('main_page_big_banner_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_section('main_page_big_banner_section', array(
    'title' => __('STB Big banner', 'stb'),
    'prioryty' => 35,
    'panel' => 'stb_headers_panel'
));

// Hero section Choices
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_big_banner_input',
        array(
            'label'  => __('Banner  choices','stb'),
            'section' => 'main_page_big_banner_section',
            'settings' => 'main_page_big_banner_setting',
            'type' => 'radio',
            'choices'        => array(
                'banner 1'   => __( 'banner 1' ),
                'banner 2'  => __( 'banner 2' ),
                'banner 3'  => __( 'banner 3' )
            )
        )
    )
);

// Hero Slider Image 1
$wp_customize->add_setting('main_page_big_banner_image_1_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stb_big_banner_1_input',
        array(
            'label'  => __('Hero handle 1','stb'),
            'section' => 'main_page_big_banner_section',
            'settings' => 'main_page_big_banner_image_1_setting',

        )
    )
);
