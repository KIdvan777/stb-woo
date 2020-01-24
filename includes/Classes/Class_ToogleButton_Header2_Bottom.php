<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class WP_Customize_Toggle_Button_H2_Bottom_Control extends WP_Customize_Control {
		public $type = 'button';

		public function render_content() {
		?>
		<label>
			<span id="stb_header_2_bottom_button" class="customize-control-title customizer_toggle_button"><?php echo esc_html( $this->label ); ?></span>
		</label>
		<script type="text/javascript">

			jQuery(function($){
				$('#customize-control-stb_header_2_bottom_header_bgc_color_control, #customize-control-stb_header_2_bottom_header_bgc_transperent_control, #customize-control-stb_header_2_bottom_header_bgc_shadow_control, #customize-control-stb_header_2_bottom_header_text_color_control, #customize-control-stb_header_2_bgc_color_control, #customize-control-stb_header_2_bgc_gradient_value_1_control, #customize-control-stb_header_2_bgc_gradient_value_2_control, #customize-control-stb_header_2_bgc_gradient_angle_control, #customize-control-stb_header_2_bgc_triger_control').hide();

				$('#stb_header_2_bottom_button').click(function(){
					$('#customize-control-stb_header_2_bottom_header_bgc_color_control, #customize-control-stb_header_2_bottom_header_bgc_transperent_control, #customize-control-stb_header_2_bottom_header_bgc_shadow_control, #customize-control-stb_header_2_bottom_header_text_color_control, #customize-control-stb_header_2_bgc_color_control, #customize-control-stb_header_2_bgc_gradient_value_1_control, #customize-control-stb_header_2_bgc_gradient_value_2_control, #customize-control-stb_header_2_bgc_gradient_angle_control, #customize-control-stb_header_2_bgc_triger_control'
					).slideToggle();
				});
			});
		</script>
		<?php
		}
	}
endif;
