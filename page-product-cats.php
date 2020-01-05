<?php get_template_part('template-parts/template-headers/headers'); ?>
<section class="">
<div class="container ">
    <div class="row">
        <?php
    		/**
    		 * woocommerce_before_main_content hook.
    		 *
    		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
    		 * @hooked woocommerce_breadcrumb - 20
    		 */
    		do_action( 'woocommerce_before_main_content' );
    	?>

        <div class="top_hits col-md-12 flex">

            <div class=" product_cats col-md-8 flex">
            <?php  $terms = get_terms('product_cat');
                foreach( $terms as $term ){
                    $term_id = $term->term_id;
                    $image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );
                    $image_url = wp_get_attachment_image_url( $image_id, 'full' );
                ?>
                    <div class="product_cats_item col-lg-3">
                        <a href="<?php echo get_term_link( $term ); ?>">
                            <?php echo '<img src="'. $image_url .'" alt="" />'; ?>
                            <p><?php echo $term->name;  ?></p>
                        </a>

                    </div>
                <?}?>
            </div>
            <div class="col-md-4">
                <?php get_sidebar()?>
            </div>

        </div>
    </div>
</div>


</section>
<?php get_footer(); ?>
