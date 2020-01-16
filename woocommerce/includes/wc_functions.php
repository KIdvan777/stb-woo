<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
// Breadcrumbs
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
add_action( 'woocommerce_before_main_content', 'stb_add_breadcrumbs', 20 );

function stb_add_breadcrumbs(){
    ?>
        <div class="breadcrumbs_container">
            <?php woocommerce_breadcrumb(); ?>
        </div>
    <?
}
// Container wrapper start
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
add_action( 'woocommerce_before_main_content', 'stb_single_product_wrapper_start', 10 );

function stb_single_product_wrapper_start(){
    ?>
        <div class="container">
            <div class="raw">
            	<div class="col-md-12 bgc_color margin_top_20px">
            		<?php woocommerce_output_content_wrapper(); ?>

    <?
}
// Container wrapper end
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
add_action( 'woocommerce_after_main_content', 'stb_single_product_wrapper_end', 10 );

function stb_single_product_wrapper_end(){
    ?>

            		<?php woocommerce_output_content_wrapper_end(); ?>
            	</div>
            </div>
        </div>
    <?
}
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
// add_action( 'woocommerce_before_single_product_summary', 'stb_single_show_product_images', 10 );



remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
add_action( 'woocommerce_before_single_product_summary', 'stb_single_show_product_images', 20 );

function stb_single_show_product_images(){
	?>
		<div class="col-md-6 reset_padding">
			<?php woocommerce_show_product_images(); ?>
		</div>
	<?
}

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

add_action('woocommerce_after_single_product', 'woocommerce_output_product_data_tabs', 10 );
add_action('woocommerce_after_single_product', 'woocommerce_upsell_display', 15 );
add_action('woocommerce_after_single_product', 'woocommerce_output_related_products', 20 );

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

include( get_template_directory() . '/woocommerce/includes/shop.php' );
include( get_template_directory() . '/woocommerce/includes/archive_description.php' );
