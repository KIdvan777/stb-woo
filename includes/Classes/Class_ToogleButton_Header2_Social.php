<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class WP_Customize_Toggle_Button_H2_Social_Control extends WP_Customize_Control {
		public $type = 'button';

		public function render_content() {
		?>
		<label>
			<span id="stb_header_2_social_button" class="customize-control-title customizer_toggle_button"><?php echo esc_html( $this->label ); ?></span>
		</label>
		<script type="text/javascript">

			jQuery(function($){
				$('#customize-control-stb_header_2_top_header_social_display_triger_control, #customize-control-stb_header_2_top_header_social_1_control, #customize-control-stb_header_2_top_header_social_image_1_control, #customize-control-stb_header_2_top_header_social_1_triger_control, #customize-control-stb_header_2_top_header_social_2_control, #customize-control-stb_header_2_top_header_social_image_2_control, #customize-control-stb_header_2_top_header_social_2_triger_control, #customize-control-stb_header_2_top_header_social_3_control, #customize-control-stb_header_2_top_header_social_image_3_control, #customize-control-stb_header_2_top_header_social_3_triger_control, #customize-control-stb_header_2_top_header_social_4_control, #customize-control-stb_header_2_top_header_social_image_4_control, #customize-control-stb_header_2_top_header_social_4_triger_control').hide();

				$('#stb_header_2_social_button').click(function(){
					$('#customize-control-stb_header_2_top_header_social_display_triger_control, #customize-control-stb_header_2_top_header_social_1_control, #customize-control-stb_header_2_top_header_social_image_1_control, #customize-control-stb_header_2_top_header_social_1_triger_control, #customize-control-stb_header_2_top_header_social_2_control, #customize-control-stb_header_2_top_header_social_image_2_control, #customize-control-stb_header_2_top_header_social_2_triger_control, #customize-control-stb_header_2_top_header_social_3_control, #customize-control-stb_header_2_top_header_social_image_3_control, #customize-control-stb_header_2_top_header_social_3_triger_control, #customize-control-stb_header_2_top_header_social_4_control, #customize-control-stb_header_2_top_header_social_image_4_control, #customize-control-stb_header_2_top_header_social_4_triger_control'
					).slideToggle();
				});

			});
		</script>
		<?php
		}
	}
endif;
