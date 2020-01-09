<?php
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


//if( class_exists( 'WP_Customize_Control' ) ):
	//class WP_Customize_Textarea_Control extends WP_Customize_Control {
		//public $type = 'textarea';

		//public function render_content() {
		//?>
			<!-- <label>
				<span class="customize-control-title"><?php //echo esc_html( $this->label ); ?></span>
				<textarea rows="5" style="width:100%;" <?php //$this->link(); ?>><?php //echo esc_textarea( //$this->value() ); ?></textarea>
                <form class="" action="" method="POST">
                    <input type="text" name="test" value="" <?php //$this->link(); ?><?php //echo $this->value()?>>
                    <button type="submit" name="button">fff</button>
                </form>

			</label> -->

		<?php
	//}


	//}
//endif;

//if( class_exists( 'WP_Customize_Control' ) ):
	//class WP_Customize_Input_Control extends WP_Customize_Control {
		//public $type = 'input';

		//public function render_content() {
		//?>
			<!-- <label>
				<span class="customize-control-title"><?php //echo esc_html( $this->label ); ?></span>
				<textarea rows="5" style="width:100%;" <?php //$this->link(); ?>><?php //echo esc_textarea( //$this->value() ); ?></textarea>
                <form class="" action="" method="POST">
                    <input type="text" name="test_i" value="" <?php //$this->link(); ?><?php //echo $this->value()?>>
                    <button type="submit" name="button">fff</button>
                </form>

			</label> -->

		<?php
		//}


	//}
//endif;

// $wp_customize->add_setting('main_page_hero_image_4_setting', array(
//     'default' =>'',
//     'transport' =>'refresh'
// ));
//
// $wp_customize->add_control( new WP_Customize_Input_Control(
//     $wp_customize,
//     'footer_credits_control',
//     array(
//         'label'	=> __( 'Footer Credits', 'stb' ),
//         'section' => 'main_page_hero_section',
//         'settings' => 'main_page_hero_image_4_setting',
//     )
// ));




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
