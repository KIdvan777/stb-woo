<div class="hero_item flex">
    <div class="hero_content_wrapper_2">
        <div class="hero_content_2">
            <span><?php the_title(); ?></span>
                <div class="desc">
                </div>
            <a class="button" href="<?php the_permalink();?>">подробнее</a>
        </div>

    </div>
    <div class="hero_img_2">
        <?php the_post_thumbnail(); ?>
    </div>
</div>
