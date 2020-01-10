<?php

if( ! defined( 'ABSPATH' )){
	exit;
}

function stb_theme_customize_register( $wp_customize ){
    include(get_template_directory() . '/includes/customizer_parts/headers.php');
    include(get_template_directory() . '/includes/customizer_parts/hero.php');
	include(get_template_directory() . '/includes/customizer_parts/big_banner.php');
};
add_action('customize_register', 'stb_theme_customize_register');


add_action('wp_head', 'stb_header_woo_1_top_header_css');
function stb_header_woo_1_top_header_css()
{?>
    <style type="text/css">
        .header_woo_1 .top_header_woo_1{
            background-color: <?php echo get_theme_mod('stb_header_4_top_header_background_setting'); ?>
        }
    </style>
<?}



function change_menu_item_args( $args, $item, $depth ) {
    $img = get_theme_mod('forest_headers_1_menu_submenu_setting');
	if ( $depth === 2) {
		$args->before = '<li class="img_item"></li>';
	}else{
        $args->before = '';
    }
	return $args;
}
add_filter( 'nav_menu_item_args', 'change_menu_item_args', 10, 3 );
