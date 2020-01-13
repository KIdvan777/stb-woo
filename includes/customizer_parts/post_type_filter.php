<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class WP_Customize_Post_Type_Filter_Control extends WP_Customize_Control {
		public $type = 'latest_post_dropdown';

		public function render_content() {?>

			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<select <?php $this->link(); ?>>

	            <?php
                $args = array(
                	'public'   => true,
                    '_builtin' => false
                );
                $output   = 'names'; // names or objects, note names is the default
                $operator = 'and';   // 'and' or 'or'
                $post_types = get_post_types( $args, $output, $operator );
                foreach ( $post_types as $post_type ) {

                    echo "<option " . selected( $this->value(), $post_type ) . " value='" . $post_type . "'>" . $post_type . "</option>";


                }

	            ?>


			  </select>
		  </label>
          

    <?}
}

endif;

$wp_customize->add_setting('stb_post_type_filter_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

// $wp_customize->add_section('stb_post_type_filter_section', array(
//     'title' => __('STB test', 'stb'),
//     'prioryty' => 40
// ));

$wp_customize->add_control(
    new WP_Customize_Post_Type_Filter_Control(
     $wp_customize,
     'stb_post_type_filter_control',
     array(
     'label' => __( 'Select A Post Type', 'stb' ),
     'section' => 'header_section',
     'settings' => 'stb_post_type_filter_setting',
     // 'post_type' => 'page'
     )
 )
);
