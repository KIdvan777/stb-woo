<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stb
 */

get_template_part('template-parts/template-headers/headers');
?>
<div class="container">
	<div class="row">
		<div class="col-md-12 flex">
			<div class="col-md-8">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">

					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
							// получаем ID термина на странице термина
							$term_id = get_queried_object_id();

							// получим ID картинки из метаполя термина
							$image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );

							// ссылка на полный размер картинки по ID вложения
							$image_url = wp_get_attachment_image_url( $image_id, 'full' );

							// выводим картинку на экран
							echo '111'.'<img src="'. $image_url .'" alt="" />';
							?>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</main><!-- #main -->
			</div><!-- #primary -->
			</div>

		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
		</div>
	</div>
</div>






<?php

get_footer();
