<!-- HEADER -->

<?php
    if( get_theme_mod('main_page_setting') == 'header 1' ){
        get_header();
    }else if(get_theme_mod('main_page_setting') == 'header 2'){
        get_header('full');
    }else if(get_theme_mod('main_page_setting') == 'header 3'){
        get_header('three');
    }else{
        get_header('woo_1');
    }
?>
