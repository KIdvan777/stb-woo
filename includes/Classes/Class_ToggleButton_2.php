<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class WP_Customize_Toggle_Button2_Control extends WP_Customize_Control {
		public $type = 'button';

		public function render_content() {
		?>
		<label>
			<span id="stb_hero_2_slide_2_button" class="customize-control-title customizer_toggle_button"><?php echo esc_html( $this->label ); ?></span>
		</label>
		<script type="text/javascript">
			jQuery(function($){

				$('#customize-control-stb_main_page_hero_slide_2_title_control, #customize-control-stb_main_page_hero_slide_2_description_control, #customize-control-stb_main_page_hero_slide_2_description_text_color_control, #customize-control-stb_main_page_hero_slide_2_link_control, #customize-control-stb_main_page_hero_slide_2_bgc_color_control, #customize-control-stb_hero_image_2_control'
				).hide();

				$('#stb_hero_2_slide_2_button').click(function(){
				$('#customize-control-stb_main_page_hero_slide_2_title_control, #customize-control-stb_main_page_hero_slide_2_description_control, #customize-control-stb_main_page_hero_slide_2_description_text_color_control, #customize-control-stb_main_page_hero_slide_2_link_control, #customize-control-stb_main_page_hero_slide_2_bgc_color_control, #customize-control-stb_hero_image_2_control').slideToggle();
				});
			});
		</script>
		<?php
		}
	}
endif;
