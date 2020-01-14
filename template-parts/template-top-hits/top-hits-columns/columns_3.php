<div class="top_hits_item col-lg-4 col-md-4 col-sm-6">
    <div class="top_hits_item__img">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="top_hits_item__span">
        <span>
            <h2><?php the_title(); ?></h2>
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
