<?php
if( class_exists( 'WP_Customize_Control' ) ):
	class WP_Customize_Toogle_Button_Control extends WP_Customize_Control {
		public $type = 'button';

		public function render_content() {
		?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<button id="stb_hero_1_slides_button" type="button" name="stb_hero_1_slide_1">click</button>
		</label>

			<script type="text/javascript">
				jQuery(function($){
					$('#stb_hero_1_slides_button').click(function(){
							$('#customize-control-stb_main_page_hero_slide_1_title_control, #customize-control-stb_main_page_hero_slide_1_description_control, #customize-control-stb_main_page_hero_slide_1_description_text_color_control, #customize-control-stb_main_page_hero_slide_1_link_control, #customize-control-stb_main_page_hero_slide_bgc_color_control, #customize-control-stb_hero_image_1_input, #customize-control-stb_hero_image_2_input, #customize-control-stb_main_page_hero_1_bgc_color_1_control #customize-control-stb_main_page_hero_2_bgc_color_2_control, #customize-control-stb_main_page_hero_1_bgc_angle_control' ).slideToggle();
					});
				})
			</script>
		<?php
		}
	}
endif;
