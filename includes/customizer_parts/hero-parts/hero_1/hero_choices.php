<?php
$wp_customize->add_section('main_page_hero_1_section', array(
    'title' => __('Hero', 'stb'),
    'prioryty' => 35,
    'panel'=>'stb_headers_panel'
));

$wp_customize->add_setting('main_page_hero_1_button_all_setting', array(
    'default' =>'hero 1',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Toggle_All_Control( $wp_customize, 'main_page_hero_1_button_all_control',
        array(
            'label'  => __('Настройки Слайдера 1','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'main_page_hero_1_button_all_setting',
        )
    )
);

$wp_customize->add_setting('main_page_hero_1_choices_setting', array(
    'default' =>'hero 1',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'main_page_hero_1_choices_control',
        array(
            'label'  => __('Hero  choices','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'main_page_hero_1_choices_setting',
            'type' => 'radio',
            'choices'        => array(
                'hero 1'   => __( 'hero 1' ),
                'hero 2'  => __( 'hero 2' ),
                'hero 3'  => __( 'hero 3' )
            )
        )
    )
);
// Background
$wp_customize->add_setting('stb_main_page_hero_1_bgc_color_1_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_main_page_hero_1_bgc_color_1_control',
        array(
            'label'  => __('Color 1','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'stb_main_page_hero_1_bgc_color_1_setting',

        )
    )
);

// Hero slider 1 title
$wp_customize->add_setting('stb_main_page_hero_2_bgc_color_2_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_main_page_hero_2_bgc_color_2_control',
        array(
            'label'  => __('Color 2','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'stb_main_page_hero_2_bgc_color_2_setting',

        )
    )
);

// Hero slider 1 title
$wp_customize->add_setting('stb_main_page_hero_1_bgc_angle_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_main_page_hero_1_bgc_angle_control',
        array(
            'label'  => __('Angle','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'stb_main_page_hero_1_bgc_angle_setting',
            'type' => 'text'
        )
    )
);
