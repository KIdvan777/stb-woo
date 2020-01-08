<?php
//  Header 3 settings
$wp_customize->add_setting('stb_header_3_settings', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_section('stb_header_3_section', array(
    'title' => __('STB Header 3 Settings', 'stb'),
    'prioryty' => 20,
    'panel'=>'stb_headers_panel'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_3_control',
        array(
            'label'  => __('Facebook handle','stb'),
            'section' => 'stb_header_3_section',
            'settings' => 'stb_header_3_settings',

        )
    )
);
