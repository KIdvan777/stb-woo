<section class="top_hits_2_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 top_hits_2_wrapper">
                <div class="top_hits_2_header flex">
                    <h2>Best Seller</h2>
                </div>
                <div class="top_hits_2_header_description flex">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis nec fringilla nibh pellentesque finibus</p>
                </div>
                <div class="top_hits_2_header_buttons flex">
                    <ul class="top_hits_2_header_list flex">
                        <?php
                            $print_services_cats = get_terms('print_cat');
                            // pr($print_services_cats);
                            foreach($print_services_cats as $print_service): ?>
                                <li class="top_hits_2_header_list_item">
                                    <?php echo $print_service->name; ?>
                                </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="top_hits_2_items flex col-md-12">

                    <?php
                        $print_cat_query = new WP_Query(array(
                            'post_type'=>'print_service',

                        ));

                        if ( $print_cat_query->have_posts() ) : while ( $print_cat_query->have_posts() ) : $print_cat_query->the_post(); ?>
                        	<!-- Цикл WordPress -->
                            <a href="<?php the_permalink(); ?>" class="col-md-3">
                                <?php the_post_thumbnail(); ?>
                                <?php the_title(); ?>
                            </a>
                        <?php endwhile; else : ?>
                        	<p>Записей нет.</p>
                    <?php endif; wp_reset_query();?>

                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top_hits_2_load_ajax col-md-12 flex">
                    <button type="button" name="button">Load More</button>
                </div>
            </div>
        </div>
    </div>
</section>
