
<?php
    if( get_theme_mod('stb_headers_choices_settings') == 'header 1' ){
        get_template_part('template-parts/searchforms/searchform_header_1');
    }
    if( get_theme_mod('stb_headers_choices_settings') == 'header 2' ){
        get_template_part('template-parts/searchforms/searchform_header_2');
    }
    if( get_theme_mod('stb_headers_choices_settings') == 'header 4' ){
        get_template_part('template-parts/searchforms/searchform_header_woo_1');
    }

?>
