<?php

add_action('wp_head', 'stb_bottom_header_bgc_color');
function stb_bottom_header_bgc_color()
{
?>
    <style media="screen">
    .header_2 .header_botttom_2 {
        background-color: <?php echo get_theme_mod('stb_header_2_bottom_header_bgc_color_setting'); ?>
    }
    </style>
<?
}

add_action('wp_head', 'stb_bottom_header_bgc_transparent');
function stb_bottom_header_bgc_transparent()
{
    if( get_theme_mod('stb_header_2_bottom_header_bgc_transperent_setting') == 'ok' ):
?>
    <style media="screen">
    .header_2 .header_botttom_2 {
        background-color: rgba(0, 0, 0, 0.0);
    }
    </style>
<? endif;
}

add_action('wp_head', 'stb_bottom_header_bgc_shadow');
function stb_bottom_header_bgc_shadow()
{
    if( get_theme_mod('stb_header_2_bottom_header_bgc_shadow_setting') == 'ok' ):
?>
    <style media="screen">
    .header_2 .header_botttom_2 {
        box-shadow: none;
    }
    </style>
<? endif;
}

add_action('wp_head', 'stb_bottom_header_text_color');
function stb_bottom_header_text_color()
{
?>
    <style media="screen">
    .header_2 .header_botttom_2 .main_menu .menu_ul .menu-item a {
        color: <?php echo get_theme_mod('stb_header_2_bottom_header_text_color_setting'); ?>
    }
    </style>
<?
}
