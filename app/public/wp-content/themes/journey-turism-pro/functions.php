<?php 

function journeytourismpro_theme_gsap_script(){

    // The core GSAP library
    wp_enqueue_script( 'gsap-js', get_template_directory_uri() . '/assets/js/gsap.min.js', array(), false, true );
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-st', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array('gsap-js'), false, true );
    // Lenis - Smotter Scroll Animation
    wp_enqueue_script( 'gsap-js2', get_template_directory_uri() . '/assets/js/lenis.min.js', array('gsap-js'), false, true );
     // Custom JS 
    wp_enqueue_script( 'gsap-js3', get_template_directory_uri() . '/assets/js/custom.js', array('gsap-js'), false, true );

}

add_action( 'wp_enqueue_scripts', 'journeytourismpro_theme_gsap_script' );

require get_template_directory() . '/inc/block-patterns.php';
require get_template_directory() . '/inc/pro-patterns.php';

// Add Customizer
require get_template_directory() . '/inc/customizer.php';


// Upsell in the customizer
if ( class_exists( 'WP_Customize_Section' ) ) {
	class JourneyTourism_Upsell_Section extends WP_Customize_Section {
		public $type = 'journey-turism-upsell';
		public $button_text = '';
		public $url = '';
		public $background = '';
		public $text_color = '';
		protected function render() {
			$background = ! empty( $this->background ) ? esc_attr( $this->background ) : 'linear-gradient(90deg,rgb(0,0,0) 0%,rgb(0,0,0) 35%,rgb(0,0,0) 70%,rgb(0,0,0) 100%)
            ';
			$text_color       = ! empty( $this->text_color ) ? esc_attr( $this->text_color ) : '#fff';
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="journey-turism_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
				<h3 class="accordion-section-title" style="border: 0; color:#fff; background:<?php echo esc_attr( $background ); ?>;">
					<?php echo esc_html( $this->title ); ?>
					<a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
				</h3>
			</li>
			<?php
		}
	}
}



// Add Get Started
require get_template_directory() . '/inc/get-started/get-started.php';




/* Theme credit link */
define('JourneyTourismpro_BUY_NOW',__('https://realtimethemes.com/theme/journey-turism','journey-turism'));
define('JourneyTourismpro_PRO_DEMO',__('https://preview.realtimethemes.com/journey-turism/','journey-turism'));
define('JourneyTourismpro_REVIEW',__('https://realtimethemes.com/theme/journey-turism','journey-turism'));
define('JourneyTourismpro_SUPPORT',__('https://realtimethemes.com/','journey-turism'));


?>