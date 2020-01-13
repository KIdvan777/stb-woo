<?php

$wp_customize->add_setting('stb_post_per_page_filter_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control(
    new WP_Customize_Control(
    $wp_customize,
     	'stb_post_per_page_filter_control',
    array(
    	'label' => __( 'Select Count of Posts', 'stb' ),
    	'section' => 'stb_product_section',
    	'settings' => 'stb_post_per_page_filter_setting',
        'type' => 'number'
    	)
 	)
);
