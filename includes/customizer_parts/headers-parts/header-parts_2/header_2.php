<?php
$wp_customize->add_section('stb_header_2_section', array(
    'title' => __('STB Header 2 Settings', 'stb'),
    'prioryty' => 15,
    'panel'=>'stb_headers_panel'
));

// Top header
include( get_template_directory() . '/includes/customizer_parts/headers-parts/header-parts_2/top_header/top_header.php' );
// Middle header
include( get_template_directory() . '/includes/customizer_parts/headers-parts/header-parts_2/middle_header/middle_header.php' );
// Bottom header
include( get_template_directory() . '/includes/customizer_parts/headers-parts/header-parts_2/bottom_header/bottom_header.php' );
