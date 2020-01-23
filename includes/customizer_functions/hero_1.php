<?php

add_action('wp_head', 'print_hero_1_bgc_gradient');
function print_hero_1_bgc_gradient()
{
?>
    <style media="screen">
    .hero_background_2{
        background:
        linear-gradient(
            <?php echo get_theme_mod('stb_main_page_hero_1_bgc_angle_setting') . deg; ?>,
            <?php echo get_theme_mod('stb_main_page_hero_1_bgc_color_1_setting'); ?> 0%,
            <?php echo get_theme_mod('stb_main_page_hero_2_bgc_color_2_setting'); ?> 100%);
    }
    </style>
<?
}

add_action('wp_head', 'print_hero_1_slide_1_description_text_color');
function print_hero_1_slide_1_description_text_color()
{
?>
    <style media="screen">
    .hero_background_2 .hero_2 .hero_content_wrapper_2 .hero_content_2 .hero_content_2_description{
        color:<?php echo get_theme_mod('stb_main_page_hero_slide_1_description_text_color_setting')?>;
    }
    </style>
<?
}
