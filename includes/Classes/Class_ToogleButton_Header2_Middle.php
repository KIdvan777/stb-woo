<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class WP_Customize_Toggle_Button_H2_Middle_Control extends WP_Customize_Control {
		public $type = 'button';

		public function render_content() {
		?>
		<label>
			<span id="stb_header_2_middle_button" class="customize-control-title customizer_toggle_button"><?php echo esc_html( $this->label ); ?></span>
		</label>
		<script type="text/javascript">

			jQuery(function($){
				$('#customize-control-stb_header_2_middle_call_button_control, #customize-control-stb_header_2_top_header_logo_color_control, #customize-control-stb_header_2_middle_header_right_icons_control, #customize-control-stb_header_2_middle_choices_control').hide();

				$('#stb_header_2_middle_button').click(function(){
					$('#customize-control-stb_header_2_middle_call_button_control, #customize-control-stb_header_2_top_header_logo_color_control, #customize-control-stb_header_2_middle_header_right_icons_control, #customize-control-stb_header_2_middle_choices_control'
					).slideToggle();
				});
			});
		</script>
		<?php
		}
	}
endif;
