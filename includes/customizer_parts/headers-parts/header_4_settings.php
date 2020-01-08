<?php
//  Header 4 settings

// Section header 4 woocommerce setting
$wp_customize->add_section('stb_header_4_section', array(
    'title' => __('STB Header 4 Settings', 'stb'),
    'prioryty' => 25,
    'panel'=>'stb_headers_panel'
));

// Header 4 top header on/off
$wp_customize->add_setting('stb_header_4_top_header_setting', array(
    'default' =>'on',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_4_top_header_control',
        array(
            'label'  => __('Top header on/off','stb'),
            'section' => 'stb_header_4_section',
            'settings' => 'stb_header_4_top_header_setting',
            'type'     => 'radio',
			'choices'  => [
				'on'    => 'on',
				'off'   => 'off',
			]
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

//Email address setting
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

//Language settings

//

//Email address setting
$wp_customize->add_setting('stb_header_4_top_header_background_setting', array(
    'default' =>'#77AF3A',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_4_top_header_background_control',
        array(
            'label'  => __('Background color','stb'),
            'section' => 'stb_header_4_section',
            'settings' => 'stb_header_4_top_header_background_setting',
        )
    )
);
