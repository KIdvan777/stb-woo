<section class="top_hits_2_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 top_hits_2_wrapper top_hits_heading_2">
                <div class="top_hits_2_header flex">
                    <h1>Мы Предлогаем</h1>
                </div>
                <div class="top_hits_2_header_description flex">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis nec fringilla nibh pellentesque finibus</p>
                </div>
                <div class="top_hits_2_header_buttons top_hits_variation_2 flex">
                    <ul id="top_hits_2_header_list" class="top_hits_2_header_list flex">
                        <?php
                            $print_services_cats_id = get_theme_mod('top_hits_2_terms_filter_setting');
                            $args = array(
                                'term_taxonomy_id' => $print_services_cats_id
                            );
                            $print_services = get_terms($args);

                            foreach($print_services as $print_service): ?>
                                <li class="top_hits_2_header_list_item">
                                    <?php echo $print_service->name; ?>
                                </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="top_hits_line_2">

                </div>
                <div class="top_hits_2 top_hits_2_items flex col-md-12">
                    <?php
                        $print_cat_query = new WP_Query(array(
                            'post_type'=>'print_service',
                            'posts_per_page' => '4'
                        ));

                        if ( $print_cat_query->have_posts() ) : while ( $print_cat_query->have_posts() ) : $print_cat_query->the_post(); ?>
                        	<!-- Цикл WordPress -->
                            <a href="<?php the_permalink(); ?>" class=" top_hits_item_2 col-md-3">
                                <div class="top_hits_item__img_2">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <h2><?php the_title(); ?></h2>
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
