<?php

// remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices',10);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count',20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering',30);

add_action('woocommerce_before_shop_loop', 'stb_template_loop_product_count_ordering', 10);
function stb_template_loop_product_count_ordering(){
    ?>

    <div class="count_ordering_wrapper flex space_between">
        <?php
            // woocommerce_output_all_notices();
            woocommerce_result_count();
            woocommerce_catalog_ordering();
        ?>
    </div>

    <?
}
