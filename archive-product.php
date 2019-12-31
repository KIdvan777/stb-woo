<?php get_template_part('template-parts/template-headers/headers');

if($_GET['power'] && !empty($_GET['power']))
{
  $power = $_GET['power'];
}



?>
<div class="container">
	<div class="row">
		<div class="top_hits col-md-12 flex">
			<div class="col-md-8">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
						<header class="page-header">
							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
							?>
						</header><!-- .page-header -->
					</main><!-- #main -->
				</div><!-- #primary -->
				<div class="col-md-12 flex">
						<?php


							  // Define arguments
									$args = array(
										'post_type' => 'product',
										'posts_per_page' => -1,
										'meta_query' => array(
											 array(
												'key' => 'power',
												'value' => $power,
												'compare' => '='
											),
										
										)
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


								<?php endwhile; wp_reset_query();?>

				</div>
			</div>
			<div class="col-lg-4">
					<?php get_template_part('template-parts/filter/filter-simple'); ?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
