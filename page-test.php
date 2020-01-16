<?php
get_template_part('template-parts/template-headers/headers');

$post_type =  get_theme_mod('stb_post_type_filter_setting');
$taxes = get_theme_mod('stb_taxonomy_filter_setting');
$terms =  get_theme_mod('stb_terms_filter_setting');
$posts_per_page =  get_theme_mod('stb_post_per_page_filter_setting');

// pr($post_type);
// pr($taxes);
// pr($terms);
// pr($posts_per_page);

$cat = new WP_Query(array(
    'post_type'=> $post_type,
    'posts_per_page' => $posts_per_page,
    'tax_query' => array(
    		array(
    			'taxonomy' => $taxes,
    			'field'    => 'id',
                'terms'    => $terms

    		)
    	)
    ));wp_reset_query();
?>
<!-- SECTION TOP HITS -->
    <section class="top_hits_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 flex">
                    <div class="<?= get_theme_mod('stb_grid_filter_setting'); ?>">
                        <div class="top_hits_heading flex space_between">
                            <div class="top_hits_head">
                                ХИТЫ ПРОДАЖ
                            </div>
                            <div class="top_hits_variation">
                                <ul>
                                    <li><a href="#">
                                        STANDARD</a>
                                    </li>
                                    <li>
                                        <a href="#"> LED-PRO</a>
                                    </li>
                                    <li>
                                        <a href="#"> LED-T8</a>
                                    </li>
                                    <li class="top_hits_arrow">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/img/keyboard_arrow_left-24px.svg'?>" alt="">
                                        </a>
                                    </li>
                                    <li class="top_hits_arrow">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri() . '/assets/img/keyboard_arrow_right-24px.svg'?>" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="top_hits_line">
                        </div>
                        <div class="top_hits flex">

                        <?php

                            while ( $cat->have_posts() ):
                                $cat->the_post();

                                if(get_theme_mod( 'stb_columns_filter_setting') == 3 )
                                {
                                    get_template_part('template-parts/template-top-hits/top-hits-columns/columns_3');
                                }
                                if(get_theme_mod( 'stb_columns_filter_setting') == 4 )
                                {
                                    get_template_part('template-parts/template-top-hits/top-hits-columns/columns_4');
                                }
                                if(get_theme_mod( 'stb_columns_filter_setting') == 5 )
                                {
                                    get_template_part('template-parts/template-top-hits/top-hits-columns/columns_5');
                                }
                                if(get_theme_mod( 'stb_columns_filter_setting') == 6 )
                                {
                                    get_template_part('template-parts/template-top-hits/top-hits-columns/columns_6');
                                }

                            endwhile; wp_reset_query();?>
                        </div>
                    </div>

                    <div class="top_hits top_hits_filter col-md-4">
                        <?php dynamic_sidebar('shop_sidebar'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?
get_footer();
