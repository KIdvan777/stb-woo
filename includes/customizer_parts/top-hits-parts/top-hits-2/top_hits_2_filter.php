<?php

$wp_customize->add_setting('top_hits_2_post_type_filter_setting', array(
    'default' =>'top_hits 1',
    'transport' =>'refresh'
));
// Hero section Choices
$wp_customize->add_control( new STB_Customize_Post_Type_Filter_Control( $wp_customize, 'top_hits_2_post_type_filter_control',
        array(
            'label'  => __('Top Hits filter By Post type','stb'),
            'section' => 'top_hits_menu_section',
            'settings' => 'top_hits_2_post_type_filter_setting',
        )
    )
);

$wp_customize->add_setting('top_hits_2_taxonomy_filter_setting', array(
    'default' =>'taxonomy 1',
    'transport' =>'refresh'
));
// Hero section Choices
$wp_customize->add_control( new STB_Customize_Taxonomy_Filter_Control( $wp_customize, 'top_hits_2_taxonomy_filter_control',
        array(
            'label'  => __('Top Hits filter By Taxonomy','stb'),
            'section' => 'top_hits_menu_section',
            'settings' => 'top_hits_2_taxonomy_filter_setting',
        )
    )
);

$wp_customize->add_setting('top_hits_2_terms_filter_setting', array(
    'default' =>'top_hits 1',
    'transport' =>'refresh'
));
// Hero section Choices
$wp_customize->add_control( new STB_Customize_Terms_Filter_Control( $wp_customize, 'top_hits_2_terms_filter_control',
        array(
            'label'  => __('Top Hits filter By Terms','stb'),
            'section' => 'top_hits_menu_section',
            'settings' => 'top_hits_2_terms_filter_setting',
        )
    )
);
