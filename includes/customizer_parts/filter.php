<?php
$wp_customize->add_panel('stb_filter_panel',
array(
    'priority' => 15,
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __('STB Filter', 'stb'),
    'description' => __('Configure general settings for the Theme Name Theme', 'theme-slug')
));

$wp_customize->add_section('stb_product_section', array(
    'title' => __('STB Product Section Filter', 'stb'),
    'prioryty' => 35,
    'panel' => 'stb_filter_panel'
));

include(get_template_directory() . '/includes/customizer_parts/filter-parts/customizer_filter_post_type.php');
include(get_template_directory() . '/includes/customizer_parts/filter-parts/customizer_filter_taxonomy.php');
include(get_template_directory() . '/includes/customizer_parts/filter-parts/customizer_filter_terms.php');
