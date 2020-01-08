<?php
$wp_customize->add_panel('stb_headers_panel',
array(
    'priority' => 10,
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __('STB Headers Settings', 'stb'),
    'description' => __('Configure general settings for the Theme Name Theme', 'theme-slug')
));
