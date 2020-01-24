<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class WP_Customize_Toggle_Button_H2_Top_Control extends WP_Customize_Control {
		public $type = 'button';

		public function render_content() {
		?>
		<label>
			<span id="stb_header_2_top_button" class="customize-control-title customizer_toggle_button"><?php echo esc_html( $this->label ); ?></span>
		</label>
		<script type="text/javascript">

			jQuery(function($){
				$('.customize-control-color, .customize-control-image, .customize-control-radio, .customize-control-url').hide();

				$('#stb_header_2_top_button').click(function(){
					$('.customize-control-color, .customize-control-image, .customize-control-radio, .customize-control-url'
					).slideToggle();
				});

			});
		</script>
		<?php
		}
	}
endif;
