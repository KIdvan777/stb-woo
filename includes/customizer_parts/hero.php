<?php

$wp_customize->add_panel('theme_slug_panel_general',
array(
    'priority' => 10,
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __('Theme STB General Settings', 'theme-slug'),
    'description' => __('Configure general settings for the Theme Name Theme', 'theme-slug')
));    


$wp_customize->add_setting('main_page_hero_choices_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_section('main_page_hero_section', array(
    'title' => __('STB Hero', 'stb'),
    'prioryty' => 35,
    'panel'=>'theme_slug_panel_general'
));

// Hero section Choices
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'stb_hero_choices_input',
        array(
            'label'  => __('Hero  choices','stb'),
            'section' => 'main_page_hero_section',
            'settings' => 'main_page_hero_choices_setting',
            'type' => 'radio',
            'choices'        => array(
                'hero 1'   => __( 'hero 1' ),
                'hero 2'  => __( 'hero 2' ),
                'hero 3'  => __( 'hero 3' )
            )
        )
    )
);

// Hero Slider Image 1
$wp_customize->add_setting('main_page_hero_image_1_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stb_hero_image_1_input',
        array(
            'label'  => __('Hero handle 1','stb'),
            'section' => 'main_page_hero_section',
            'settings' => 'main_page_hero_image_1_setting',

        )
    )
);

// Hero Slider Image 2
$wp_customize->add_setting('main_page_hero_image_2_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'stb_hero_image_2_input',
        array(
            'label'  => __('Hero handle 2','stb'),
            'section' => 'main_page_hero_section',
            'settings' => 'main_page_hero_image_2_setting',

        )
    )
);


if( class_exists( 'WP_Customize_Control' ) ):
	class WP_Customize_Textarea_Control extends WP_Customize_Control {
		public $type = 'textarea';

		public function render_content() {
		?>
			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
                <form class="" action="" method="POST">
                    <input type="text" name="test" value="" <?php $this->link(); ?><?php echo $this->value()?>>
                    <button type="submit" name="button">fff</button>
                </form>

			</label>

		<?php
		}


	}
endif;

if( class_exists( 'WP_Customize_Control' ) ):
	class WP_Customize_Input_Control extends WP_Customize_Control {
		public $type = 'input';

		public function render_content() {
		?>
			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
                <form class="" action="" method="POST">
                    <input type="text" name="test_i" value="" <?php $this->link(); ?><?php echo $this->value()?>>
                    <button type="submit" name="button">fff</button>
                </form>

			</label>

		<?php
		}


	}
endif;

$wp_customize->add_setting('main_page_hero_image_4_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control( new WP_Customize_Input_Control(
    $wp_customize,
    'footer_credits_control',
    array(
        'label'	=> __( 'Footer Credits', 'stb' ),
        'section' => 'main_page_hero_section',
        'settings' => 'main_page_hero_image_4_setting',
    )
));




    // $wp_customize->add_setting('main_page_hero_image_3_setting', array(
    //     'default' =>'',
    //     'transport' =>'refresh'
    // ));
    //
    // $wp_customize->add_control( new WP_Customize_Textarea_Control(
    // 	$wp_customize,
    // 	'footer_credits_2_control',
    // 	array(
    // 		'label'	=> __( 'Footer Credits', 'stb' ),
    // 		'section' => 'main_page_hero_section',
    // 		'settings' => 'main_page_hero_image_3_setting',
    // 	)
