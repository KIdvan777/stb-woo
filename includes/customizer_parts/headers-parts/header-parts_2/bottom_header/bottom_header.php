<?php

//  Header 2 bottom bgc header color settings
$wp_customize->add_setting('stb_header_2_bottom_header_bgc_color_setting', array(
    'default' =>'#fff',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_2_bottom_header_bgc_color_control',
        array(
            'label'  => __('Bottom Header Bgc Color','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_bottom_header_bgc_color_setting',
        )
    )
);

//  Header 2 bottom bgc header color settings
$wp_customize->add_setting('stb_header_2_bottom_header_bgc_transperent_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_bottom_header_bgc_transperent_control',
        array(
            'label'  => __('Bottom Header Transperent','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_bottom_header_bgc_transperent_setting',
            'type' => 'checkbox',
            'choices' => array('ok' => 'transparent'),
        )
    )
);

//  Header 2 bottom bgc header color settings
$wp_customize->add_setting('stb_header_2_bottom_header_bgc_shadow_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_bottom_header_bgc_shadow_control',
        array(
            'label'  => __('Bottom Header Shadow','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_bottom_header_bgc_shadow_setting',
            'type' => 'checkbox',
            'choices' => array('ok' => 'shadow'),
        )
    )
);

//  Header 2 bottom header color settings
$wp_customize->add_setting('stb_header_2_bottom_header_text_color_setting', array(
    'default' =>'#000',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_2_bottom_header_text_color_control',
        array(
            'label'  => __('Bottom Header Text Color','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_bottom_header_text_color_setting',
        )
    )
);
