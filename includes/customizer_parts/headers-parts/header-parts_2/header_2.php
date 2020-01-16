<?php
//  Header 2 settings
$wp_customize->add_setting('stb_header_2_background_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_section('stb_header_2_section', array(
    'title' => __('STB Header 2 Settings', 'stb'),
    'prioryty' => 15,
    'panel'=>'stb_headers_panel'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stb_header_2_background_control',
        array(
            'label'  => __('Background IMG','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_background_setting',

        )
    )
);
