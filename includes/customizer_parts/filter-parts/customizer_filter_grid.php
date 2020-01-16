<?php

$wp_customize->add_setting('stb_grid_filter_setting', array(
    'default' =>'6',
    'transport' =>'refresh'
));

$wp_customize->add_control(
    new WP_Customize_Control(
     $wp_customize,
     	'stb_grid_filter_control',
     array(
     	'label' => __( 'Select A Columns', 'stb' ),
     	'section' => 'stb_product_section',
     	'settings' => 'stb_grid_filter_setting',
        'type' => 'select',
        'choices' => array(
            'col-md-4' => '4 columns',
            'col-md-6' => '6 columns',
            'col-md-8' => '8 columns',
            'col-md-12' => '12 columns',
            )
     	)
 	)
);
