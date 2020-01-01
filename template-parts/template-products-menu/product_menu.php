<!-- PRODUCT MENU SECTION -->
<?php
    if( get_theme_mod('main_page_setting') == 'header 1' ){
        get_template_part('template-parts/product-menu/product','menu_1');

    }else if(get_theme_mod('main_page_setting') == 'header 2'){
        get_template_part('template-parts/product-menu/product','menu_2');

    }else if(get_theme_mod('main_page_setting') == 'header 4'){
        get_template_part('template-parts/product-menu/product','menu_1');

    }else{
        get_template_part('template-parts/product-menu/product','menu_3');
    }
?>
