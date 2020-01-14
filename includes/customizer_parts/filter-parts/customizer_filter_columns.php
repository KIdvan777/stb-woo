<?php

$wp_customize->add_setting('stb_columns_filter_setting', array(
    'default' =>'6',
    'transport' =>'refresh'
));

$wp_customize->add_control(
    new WP_Customize_Control(
     $wp_customize,
     	'stb_columns_filter_control',
     array(
     	'label' => __( 'Select A Columns', 'stb' ),
     	'section' => 'stb_product_section',
     	'settings' => 'stb_columns_filter_setting',
        'type' => 'select',
        'choices' => array(
            '3' => '3 columns',
            '4' => '4 columns',
            '5' => '5 columns',
            '6' => '6 columns',
            )
     	)
 	)
);
