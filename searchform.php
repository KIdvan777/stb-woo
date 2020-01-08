
<?php
    if( get_theme_mod('stb_headers_choices_settings') == 'header 1' ){
        get_template_part('template-parts/searchforms/searchform_header_1');
    }
    else{
        get_template_part('template-parts/searchforms/searchform_header_woo_1');
    }
?>
