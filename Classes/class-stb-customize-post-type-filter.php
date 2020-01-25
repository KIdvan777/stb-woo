<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class STB_Customize_Post_Type_Filter_Control extends WP_Customize_Control {
		public $type = 'filter_dropdown_1';

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
