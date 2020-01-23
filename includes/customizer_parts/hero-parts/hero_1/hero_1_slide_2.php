<?php

$wp_customize->add_setting('main_page_hero_image_2_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stb_hero_image_2_input',
        array(
            'label'  => __('Hero handle 2','stb'),
            'section' => 'main_page_hero_section',
            'settings' => 'main_page_hero_image_2_setting',

        )
    )
);
