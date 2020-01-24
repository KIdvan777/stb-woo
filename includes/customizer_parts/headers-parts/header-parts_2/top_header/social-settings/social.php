<?php
$wp_customize->add_setting('stb_header_2_top_header_social_display_triger_setting', array(
    'default' => '',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_top_header_social_display_triger_control',
        array(
            'label'  => __('Вкл выкл соц. ссылки','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_social_display_triger_setting',
            'type' => 'radio',
            'choices' => array(
                'ok' => 'показывать',
                'no' => 'не показывать'
            )
        )
    )
);
// 1
$wp_customize->add_setting('stb_header_2_top_header_social_1_setting', array(
    'default' => '',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_top_header_social_1_control',
        array(
            'label'  => __('Ccылка 1','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_social_1_setting',
            'type' => 'url'
        )
    )
);

$wp_customize->add_setting('stb_header_2_top_header_social_image_1_setting', array(
    'default' => '',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stb_header_2_top_header_social_image_1_control',
        array(
            'label'  => __('Картинка 1','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_social_image_1_setting',
        )
    )
);

$wp_customize->add_setting('stb_header_2_top_header_social_1_triger_setting', array(
    'default' => '',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_top_header_social_1_triger_control',
        array(
            'label'  => __('Активировать','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_social_1_triger_setting',
            'type' => 'radio',
            'choices' => array(
                'ok' => 'ok'
            )
        )
    )
);
// 2
$wp_customize->add_setting('stb_header_2_top_header_social_2_setting', array(
    'default' => '',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_top_header_social_2_control',
        array(
            'label'  => __('Ccылка 2','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_social_2_setting',
            'type' => 'url'
        )
    )
);

$wp_customize->add_setting('stb_header_2_top_header_social_image_2_setting', array(
    'default' => '',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stb_header_2_top_header_social_image_2_control',
        array(
            'label'  => __('Картинка 2','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_social_image_2_setting',
        )
    )
);

$wp_customize->add_setting('stb_header_2_top_header_social_2_triger_setting', array(
    'default' => '',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_top_header_social_2_triger_control',
        array(
            'label'  => __('Активировать','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_social_2_triger_setting',
            'type' => 'radio',
            'choices' => array(
                'ok' => 'да',
                'no' => 'нет'
            )
        )
    )
);
// 3
$wp_customize->add_setting('stb_header_2_top_header_social_3_setting', array(
    'default' => '',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_top_header_social_3_control',
        array(
            'label'  => __('Ccылка 3','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_social_3_setting',
            'type' => 'url'
        )
    )
);

$wp_customize->add_setting('stb_header_2_top_header_social_image_3_setting', array(
    'default' => '',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stb_header_2_top_header_social_image_3_control',
        array(
            'label'  => __('Картинка 3','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_social_image_3_setting',
        )
    )
);

$wp_customize->add_setting('stb_header_2_top_header_social_3_triger_setting', array(
    'default' => '',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_top_header_social_3_triger_control',
        array(
            'label'  => __('Активировать','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_social_3_triger_setting',
            'type' => 'radio',
            'choices' => array(
                'ok' => 'да',
                'no' => 'нет'
            )
        )
    )
);
// 4
$wp_customize->add_setting('stb_header_2_top_header_social_4_setting', array(
    'default' => '',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_top_header_social_4_control',
        array(
            'label'  => __('Ccылка 4','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_social_4_setting',
            'type' => 'url'
        )
    )
);

$wp_customize->add_setting('stb_header_2_top_header_social_image_4_setting', array(
    'default' => '',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stb_header_2_top_header_social_image_4_control',
        array(
            'label'  => __('Картинка 4','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_social_image_4_setting',
        )
    )
);

$wp_customize->add_setting('stb_header_2_top_header_social_4_triger_setting', array(
    'default' => '',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_header_2_top_header_social_4_triger_control',
        array(
            'label'  => __('Активировать','stb'),
            'section' => 'stb_header_2_section',
            'settings' => 'stb_header_2_top_header_social_4_triger_setting',
            'type' => 'radio',
            'choices' => array(
                'ok' => 'да',
                'no' => 'нет'
            )
        )
    )
);
