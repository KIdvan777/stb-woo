<?php
if(! defined('ABSPATH')){
    exit; // Exit if accessed directly
}

add_action('wp_ajax_search-ajax', 'stb_search_ajax_action_callback');
add_action('wp_ajax_nopriv_search-ajax', 'stb_search_ajax_action_callback');

function stb_search_ajax_action_callback(){
    // pr($_POST);
    if(! wp_verify_nonce($_POST['nonce'], 'search-nonce'))
    {
        wp_die('fuck you');
    };

    $args = array(
        'post_type' => array('post','product','news'),
        'post_status' => 'publish',
        's' => $_POST['s']
    );

    $query_ajax_search = new WP_Query($args);
    $json_data['out'] = ob_start(PHP_OUTPUT_HANDLER_CLEANABLE);
        if( $query_ajax_search->have_posts()){
            while($query_ajax_search->have_posts()){
                $query_ajax_search->the_post();
                ?>
                    <?php the_post_thumbnail(); ?>
                    <?php the_title(); ?>
                        <a href="<?php the_permalink(); ?>">
                            подробнее
                        </a>
                <?
            }
        }
    $json_data['out'] .= ob_get_clean();
    wp_send_json($json_data);
    wp_die();
}
