<?php
if(! defined('ABSPATH')){
    exit; // Exit if accessed directly
}

add_action('wp_ajax_tabs-ajax', 'stb_tabs_ajax_action_callback');
add_action('wp_ajax_nopriv_tabs-ajax', 'stb_tabs_ajax_action_callback');

function stb_tabs_ajax_action_callback(){
    // pr($_POST);
    if(! wp_verify_nonce($_POST['nonce'], 'tabs-nonce'))
    {
        wp_die('fuck you');
    };

    $name = $_POST['name'];

    $args = array(
        'post_type' => array('print_service'),
        'post_status' => 'publish',
        'tax_query' => array(
    		array(
    			'taxonomy' => 'print_cat',
    			'field'    => 'name',
                'terms'    => $name
    		)
    	)
    );

    $query_ajax_tabs = new WP_Query($args);
    $json_data['out'] = ob_start(PHP_OUTPUT_HANDLER_CLEANABLE);
         if( $query_ajax_tabs->have_posts()){
             while($query_ajax_tabs->have_posts()){
                 $query_ajax_tabs->the_post();
                 ?>
                     <a href="<?php the_permalink(); ?>" class=" top_hits_item_2 col-md-3">
                         <div class="top_hits_item__img_2">
                             <?php the_post_thumbnail(); ?>
                         </div>
                         <h2><?php the_title(); ?></h2>
                     </a>
                 <?php
             }
        }
    $json_data['out'] .= ob_get_clean();
    wp_send_json($json_data);
    wp_die();
}wp_reset_query();
