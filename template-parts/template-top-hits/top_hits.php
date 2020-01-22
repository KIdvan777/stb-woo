<!-- PRODUCT MENU SECTION -->
<?php
    if( get_theme_mod('stb_main_page_top_hits_setting') == 'top_hits 1' )
    {
        get_template_part('template-parts/template-top-hits/top-hits/top_hits');
    }
    if(get_theme_mod('stb_main_page_top_hits_setting') == 'top_hits 2')
    {
        get_template_part('template-parts/template-top-hits/top-hits-2/top_hits_2');
    }
    if(get_theme_mod('stb_main_page_top_hits_setting') == 'top_hits 2_2')
    {
        get_template_part('template-parts/template-top-hits/top-hits-2/top_hits_2_ajax_loader');
    }
?>
