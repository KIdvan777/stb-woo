<!-- PRODUCT MENU SECTION -->
<?php
    if( get_theme_mod('stb_main_page_related_products_setting') == 'related 1' )
    {
        get_template_part('template-parts/template-related-products/related-products/related_products_1');
    }
    if(get_theme_mod('stb_main_page_related_products_setting') == 'related 2')
    {
        get_template_part('template-parts/template-related-products/related-products/related_products_2');
    }
?>
