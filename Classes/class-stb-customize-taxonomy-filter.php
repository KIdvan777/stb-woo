<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class Stb_Customize_Taxonomy_Filter_Control extends WP_Customize_Control {
		public $type = 'filter_dropdown_2';

		public function render_content() {?>

		  <label>
			  <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			  <select <?php $this->link(); ?>>

			  <?php

				  $args = array(
					'public'   => true,
					//'_builtin' => false
				  );
				  $output = 'names'; // или objects
				  $operator = 'and'; // 'and' или 'or'

				  $taxonomies = get_taxonomies( $args, $output, $operator );
				  	foreach($taxonomies as $taxonomy):

					  echo "<option " . selected( $this->value(), $taxonomy ) . " value='" . $taxonomy . "'>" . $taxonomy. "</option>";

			  		endforeach;
				?>

			</select>
		</label>

    <?}
}

endif;
