<?php
get_template_part('template-parts/template-headers/headers');
$some =  get_theme_mod('featured_post');

$cat = new WP_Query(array(
    'post_type'=>'product',
    'tax_query' => array(
    		array(
    			'taxonomy' => 'product_cat',
    			'field'    => 'id',
                'terms'    => $some

    		)
    	)
));
//pr($cat);



while ( $cat->have_posts() ) {
	$cat->the_post();

	the_title(); // выведем заголовок поста
    the_post_thumbnail();
}


get_footer();
