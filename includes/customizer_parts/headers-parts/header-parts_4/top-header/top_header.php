<?php
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

//Top header background color setting
$wp_customize->add_setting('stb_header_4_top_header_background_setting', array(
    'default' =>'#77AF3A',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_4_top_header_background_control',
        array(
            'label'  => __('Цвет фона верхнего хэдера','stb'),
            'section' => 'stb_header_4_section',
            'settings' => 'stb_header_4_top_header_background_setting',
        )
    )
);

// Top header font-size settings
$wp_customize->add_setting('stb_header_4_top_header_font_size_setting', array(
    'default' =>'14px',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_4_top_header_font_size_control',
        array(
            'label'  => __('Размер текста верхнего хэдера','stb'),
            'section' => 'stb_header_4_section',
            'settings' => 'stb_header_4_top_header_font_size_setting',
            'type' => 'text'
        )
    )
);

// Top header font-family settings

// Top header font-color settings
$wp_customize->add_setting('stb_header_4_top_header_font_color_setting', array(
    'default' =>'14px',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_4_top_header_font_color_control',
        array(
            'label'  => __('Размер текста верхнего хэдера','stb'),
            'section' => 'stb_header_4_section',
            'settings' => 'stb_header_4_top_header_font_color_setting',
        )
    )
);
