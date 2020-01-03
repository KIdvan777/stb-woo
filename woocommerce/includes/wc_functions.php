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
        <div class="container bgc_color">
            <div class="raw">
            	<div class="col-md-12">
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
