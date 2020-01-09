<?php

$wp_customize->add_setting( 'stb_headers_1_menu_submenu_setting', array(
      'transport'=>'refresh'
));
$wp_customize->add_control(new Wp_Customize_Image_Control($wp_customize,'stb_header_1_top_header_menu_1_submenu_control',array(
      'label'=>__('Top Header SubMenu Image','forest'),
      'section'=>'stb_header_4_section',
      'settings'=>'stb_headers_1_menu_submenu_setting',
)));
