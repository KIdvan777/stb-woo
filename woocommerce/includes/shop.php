<?php

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail',10);
add_action('woocommerce_before_shop_loop_item_title', 'stb_template_loop_product_thumbnail', 10);
function stb_template_loop_product_thumbnail(){
    ?>
        <div class="top_hits_item__img">
            <?php  woocommerce_template_loop_product_thumbnail(); ?>
        </div>
    <?
}

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title',10);
add_action('woocommerce_shop_loop_item_title', 'stb_template_loop_product_title', 10);
function stb_template_loop_product_title(){
    ?>
        <div class="top_hits_item__span">
            <span>
                <?php  woocommerce_template_loop_product_title(); ?>
            </span>
        </div>
    <?
}

remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close',5);
add_action('woocommerce_after_shop_loop_item', 'stb_template_loop_product_title_overlay', 5);
function stb_template_loop_product_title_overlay(){
    ?>
    <?php woocommerce_template_loop_product_link_close(); ?>
    <div class="top_hits_item_overlay">
        <div class="top_hits_item_overlay_link">
    <?
}
