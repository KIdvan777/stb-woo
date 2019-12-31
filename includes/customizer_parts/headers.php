<?php
$wp_customize->add_panel('main_page_settings_panel', array(

));

$wp_customize->add_setting('main_page_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_section('main_page_section', array(
    'title' => __('STB Headers', 'stb'),
    'prioryty' => 30
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_social_facebook_input',
        array(
            'label'  => __('Facebook handle','stb'),
            'section' => 'main_page_section',
            'settings' => 'main_page_setting',
            'type' => 'radio',
            'choices'        => array(
                'header 1'   => __( 'header 1' ),
                'header 2'  => __( 'header 2' ),
                'header 3'  => __( 'header 3' )
            )
        )
    )
);
