<?php
get_template_part('template-parts/template-headers/headers');

$some =  get_theme_mod('featured_post');
$post_type =  get_theme_mod('stb_post_type_filter_setting');


$args = array(
	'public'   => true,
	//'_builtin' => false
);
$output = 'names'; // или objects
$operator = 'and'; // 'and' или 'or'

$taxonomies = get_taxonomies( $args, $output, $operator );
pr($taxonomies);
// if( $taxonomies ){
// 	foreach( $taxonomies as $taxonomy ){
// 		echo '<p>'. $taxonomy. '</p>';
// 	}
// }



$cat = new WP_Query(array(
    'post_type'=> $post_type,
    'posts_per_page' => 6,
    'tax_query' => array(
    		array(
    			'taxonomy' => 'product_cat',
    			'field'    => 'id',
                'terms'    => $some

    		)
    	)
));
//pr($cat);




?>
<!-- SECTION TOP HITS -->
    <section class="top_hits_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
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
                            $cat->the_post();?>
                            <div class="top_hits_item col-lg-2 col-md-4 col-sm-6">
                                <div class="top_hits_item__img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="top_hits_item__span">
                                    <span>
                                        <?php the_title(); ?>
                                    </span>
                                </div>
                                <div class="top_hits_item_overlay">
                                    <div class="top_hits_item_overlay_link">
                                        <a href="<?php the_permalink(); ?>">
                                            подробнее
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?endwhile; wp_reset_query();?>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?
get_footer();
