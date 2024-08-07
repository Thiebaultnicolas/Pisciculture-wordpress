<?php
add_action( 'admin_menu', 'journeytourismpro_getting_started' );
function journeytourismpro_getting_started() {
	add_theme_page( esc_html__('JourneyTourismpro Theme', 'journey-turism'), esc_html__('JourneyTourismpro Theme', 'journey-turism'), 'edit_theme_options', 'journeytourismpro-guide-page', 'journeytourismpro_test_guide');
}

// Add a Custom CSS file to WP Admin Area
function journeytourismpro_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/get-started/get-started.css');
}
add_action('admin_enqueue_scripts', 'journeytourismpro_admin_theme_style');

// Guidline for about theme
function journeytourismpro_test_guide() { 
	// Custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'journey-turism' );
?>
<div class="wrapper-info">
	<div class="intro row">
		<div class="col-lg-6">
			<h1 class="theme-title"><?php esc_html_e( 'JourneyTourismpro WordPress Theme', 'journey-turism' ); ?> - <small> <?php echo esc_html($theme['Version']);?> </small></h1>
		
			<p><b><?php esc_html_e('JourneyTourismpro Theme ','journey-turism'); ?></b><?php esc_html_e('is now installed and ready to use. We hope the following information will help and you enjoy using it!', 'journey-turism'); ?></p>
			<a class="bg-color-2 " href="<?php echo esc_url( JourneyTourismpro_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e('Preview Theme', 'journey-turism'); ?></a>
			<a class="bg-color " href="<?php echo esc_url( JourneyTourismpro_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'journey-turism'); ?></a>
		</div>
		<div class="col-lg-6">
			
			<div class="image_journey-turism"> 
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mockup.png" alt="" class="mockup-img"/>
		</div>
		</div>
		
	</div>
	
	<div class="features">
		<div class="row">
		<div class="col">
		<h4><?php esc_html_e('Unlock Premium Features', 'journey-turism'); ?></h4>
				<p><?php esc_html_e('Unlock the full potential of your website with our Pro theme upgrade.', 'journey-turism'); ?></p>
				<a class="bg-color-3" href="<?php echo esc_url( JourneyTourismpro_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade Now', 'journey-turism'); ?></a>
		</div>
		<div class="col">
		<h4><?php esc_html_e('Only Company with 24h Chat Support & Email', 'journey-turism'); ?></h4>
				<p><?php esc_html_e('Enjoy the convenience of round-the-clock customer support with our 24-hour chat and email services. We\'re here for you whenever you need us.', 'journey-turism'); ?></p>
				
		</div>
		<div class="col">
		<h4><?php esc_html_e('+ 30 Costumized Patterns', 'journey-turism'); ?></h4>
				<p><?php esc_html_e('Explore our diverse range of over 30 unique patterns, designed to suit your style and preferences.', 'journey-turism'); ?></p>
				
		</div>
		<div class="col">
		<h4><?php esc_html_e('+20 Personalized Pages and Effects', 'journey-turism'); ?></h4>
				<p><?php esc_html_e('Transform your website with our selection of +20 personalized pages and effects, tailored to make your online presence truly stand out.', 'journey-turism'); ?></p>
				
		</div>
		</div>
		
	</div>

	
</div>
<?php } ?>