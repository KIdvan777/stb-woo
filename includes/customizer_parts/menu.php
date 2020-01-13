<?php

$wp_customize->add_setting('menu_setting', array(
    'default' =>'menu 1',
    'transport' =>'refresh'
));

$wp_customize->add_section('menu_section', array(
    'title' => __('STB Menu', 'stb'),
    'prioryty' => 35,
    'panel' => 'stb_headers_panel'
));

// Hero section Choices
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'menu_control',
        array(
            'label'  => __('Menu  choices','stb'),
            'section' => 'menu_section',
            'settings' => 'menu_setting',
            'type' => 'radio',
            'choices'        => array(
                'menu 1'   => __( 'menu 1' ),
                'menu 2'  => __( 'menu 2' ),
                'menu 3'  => __( 'menu 3' )
            )
        )
    )
);
