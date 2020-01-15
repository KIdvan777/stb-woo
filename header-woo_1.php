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
    <header class="header_woo_1 ">
        <div class="top_header_woo_1">
            <div class="container">
                <div class="raw">
                    <div class="col-md-12">
                        <?php
                        if( get_theme_mod('stb_header_4_top_header_setting') == 'on' )
                        {?>
                            <div class="top_header_woo_1_content flex space_between">
                                <div class="top_header_woo_1_left_size_content flex">
                                    <div class="email">

                                        <i class="fas fa-envelope"></i>
                                        <span>
                                            <?php
                                            if( get_theme_mod('stb_header_4_email_settings') )
                                            {
                                                echo get_theme_mod('stb_header_4_email_settings');
                                            }
                                            else{
                                                echo 'your email address';
                                            }
                                             ?>
                                        </span>
                                    </div>
                                    <div class="phone">
                                        <?php
                                        if( get_theme_mod('stb_header_4_phone_icon_settings') ){
                                            echo get_theme_mod('stb_header_4_phone_icon_settings');
                                        }else{
                                            ?>
                                                <i class="fas fa-phone-alt"></i>
                                            <?
                                        }
                                        ?>
                                        <span>
                                            <?php
                                            if( get_theme_mod('stb_header_4_phone_number_settings') )
                                            {
                                                echo get_theme_mod('stb_header_4_phone_number_settings');
                                            }
                                            else{
                                                echo 'your phone number';
                                            }
                                             ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="top_header_woo_1_right_size_content flex">
                                    <div class="email">
                                        <i class="fas fa-globe"></i>
                                        <span>lang</span>
                                    </div>
                                </div>
                            </div>
                        <?}
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- MIDDLE HEADER -->
        <div class="middle_header_woo_1">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 flex space_between">
                        <!-- Logo -->
                        <div class="logo">
                            <?php if ( has_custom_logo() ) : ?>
                        		<div class="site-logo"><?php the_custom_logo(); ?></div>
                            <?php else: ?>
                                <?php $blog_info = get_bloginfo( 'name' ); ?>
                            	   <?php if ( ! empty( $blog_info ) ) : ?>
                            		    <?php if ( is_front_page() && is_home() ) : ?>
                            			    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                            		    <?php else : ?>
                            			    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                            		<?php endif; ?>
                            	<?php endif; ?>
                        	<?php endif; ?>
                        </div>
                        <!-- End Logo -->
                            <?php get_search_form(); ?>
                        <div class="shop_icons flex">
                            <div class="login">
                                <i class="fas fa-lock"></i>
                            </div>
                            <!-- Function that displays cart link -->
                            <div class="shop_cart">
                                <?php
                                	stb_woocommerce_cart_link();
                                ?>
                            </div>
                            <!-- end -->
                        </div>
                        <div class="burger">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/menu-button-of-three-horizontal-lines.svg'?> " alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_header_woo_1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 main_menu_header_woo_1">
                        <!-- Nav main menu -->
                        <?php
                        if( get_theme_mod('menu_setting') == 'menu 1'):
                            get_template_part('template-parts/template-headers/woo-menus/menu_1');
                        else:
                            get_template_part('template-parts/template-headers/woo-menus/menu_2');
                        endif;
                        ?>
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
