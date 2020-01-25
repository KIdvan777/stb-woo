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
				$('#customize-control-stb_header_2_email_icon_control, #customize-control-stb_header_2_email_icon_color_control, #customize-control-stb_header_2_email_control, #customize-control-stb_header_2_phone_icon_control,  #customize-control-stb_header_2_phone_icon_color_control, #customize-control-stb_header_2_phone_control, #customize-control-stb_header_2_phone_icon_2_control,  #customize-control-stb_header_2_phone_icon_2_color_control, #customize-control-stb_header_2_phone_number_2_control, #customize-control-stb_header_2_top_header_color_control, #customize-control-stb_header_2_top_header_bgc_color_control, #customize-control-stb_header_2_background_control').hide();

				$('#stb_header_2_top_button').click(function(){
					$('#customize-control-stb_header_2_email_icon_control, #customize-control-stb_header_2_email_icon_color_control, #customize-control-stb_header_2_email_control, #customize-control-stb_header_2_phone_icon_control,  #customize-control-stb_header_2_phone_icon_color_control, #customize-control-stb_header_2_phone_control, #customize-control-stb_header_2_phone_icon_2_control,  #customize-control-stb_header_2_phone_icon_2_color_control, #customize-control-stb_header_2_phone_number_2_control, #customize-control-stb_header_2_top_header_color_control, #customize-control-stb_header_2_top_header_bgc_color_control, #customize-control-stb_header_2_background_control'
					).slideToggle();
				});

			});
		</script>
		<?php
		}
	}
endif;
