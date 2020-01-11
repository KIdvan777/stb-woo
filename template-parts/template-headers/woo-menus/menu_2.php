<?php
if( has_nav_menu('primary') ){
    wp_nav_menu( [
        'theme_location'  => 'primary',
        'menu'            => 'STB Primary menu',
        'container'       => 'div',
        'container_class' => 'main_menu_2',
        'container_id'    => 'main_menu_2',
        'menu_class'      => 'menu_ul_2',
        'menu_id'         => 'menu_ul_2',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => '',
    ] );
}
