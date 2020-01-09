<?php
// Email icon settings
$wp_customize->add_setting('stb_header_4_email_icon_settings', array(
    'default' =>'<i class="fas fa-envelope"></i>',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_4_email_icon_control',
        array(
            'label'  => __('Email font-awesome icon','stb'),
            'section' => 'stb_header_4_section',
            'settings' => 'stb_header_4_email_icon_settings',
            'type' => 'text'
        )
    )
);

//  Email icon color settings
$wp_customize->add_setting('stb_header_4_email_icon_color_settings', array(
    'default' =>'#fff',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_4_email_icon_color_control',
        array(
            'label'  => __('Email font-awesome icon color','stb'),
            'section' => 'stb_header_4_section',
            'settings' => 'stb_header_4_email_icon_color_settings',
        )
    )
);

// Email address setting
$wp_customize->add_setting('stb_header_4_email_settings', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_4_email_control',
        array(
            'label'  => __('Email address','stb'),
            'section' => 'stb_header_4_section',
            'settings' => 'stb_header_4_email_settings',
            'type' => 'text'
        )
    )
);
