<!-- SECTION PRODUCT MENU -->
    <section class="product_menu_2_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 product_menu_2_container">
                    <div class="our_services">
                        Наши услуги
                    </div>
                    <div class="product_menu_2">
                        <?php
                            $terms = get_terms( 'print_cat' );
                                if( $terms && ! is_wp_error($terms) ){
                                    foreach( $terms as $term ){?>
                                        <?php
                                            $term_id = $term->term_id;
                                            $image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );
                                            $image_url = wp_get_attachment_image_url( $image_id, 'full' );
                                         ?>
                                            <div class="product_menu_item_2">
                                               <a href="<?php echo get_term_link( $term ); ?>">
                                                    <?php
                                                       if($image_url):
                                                           echo '<img src="'. $image_url .'" alt="" />';
                                                        else:
                                                            echo '<img src="//localhost:3000/wp-content/uploads/2019/12/album-1.jpg" alt="" />';
                                                        endif;
                                                    ?>
                                                    <span><?php echo $term->name ?></span>

                                               </a>
                                           </div>
                                    <?}
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
