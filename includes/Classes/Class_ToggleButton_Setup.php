<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class WP_Customize_Toggle_All_Control extends WP_Customize_Control {
		public $type = 'button';

		public function render_content() {
		?>
		<label>
			<span id="stb_hero_1_all_button" class="customize-control-title customizer_toggle_button"><?php echo esc_html( $this->label ); ?></span>
		</label>
		<script type="text/javascript">
			jQuery(function($){

				$('#customize-control-main_page_hero_1_choices_control, 	#customize-control-stb_main_page_hero_1_bgc_color_1_control, 	#customize-control-stb_main_page_hero_2_bgc_color_2_control, 	#customize-control-stb_main_page_hero_1_bgc_angle_control'
				).hide();

				$('#stb_hero_1_all_button').click(function(){	$('#customize-control-main_page_hero_1_choices_control, #customize-control-stb_main_page_hero_1_bgc_color_1_control, #customize-control-stb_main_page_hero_2_bgc_color_2_control, #customize-control-stb_main_page_hero_1_bgc_angle_control'
                ).slideToggle();
				});
			});
		</script>
		<?php
		}
	}
endif;
