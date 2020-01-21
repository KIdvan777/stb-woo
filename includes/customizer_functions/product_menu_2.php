<?php
if( ! defined( 'ABSPATH' )){
	exit;
}

add_action('wp_head', 'print_product_menu_2_bgc_color');
function print_product_menu_2_bgc_color()
{
?>
    <style media="screen">
    .product_menu_2_section
    .product_menu_2_container
    .product_menu_2{
        background-color:<?php echo get_theme_mod('product_menu_2_bgc_color_setting'); ?>
    }
    </style>
<?
}
