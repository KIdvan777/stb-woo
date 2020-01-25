<?php
include( get_template_directory() . '/includes/customizer_parts/headers-parts/header-parts_2/top_header/social-settings/social.php' );

$wp_customize->add_setting('stb_header_2_top_header_button_setting', array(
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Toggle_Button_H2_Top_Control( $wp_customize, 'stb_header_2_top_header_button_control',
        array(
            'label'  => __('Верхний хэдер','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_button_setting',
        )
    )
);
// Email icon settings
$wp_customize->add_setting('stb_header_2_email_icon_settings', array(
    'default' =>'<i class="fas fa-envelope"></i>',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_email_icon_control',
        array(
            'label'  => __('Email font-awesome icon','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_email_icon_settings',
            'type' => 'text'
        )
    )
);

//  Email icon color settings
$wp_customize->add_setting('stb_header_2_email_icon_color_settings', array(
    'default' =>'#fff',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_2_email_icon_color_control',
        array(
            'label'  => __('Email font-awesome icon color','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_email_icon_color_settings',
        )
    )
);

// Email address setting
$wp_customize->add_setting('stb_header_2_email_settings', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_email_control',
        array(
            'label'  => __('Email address','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_email_settings',
            'type' => 'text'
        )
    )
);
// Phone 1 icon settings
$wp_customize->add_setting('stb_header_2_phone_icon_settings', array(
    'default' =>'<i class="fas fa-phone-alt"></i>',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_phone_icon_control',
        array(
            'label'  => __('Phone font-awesome icon','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_phone_icon_settings',
            'type' => 'text'
        )
    )
);

//  Phone 1 icon color settings
$wp_customize->add_setting('stb_header_2_phone_icon_color_settings', array(
    'default' =>'#fff',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_2_phone_icon_color_control',
        array(
            'label'  => __('Phone font-awesome icon color','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_phone_icon_color_settings',
        )
    )
);

// Phone 1 Number setting
$wp_customize->add_setting('stb_header_2_phone_number_settings', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_phone_control',
        array(
            'label'  => __('Phone number','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_phone_number_settings',
            'type' => 'text'
        )
    )
);
// Phone 2 icon settings
$wp_customize->add_setting('stb_header_2_phone_icon_2_settings', array(
    'default' =>'<i class="fas fa-phone-alt"></i>',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_phone_icon_2_control',
        array(
            'label'  => __('Phone font-awesome icon','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_phone_icon_2_settings',
            'type' => 'text'
        )
    )
);

//  Phone 2 icon color settings
$wp_customize->add_setting('stb_header_2_phone_icon_2_color_settings', array(
    'default' =>'#fff',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_2_phone_icon_2_color_control',
        array(
            'label'  => __('Phone font-awesome icon color','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_phone_icon_2_color_settings',
        )
    )
);

// Phone 2 Number setting
$wp_customize->add_setting('stb_header_2_phone_number_2_settings', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_phone_number_2_control',
        array(
            'label'  => __('Phone number','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_phone_number_2_settings',
            'type' => 'text'
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
            'label'  => __('Цвет текста верх шапки','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_color_setting',
        )
    )
);

//  Header 2 bgc color settings
$wp_customize->add_setting('stb_header_2_bgc_color_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_2_top_header_bgc_color_control',
        array(
            'label'  => __('Цвет фона верх шапки','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_bgc_color_setting',
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
