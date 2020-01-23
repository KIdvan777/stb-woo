<?php

$wp_customize->add_setting('main_page_hero_choices_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_section('main_page_hero_section', array(
    'title' => __('STB Hero', 'stb'),
    'prioryty' => 35,
    'panel'=>'stb_headers_panel'
));

// Hero section Choices
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_hero_choices_input',
        array(
            'label'  => __('Hero  choices','stb'),
            'section' => 'main_page_hero_section',
            'settings' => 'main_page_hero_choices_setting',
            'type' => 'radio',
            'choices'        => array(
                'hero 1'   => __( 'hero 1' ),
                'hero 2'  => __( 'hero 2' ),
                'hero 3'  => __( 'hero 3' )
            )
        )
    )
);

$wp_customize->add_setting('main_page_hero_choices_button_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

// Hero section Choices
$wp_customize->add_control( new WP_Customize_Toogle_Button_Control( $wp_customize, 'main_page_hero_choices_button_control',
        array(
            'label'  => __('Hero  Button','stb'),
            'section' => 'main_page_hero_section',
            'settings' => 'main_page_hero_choices_button_setting',

        )
    )
);
