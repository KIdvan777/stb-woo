<?php get_template_part('template-parts/template-headers/headers');?>
<!-- SECTION TOP HITS -->
    <section class="top_hits_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php get_template_part('template-parts/breadcrumbs/breadcrumbs_1'); ?>
                    <div class="top_hits_heading flex space_between">
                        <div class="top_hits_head">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                    <div class="top_hits_line">
                    </div>
                        <div class="top_hits single_product_1 flex">
                            <div class="single_product_image_1 col-md-8">
                                <?php the_post_thumbnail( 'medium_large' );?>
                            </div>
                            <div class="col-md-4">
                                <!-- <?php get_template_part('template-parts/filter/filter-simple'); ?> -->
                            </div>
                            <div class="product_properties col-md-12">
                                <?php get_template_part('template-parts/single/single-props'); ?>
                            </div>
                        </div>
                    </div>


    <?php wp_list_comments(array(
			'per_page' => 10, // Пагинация комментариев - по 10 на страницу
			'reverse_top_level' => false // Показываем последние комментарии в начале
		)); ?>
                </div>
            </div>
        </div>
    </section>




<?php get_template_part('template-parts/template-footers/footers');?>
