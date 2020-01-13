<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class WP_Customize_Terms_Filter_Control extends WP_Customize_Control {
		public $type = 'filter_dropdown_3';

		public function render_content() {?>

			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<select <?php $this->link(); ?>>
	            <?php
					$terms = get_terms();
	              	foreach( $terms as $term ):
	                	$term_id = $term->term_id;

	            ?>
      				<?php
      					echo "<option " . selected( $this->value(), $term_id ) . " value='" . $term_id . "'>" . $term->name . "</option>";
      				?>
              	<?endforeach;?>
			  </select>
		  </label>

    <?}
}
endif;

$wp_customize->add_setting('stb_terms_filter_setting', array(
    'default' =>'',
    'transport' =>'refresh'
));

$wp_customize->add_control(
    new WP_Customize_Terms_Filter_Control(
    $wp_customize,
    	'stb_terms_filter_control',
    array(
	    'label' => __( 'Select A Terms', 'stb' ),
	    'section' => 'stb_product_section',
	    'settings' => 'stb_terms_filter_setting',
    	)
 	)
);
