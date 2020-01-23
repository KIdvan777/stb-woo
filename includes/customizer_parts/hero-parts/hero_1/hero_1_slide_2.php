<?php
// Button
$wp_customize->add_setting('main_page_hero_1_button_slide_2_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Toggle_Button2_Control( $wp_customize, 'main_page_hero_choices_button_slide_2_control',
        array(
            'label'  => __('Слайд 2','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'main_page_hero_1_button_slide_2_setting',
        )
    )
);
// Slide 1 Title
$wp_customize->add_setting('stb_main_page_hero_slide_2_title_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_main_page_hero_slide_2_title_control',
        array(
            'label'  => __('Заголовок','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'stb_main_page_hero_slide_2_title_setting',
            'type' => 'text'

        )
    )
);
// Slide 1 text Color

// Slide 1 description
$wp_customize->add_setting('stb_main_page_hero_slide_2_description_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'stb_main_page_hero_slide_2_description_control',
        array(
            'label'  => __('Описание','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'stb_main_page_hero_slide_2_description_setting',
        )
    )
);
// Slide 1 description text color
$wp_customize->add_setting('stb_main_page_hero_slide_2_description_text_color_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_main_page_hero_slide_2_description_text_color_control',
        array(
            'label'  => __('Цвет текста описания','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'stb_main_page_hero_slide_2_description_text_color_setting',
        )
    )
);
// Slide 1 button link
$wp_customize->add_setting('stb_main_page_hero_slide_link_2_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_main_page_hero_slide_2_link_control',
        array(
            'label'  => __('Ссылка кнопки','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'stb_main_page_hero_slide_link_2_setting',
            'type' => 'text'

        )
    )
);
// Slide 1 button text

// Slide 1 button color

// Slide 1 button bgc

// Slide 1 button font_size

// Slide 1 button font-weight

// Slide 1 button padding

// Slide 1 button margin

// Slide Image 1
$wp_customize->add_setting('main_page_hero_image_2_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stb_hero_image_2_control',
        array(
            'label'  => __('Hero handle 1','stb'),
            'section' => 'main_page_hero_1_section',
            'settings' => 'main_page_hero_image_2_setting',
        )
    )
);

// Slide 1 Image size
