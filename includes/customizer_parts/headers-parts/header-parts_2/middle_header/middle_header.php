<?php
$wp_customize->add_setting('stb_header_2_middle_header_button_settings', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Toggle_Button_H2_Middle_Control( $wp_customize, 'stb_header_2_middle_header_button_control',
        array(
            'label'  => __('Средний хэдер','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_middle_header_button_settings',
        )
    )
);

//  Header 2 top header color settings
$wp_customize->add_setting('stb_header_2_top_header_logo_color_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_2_top_header_logo_color_control',
        array(
            'label'  => __('Цвет лого верх шапки','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_logo_color_setting',
        )
    )
);

//  Header 2 top header color settings
$wp_customize->add_setting('stb_header_2_middle_header_right_icons_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'stb_header_2_middle_header_right_icons_control',
        array(
            'label'  => __('Цвет иконок магазина верх шапки','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_middle_header_right_icons_setting',
        )
    )
);
// Phone call
$wp_customize->add_setting('stb_header_2_middle_call_button_settings', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stb_header_2_middle_call_button_control',
        array(
            'label'  => __('Заказать звонок картинка','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_middle_call_button_settings',
        )
    )
);
// Choices Login Shop vs Phone call
$wp_customize->add_setting('stb_header_2_middle_choices_settings', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_middle_choices_control',
        array(
            'label'  => __('Отоброжать:','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_middle_choices_settings',
            'type' => 'radio',
            'choices' => array(
                'call' => 'Заказать звонок',
                'shop' => 'Корзина и Логин'
            )

        )
    )
);
