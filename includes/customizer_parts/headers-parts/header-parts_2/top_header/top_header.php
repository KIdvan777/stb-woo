<?php
// Social Icons

//  Header 2 bgc color settings
$wp_customize->add_setting('stb_header_2_bgc_color_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_2_top_header_color_control',
        array(
            'label'  => __('Top Header Text Color','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_bgc_color_setting',
        )
    )
);

//  Header 2 top header color settings
$wp_customize->add_setting('stb_header_2_top_header_color_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_2_top_header_color_control',
        array(
            'label'  => __('Top Header Text Color','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_color_setting',
        )
    )
);

//  Header 2 top header color settings
$wp_customize->add_setting('stb_header_2_top_header_logo_color_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_2_top_header_logo_color_control',
        array(
            'label'  => __('Top Header LOGO Color','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_logo_color_setting',
        )
    )
);

//  Header 2 top header color settings
$wp_customize->add_setting('stb_header_2_middle_header_right_icons_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_2_middle_header_right_icons_control',
        array(
            'label'  => __('Middle Header Login & Shop Icons Color','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_middle_header_right_icons_setting',
        )
    )
);

//  Header 2 Image non front page settings
$wp_customize->add_setting('stb_header_2_background_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));


$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stb_header_2_background_control',
        array(
            'label'  => __('Background IMG','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_background_setting',

        )
    )
);
