<?php

if( get_theme_mod('product_menu_setting') == 'menu 1' ){
     get_template_part('template-parts/product-menu/product_menu_parts/product_menu_1');
}
if( get_theme_mod('product_menu_setting') == 'menu 2' ){
     get_template_part('template-parts/product-menu/product_menu_parts/product_menu_2');
}
if( get_theme_mod('product_menu_setting') == 'menu 3' ){
     get_template_part('template-parts/product-menu/product_menu_parts/product_menu_3');
}
