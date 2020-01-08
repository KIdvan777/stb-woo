<?php
//  Header 1 settings
$wp_customize->add_setting('stb_header_1_settings', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_section('stb_header_1_section', array(
    'title' => __('STB Header 1 Settings', 'stb'),
    'prioryty' => 10,
    'panel'=>'stb_headers_panel'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_1_control',
        array(
            'label'  => __('Facebook handle','stb'),
            'section' => 'stb_header_1_section',
            'settings' => 'stb_header_1_settings',

        )
    )
);
