<?php

$wp_customize->add_setting('stb_main_page_hero_1_bgc_color_1_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_main_page_hero_1_bgc_color_1_control',
        array(
            'label'  => __('Color 1','stb'),
            'section' => 'main_page_hero_section',
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
            'section' => 'main_page_hero_section',
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
            'section' => 'main_page_hero_section',
            'settings' => 'stb_main_page_hero_1_bgc_angle_setting',
            'type' => 'text'
        )
    )
);
