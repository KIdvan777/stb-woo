<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
add_action( 'woocommerce_before_main_content', 'stb_add_breadcrumbs', 20 );

function stb_add_breadcrumbs(){
    ?>
        <div class="stb_breadcrumbs_container">
            <?php woocommerce_breadcrumb(); ?>
        </div>
    <?
}
