<?php

if( ! defined( 'ABSPATH' )){
	exit;
}

function stb_theme_customize_register( $wp_customize ){
    include(get_template_directory() . '/includes/customizer_parts/headers.php');
    include(get_template_directory() . '/includes/customizer_parts/hero.php');
	include(get_template_directory() . '/includes/customizer_parts/big_banner.php');
	include(get_template_directory() . '/includes/customizer_parts/menu.php');
	include(get_template_directory() . '/includes/customizer_parts/product-menu.php');
	include(get_template_directory() . '/includes/customizer_parts/filter.php');
};
add_action('customize_register', 'stb_theme_customize_register');
