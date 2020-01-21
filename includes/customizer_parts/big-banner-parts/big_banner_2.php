<?php

$wp_customize->add_setting('main_page_big_banner_2_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stb_big_banner_2_input',
        array(
            'label'  => __('Banner handle 2','stb'),
            'section' => 'main_page_big_banner_section',
            'settings' => 'main_page_big_banner_2_setting',

        )
    )
);
