<!-- NEWS -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">

                    <div class="news_heading flex space_between">
                        <div class="news_head">
                            NEWS
                        </div>
                        <div class="news_variation">
                            ALL NEWS
                        </div>
                    </div>
                    <div class="news_line">
                    </div>
                    <div class="news flex">
                        <?php
                            $main_page_news_view = new WP_Query( array(
                                'posts_per_page' => 3,
                                'post_type' => 'news'
                            ));
                            while( $main_page_news_view->have_posts() ){
                                $main_page_news_view->the_post();?>

                                <div class="news_item col-lg-4">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                        <span class="news__span">
                                            <div class="news_title">
                                                <h6><?php the_title(); ?></h6>
                                            </div>
                                            <div class="news_post_date">
                                                <?php echo get_the_date(); ?>
                                            </div>
                                            <div class="more">
                                                <a href="<?php the_permalink(); ?>">подробнее</a>
                                            </div>
                                        </span>
                                </div>
                            
                         <?}?>
                     </div>
                </div>
            </div>
        </div>
    </section>
