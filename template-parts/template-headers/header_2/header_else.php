<!-- Header 2 -->
    <header class="header_2">
        <div class="container">
            <div class="row">
                <div class="col-md-12  ">
                    <div class="top_header_2 flex space_between">
                        <!-- TOP HEADER -->
                        <div class="top_header_2_left_content flex">
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
                        <div class="top_header_2_right_content flex">
                            <div class="currency">
                                <i class="fas fa-globe"></i>
                                <span>currency</span>
                            </div>
                            <div class="lang">
                                <i class="fas fa-globe"></i>
                                <span>lang</span>
                            </div>
                        </div>
                    </div>
                    <div class="middle_header_2  space_between flex">
                        <div class="logo_2">
                            <?php if ( has_custom_logo() ) : ?>
                        		<div class="site-logo"><?php the_custom_logo(); ?></div>
                            <?php else: ?>
                                <?php $blog_info = get_bloginfo( 'name' ); ?>
                            	   <?php if ( ! empty( $blog_info ) ) : ?>
                            		    <?php if ( is_front_page() ) : ?>
                            			    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                            		    <?php else : ?>
                            			    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                            		<?php endif; ?>
                            	<?php endif; ?>
                        	<?php endif; ?>
                        </div>
                        <div class="middle_header_content">
                            <!-- middle -->
                        </div>
                        <div class="middle_header_right_content">
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
                        </div>
                    </div>
                    <div class="header_botttom_2 flex space_between white">
                        <!-- Nav main menu -->
                        <?php
                            if( get_theme_mod('menu_setting') == 'menu 1'):
                                get_template_part('template-parts/template-headers/woo-menus/menu_1');
                            else:
                                get_template_part('template-parts/template-headers/woo-menus/menu_2');
                            endif;
                        ?>
                        <!-- <div class="main_menu_2">
                            <ul class="menu_ul_2">
                                <li>COMPANY</li>
                                <li>PRODUCTS</li>
                                <li>BUY</li>
                                <li>SUPPORT</li>
                                <li>CONTACTS</li>
                            </ul>
                        </div> -->
                        <div class="header_2_search">
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header_2_bgc">
        <img src="<?php echo get_theme_mod('stb_header_2_background_setting'); ?>" alt="">

    </div>
<!-- HERO -->
