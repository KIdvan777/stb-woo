<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header_1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 flex space_between">
                    <div class="logo">
                        СТБ
                    </div>
                    <!-- Nav main menu -->
                    <?php
                        if( has_nav_menu('primary') ){
                            wp_nav_menu( [
                                'theme_location'  => 'primary',
                                'menu'            => 'STB Primary menu',
                                'container'       => 'div',
                                'container_class' => 'main_menu',
                                'container_id'    => 'main_menu',
                                'menu_class'      => 'menu_ul',
                                'menu_id'         => 'menu_ul',
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
                     ?>
                    <div class="search_icon">
                        найти <i class="fas fa-search"></i>
                    </div>

                    <?php get_search_form(); ?>

                    <div class="burger">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/menu-button-of-three-horizontal-lines.svg'?> " alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile_menu">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 flex">
                    <ul class="mobile_menu_ul col-sm-6">
                        <li>COMPANY</li>
                        <li>PRODUCTS</li>
                        <li>BUY</li>
                        <li>SUPPORT</li>
                        <li>CONTACTS</li>
                    </ul>
                    <div class="mobile_product_menu_1 col-sm-6">
                        <div class="product_menu_item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/iconfinder_lamp_2023101.svg'?>" alt=""><span>LAMP</span></div>
                        <div class="product_menu_item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/table-lamp.svg'?>" alt="">
                            <span>PROJECTORS</span></div>
                        <div class="product_menu_item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/flashlight.svg'?>" alt="">
                            <span>BULB</span></div>
                        <div class="product_menu_item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/lamp (1).svg'?>" alt="">
                            <span>OFFICE</span></div>
                        <div class="product_menu_item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/theatre-light.svg'?>" alt="">
                            <span>CONCERT</span></div>
                        <div class="product_menu_item">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/switch-on.svg'?>" alt="">
                            <span>SWITCHERS</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
