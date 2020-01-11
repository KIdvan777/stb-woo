<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class WP_Customize_Latest_Post_Control extends WP_Customize_Control {
		public $type = 'latest_post_dropdown';

		public function render_content() {

              $terms = get_terms('product_cat');
              foreach( $terms as $term ):
                  $term_id = $term->term_id;
                  $image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );
                  $image_url = wp_get_attachment_image_url( $image_id, 'full' );
              ?>
              <label>
      				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
      				<select <?php $this->link(); ?>>
      					<?php


      						echo "<option " . selected( $this->value(), $term->term_id ) . " value='" . $term->term_id . "'>" . $term->name . "</option>";

      					?>
      				</select>
      			</label>
              <?endforeach;


    }
}

endif;

$wp_customize->add_setting('featured_post', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_section('header_section', array(
    'title' => __('STB test', 'stb'),
    'prioryty' => 40
));

$wp_customize->add_control(
    new WP_Customize_Latest_Post_Control(
     $wp_customize,
     'featpost_control',
     array(
     'label' => __( 'Select A Featured Post', 'mytheme' ),
     'section' => 'header_section',
     'settings' => 'featured_post',
     // 'post_type' => 'page'
     )
 )
);
