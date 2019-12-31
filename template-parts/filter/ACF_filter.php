<?php
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => -1,
    );
    $query = new WP_Query($args);
    while($query -> have_posts()) : $query -> the_post();
    ?>
    <div class="top_hits_item col-lg-3">
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
    <?php endwhile; wp_reset_query();

?>
