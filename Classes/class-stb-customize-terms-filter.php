<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class STB_Customize_Terms_Filter_Control extends WP_Customize_Control {
		public $type = 'filter_dropdown_3';

		public function render_content() {?>

			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<select <?php $this->link();?> multiple >
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
