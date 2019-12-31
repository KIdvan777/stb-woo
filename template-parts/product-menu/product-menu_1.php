<!-- SECTION PRODUCT MENU -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product_menu flex">
                        <?php
                            $terms = get_terms( 'product_cat' );
                                if( $terms && ! is_wp_error($terms) ){
                                    foreach( $terms as $term ){?>
                                        <?php
                                            $term_id = $term->term_id;
                                            $image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );
                                            $image_url = wp_get_attachment_image_url( $image_id, 'full' );
                                         ?>
                                            <div class="product_menu_item col-md-2">
                                               <a href="<?php echo get_term_link( $term ); ?>">
                                                   <?php echo '<img src="'. $image_url .'" alt="" />'; ?><span><?php echo $term->name ?></span>
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
