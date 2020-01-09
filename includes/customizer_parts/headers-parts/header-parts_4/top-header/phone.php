<?php
// Phone icon settings
$wp_customize->add_setting('stb_header_4_phone_icon_settings', array(
    'default' =>'<i class="fas fa-phone-alt"></i>',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_4_phone_icon_control',
        array(
            'label'  => __('Phone font-awesome icon','stb'),
            'section' => 'stb_header_4_section',
            'settings' => 'stb_header_4_phone_icon_settings',
            'type' => 'text'
        )
    )
);

//  Phone icon color settings
$wp_customize->add_setting('stb_header_4_phone_icon_color_settings', array(
    'default' =>'#fff',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_4_phone_icon_color_control',
        array(
            'label'  => __('Phone font-awesome icon color','stb'),
            'section' => 'stb_header_4_section',
            'settings' => 'stb_header_4_phone_icon_color_settings',
        )
    )
);

// Phone Number setting
$wp_customize->add_setting('stb_header_4_phone_number_settings', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_4_phone_control',
        array(
            'label'  => __('Phone number','stb'),
            'section' => 'stb_header_4_section',
            'settings' => 'stb_header_4_phone_number_settings',
            'type' => 'text'
        )
    )
);
