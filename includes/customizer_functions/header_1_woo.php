<?php
add_action('wp_head', 'stb_header_woo_1_top_header_css');
function stb_header_woo_1_top_header_css()
{?>
    <style type="text/css">
        .header_woo_1 .top_header_woo_1{
            background-color: <?php echo get_theme_mod('stb_header_4_top_header_background_setting'); ?>
        }
    </style>
<?}

add_action('wp_head', 'stb_header_woo_1_top_header_text_color_css');
function stb_header_woo_1_top_header_text_color_css()
{?>
    <style type="text/css">
        .header_2 .top_header_2{
            color: <?php echo get_theme_mod('stb_header_2_top_header_color_setting'); ?>
        }
    </style>
<?}

add_action('wp_head', 'stb_header_woo_1_logo_color_css');
function stb_header_woo_1_logo_color_css()
{?>
    <style type="text/css">
        .header_2 .middle_header_2 .logo_2 h1{
            color: <?php echo get_theme_mod('stb_header_2_top_header_logo_color_setting'); ?>
        }
    </style>
<?}

add_action('wp_head', 'stb_header_woo_1_middle_header_right_icons_color_css');
function stb_header_woo_1_middle_header_right_icons_color_css()
{?>
    <style type="text/css">
        .header_2 .middle_header_2 .middle_header_right_content .shop_icons .shop_cart i, .header_2 .middle_header_2 .middle_header_right_content .shop_icons .login i{
            color: <?php echo get_theme_mod('stb_header_2_middle_header_right_icons_setting'); ?>
        }
    </style>
<?}
