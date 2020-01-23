<?php
// Button
$wp_customize->add_setting('main_page_hero_choices_button_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Toggle_Button_Control( $wp_customize, 'main_page_hero_choices_button_control',
        array(
            'label'  => __('Слайд 1','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'main_page_hero_choices_button_setting',
        )
    )
);
// Slide 1 Title
$wp_customize->add_setting('stb_main_page_hero_slide_1_title_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_main_page_hero_slide_1_title_control',
        array(
            'label'  => __('Заголовок','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'stb_main_page_hero_slide_1_title_setting',
            'type' => 'text'

        )
    )
);
// Slide 1 description
$wp_customize->add_setting('stb_main_page_hero_slide_1_description_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'stb_main_page_hero_slide_1_description_control',
        array(
            'label'  => __('Описание','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'stb_main_page_hero_slide_1_description_setting',
        )
    )
);
// Slide 1 description text color
$wp_customize->add_setting('stb_main_page_hero_slide_1_description_text_color_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_main_page_hero_slide_1_description_text_color_control',
        array(
            'label'  => __('Цвет текста описания','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'stb_main_page_hero_slide_1_description_text_color_setting',
        )
    )
);
// Slide 1 button text & link
$wp_customize->add_setting('stb_main_page_hero_slide_link_1_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_main_page_hero_slide_1_link_control',
        array(
            'label'  => __('Ссылка кнопки','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'stb_main_page_hero_slide_link_1_setting',
            'type' => 'text'

        )
    )
);
// Slide 1 background color
$wp_customize->add_setting('stb_main_page_hero_slide_bgc_color_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_main_page_hero_slide_bgc_color_control',
        array(
            'label'  => __('Slide 1 Background Color','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'stb_main_page_hero_slide_bgc_color_setting',
        )
    )
);
// Hero slider 1 background gradient

// Hero slider 1 background image

// Hero Slider Image 1
$wp_customize->add_setting('main_page_hero_image_1_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stb_hero_image_1_control',
        array(
            'label'  => __('Hero handle 1','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'main_page_hero_image_1_setting',

        )
    )
);
