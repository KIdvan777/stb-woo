<?php

//  Header 2 bottom bgc header color settings
$wp_customize->add_setting('stb_header_2_bottom_header_bgc_color_setting', array(
    'default' =>'#fff',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_2_bottom_header_bgc_color_control',
        array(
            'label'  => __('Bottom Header Bgc Color','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_bottom_header_bgc_color_setting',
        )
    )
);

//  Header 2 bottom bgc header color settings
$wp_customize->add_setting('stb_header_2_bottom_header_bgc_transperent_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_bottom_header_bgc_transperent_control',
        array(
            'label'  => __('Bottom Header Transperent','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_bottom_header_bgc_transperent_setting',
            'type' => 'checkbox',
            'choices' => array('ok' => 'transparent'),
        )
    )
);

//  Header 2 bottom bgc header color settings
$wp_customize->add_setting('stb_header_2_bottom_header_bgc_shadow_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_bottom_header_bgc_shadow_control',
        array(
            'label'  => __('Bottom Header Shadow','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_bottom_header_bgc_shadow_setting',
            'type' => 'checkbox',
            'choices' => array('ok' => 'shadow'),
        )
    )
);

//  Header 2 bottom header color settings
$wp_customize->add_setting('stb_header_2_bottom_header_text_color_setting', array(
    'default' =>'#000',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_2_bottom_header_text_color_control',
        array(
            'label'  => __('Bottom Header Text Color','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_bottom_header_text_color_setting',
        )
    )
);

//  Header 2  header bgc settings
$wp_customize->add_setting('stb_header_2_bgc_color_setting', array(
    'default' =>'#fff',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_2_bgc_color_control',
        array(
            'label'  => __('Header Bgc Color','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_bgc_color_setting',
        )
    )
);

//  Header 2  header bgc gradient value 1 settings
$wp_customize->add_setting('stb_header_2_bgc_gradient_value_1_setting', array(
    'default' =>'#fff',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_bgc_gradient_value_1_control',
        array(
            'label'  => __('Header Bgc Gradient 1','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_bgc_gradient_value_1_setting',
            'type' => 'text'
        )
    )
);

//  Header 2  header bgc gradient value 2 settings
$wp_customize->add_setting('stb_header_2_bgc_gradient_value_2_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_bgc_gradient_value_2_control',
        array(
            'label'  => __('Header Bgc Gradient 2','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_bgc_gradient_value_2_setting',
            'type' => 'text'
        )
    )
);

//  Header 2  header bgc gradient value 2 settings
$wp_customize->add_setting('stb_header_2_bgc_gradient_angle_setting', array(
    'default' =>'0',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_bgc_gradient_angle_control',
        array(
            'label'  => __('Header Bgc Gradient Angle','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_bgc_gradient_angle_setting',
            'type' => 'number'
        )
    )
);

//  Header 2  header bgc gradient value 2 settings
$wp_customize->add_setting('stb_header_2_bgc_triger_setting', array(
    'default' =>'bgc',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_bgc_triger_control',
        array(
            'label'  => __('Header Bgc','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_bgc_triger_setting',
            'type' => 'radio',
            'choices'        => array(
                'bgc'   => __( 'Bgc' ),
                'grad'  => __( 'Grad' ),
            )
        )
    )
);
