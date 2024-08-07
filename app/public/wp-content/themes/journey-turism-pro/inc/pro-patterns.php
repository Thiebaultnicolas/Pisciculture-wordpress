<?php


/**
 * Registers block patterns and categories.
 *
 * @since 1.0
 *
 * @return void
 */

function journeytourismpro_wpdocs_block_pattern_category()
{
    register_block_pattern_category('pro-patterns', array(
        'label' => __('Pro Paterns', 'journey-turism')
    ));
}

add_action('init', 'journeytourismpro_wpdocs_block_pattern_category');


function journeytourismpro_custom_register_block_patterns()
{


    register_block_pattern(
        'Destinations', // Unique name for your pattern
        array(
            'title'       => __('Destinations', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Section showing the destinations offered', // Description of your pattern

            'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/water-ocean-horizon-architecture-skyline-night-680951-pxhere.com_-edited-scaled.jpg')) . '","id":338,"dimRatio":40,"overlayColor":"black","isUserOverlayColor":true,"minHeight":20,"minHeightUnit":"rem","contentPosition":"bottom center","style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fixed","flexSize":"30rem"}},"className":"fade-up"} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center fade-up" style="min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-338" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/water-ocean-horizon-architecture-skyline-night-680951-pxhere.com_-edited-scaled.jpg')) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-left has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">Dubai</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">$200</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"small","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-small-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none"><sup>for day</sup></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-color-3","className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link has-white-color has-text-color has-link-color has-border-color has-custom-color-3-border-color wp-element-button" href="/destinations/dubai" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">See details</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover -->
            
            <!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/beach-landscape-sea-coast-water-nature-677311-pxhere.com_-scaled.jpg')) . '","id":339,"dimRatio":50,"overlayColor":"black","isUserOverlayColor":true,"minHeight":20,"minHeightUnit":"rem","contentPosition":"bottom center","style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fixed","flexSize":"30rem"}},"className":"fade-up"} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center fade-up" style="min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-339" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/beach-landscape-sea-coast-water-nature-677311-pxhere.com_-scaled.jpg')) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-left has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">Hawaii</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">$170</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"smallbig","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-smallbig-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none"><sup>for day</sup></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-color-3","className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link has-white-color has-text-color has-link-color has-border-color has-custom-color-3-border-color wp-element-button" href="/destinations/hawaii" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">See details</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover -->
            
            <!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/netherlands1.jpg')) . '","id":112,"dimRatio":40,"overlayColor":"black","isUserOverlayColor":true,"minHeight":20,"minHeightUnit":"rem","contentPosition":"bottom center","style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fixed","flexSize":"30rem"}},"className":"fade-up"} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center fade-up" style="min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-112" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/netherlands1.jpg')) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-left has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">Amsterdam</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">$120</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"small","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-small-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none"><sup>for day</sup></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-color-3","className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link has-white-color has-text-color has-link-color has-border-color has-custom-color-3-border-color wp-element-button" href="/destinations/hawaii" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">See details</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover -->
            
            <!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/japan1.jpg')) . '","id":130,"dimRatio":50,"overlayColor":"black","isUserOverlayColor":true,"minHeight":20,"minHeightUnit":"rem","contentPosition":"bottom center","style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fixed","flexSize":"30rem"}},"className":"fade-up"} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center fade-up" style="min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-130" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/japan1.jpg')) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-left has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">Kanagawa</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">$110</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"small","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-small-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none"><sup>for day</sup></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-color-3","className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link has-white-color has-text-color has-link-color has-border-color has-custom-color-3-border-color wp-element-button" href="/destinations/hawaii" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">See details</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover -->
            
            <!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/colombia1.jpeg')) . '","id":109,"dimRatio":50,"overlayColor":"black","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":1},"minHeight":20,"minHeightUnit":"rem","contentPosition":"bottom center","style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fixed","flexSize":"30rem"}},"className":"fade-up"} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center fade-up" style="min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-109" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/colombia1.jpeg')) . '" style="object-position:50% 100%" data-object-fit="cover" data-object-position="50% 100%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-left has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">Medellín</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">$80</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"small","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-small-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none"><sup>for day</sup></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-color-3","className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link has-white-color has-text-color has-link-color has-border-color has-custom-color-3-border-color wp-element-button" href="/destinations/hawaii" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">See details</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover -->
            
            <!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/southafrica2.jpg')) . '","id":216,"dimRatio":50,"overlayColor":"black","isUserOverlayColor":true,"minHeight":20,"minHeightUnit":"rem","contentPosition":"bottom center","style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fixed","flexSize":"30rem"}},"className":"fade-up"} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center fade-up" style="min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-216" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/southafrica2.jpg')) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-left has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">Cape Town</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">$110</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"small","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-small-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none"><sup>for day</sup></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-color-3","className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link has-white-color has-text-color has-link-color has-border-color has-custom-color-3-border-color wp-element-button" href="/destinations/hawaii" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">See details</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover -->
            
            <!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/australia2-scaled.jpg')) . '","id":220,"dimRatio":50,"overlayColor":"black","isUserOverlayColor":true,"minHeight":20,"minHeightUnit":"rem","contentPosition":"bottom center","style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fixed","flexSize":"30rem"}},"className":"fade-up"} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-center fade-up" style="min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-220" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/australia2-scaled.jpg')) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-left has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">Sydney</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">$120</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"small","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-small-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none"><sup>for day</sup></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-color-3","className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link has-white-color has-text-color has-link-color has-border-color has-custom-color-3-border-color wp-element-button" href="/destinations/hawaii" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">See details</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'destinations', 'projects'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'Categories', // Unique name for your pattern
        array(
            'title'       => __('Categories', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Section showing and linking post categories', // Description of your pattern

            'content'     => '<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}},"className":"marquee","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
            <div class="wp-block-group marquee" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:group {"className":"container-marquees","layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group container-marquees"><!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/colombia1-1.jpeg')) . '","dimRatio":40,"overlayColor":"custom-color-1","isUserOverlayColor":true,"minHeight":22,"minHeightUnit":"rem","style":{"layout":{"selfStretch":"fill","flexSize":null},"color":{"duotone":"var:preset|duotone|dark-grayscale"},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"className":"marquees","layout":{"type":"default"}} -->
            <div class="wp-block-cover marquees" style="margin-top:0;margin-bottom:0;min-height:22rem"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-1-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/colombia1-1.jpeg')) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-3"}}}},"textColor":"custom-color-3","fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center has-custom-color-3-color has-text-color has-link-color has-tenor-sans-font-family has-large-font-size">South </p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-3"}}}},"textColor":"custom-color-3","fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center has-custom-color-3-color has-text-color has-link-color has-tenor-sans-font-family has-large-font-size">America</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"16px"}},"className":"is-style-outline","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family" style="font-size:16px"><a class="wp-block-button__link wp-element-button" href="/category/america" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)">Read more</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover -->
            
            <!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/australia2-scaled.jpg')) . '","id":220,"dimRatio":40,"overlayColor":"custom-color-1","isUserOverlayColor":true,"minHeight":22,"minHeightUnit":"rem","style":{"layout":{"selfStretch":"fill","flexSize":null},"color":{"duotone":"var:preset|duotone|dark-grayscale"},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"className":"marquees","layout":{"type":"default"}} -->
            <div class="wp-block-cover marquees" style="margin-top:0;margin-bottom:0;min-height:22rem"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-1-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-220" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/australia2-scaled.jpg')) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-3"}}}},"textColor":"custom-color-3","fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center has-custom-color-3-color has-text-color has-link-color has-tenor-sans-font-family has-large-font-size">North</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-3"}}}},"textColor":"custom-color-3","fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center has-custom-color-3-color has-text-color has-link-color has-tenor-sans-font-family has-large-font-size">America</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"16px"}},"className":"is-style-outline","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family" style="font-size:16px"><a class="wp-block-button__link wp-element-button" href="/category/america" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)">Read more</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover -->
            
            <!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/southafrica1.jpg')) . '","dimRatio":40,"overlayColor":"custom-color-1","isUserOverlayColor":true,"focalPoint":{"x":0.76,"y":0.44},"minHeight":22,"minHeightUnit":"rem","style":{"layout":{"selfStretch":"fill","flexSize":null},"color":{"duotone":"var:preset|duotone|dark-grayscale"},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"className":"marquees","layout":{"type":"default"}} -->
            <div class="wp-block-cover marquees" style="margin-top:0;margin-bottom:0;min-height:22rem"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-1-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/southafrica1.jpg')) . '" style="object-position:76% 44%" data-object-fit="cover" data-object-position="76% 44%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-3"}}}},"textColor":"custom-color-3","fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center has-custom-color-3-color has-text-color has-link-color has-tenor-sans-font-family has-large-font-size">Africa</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"16px"}},"className":"is-style-outline","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family" style="font-size:16px"><a class="wp-block-button__link wp-element-button" href="/category/africa" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)">Read more</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"className":"container-marquees","layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group container-marquees"><!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/japan1.jpg')) . '","dimRatio":40,"overlayColor":"custom-color-1","isUserOverlayColor":true,"minHeight":22,"minHeightUnit":"rem","style":{"layout":{"selfStretch":"fill","flexSize":null},"color":{"duotone":"var:preset|duotone|dark-grayscale"},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"className":"marquees","layout":{"type":"default"}} -->
            <div class="wp-block-cover marquees" style="margin-top:0;margin-bottom:0;min-height:22rem"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-1-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/japan1.jpg')) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-3"}}}},"textColor":"custom-color-3","fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center has-custom-color-3-color has-text-color has-link-color has-tenor-sans-font-family has-large-font-size">Asia</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"16px"}},"className":"is-style-outline","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family" style="font-size:16px"><a class="wp-block-button__link wp-element-button" href="/category/asia" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)">Read more</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover -->
            
            <!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/australia1.jpg')) . '","dimRatio":40,"overlayColor":"custom-color-1","isUserOverlayColor":true,"minHeight":22,"minHeightUnit":"rem","style":{"layout":{"selfStretch":"fill","flexSize":null},"color":{"duotone":"var:preset|duotone|dark-grayscale"},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"className":"marquees","layout":{"type":"default"}} -->
            <div class="wp-block-cover marquees" style="margin-top:0;margin-bottom:0;min-height:22rem"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-1-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/australia1.jpg')) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-3"}}}},"textColor":"custom-color-3","fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center has-custom-color-3-color has-text-color has-link-color has-tenor-sans-font-family has-large-font-size">Oceania</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"16px"}},"className":"is-style-outline","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family" style="font-size:16px"><a class="wp-block-button__link wp-element-button" href="/category/oceania" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)">Read more</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover -->
            
            <!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/netherlands1.jpg')) . '","dimRatio":40,"overlayColor":"custom-color-1","isUserOverlayColor":true,"minHeight":22,"minHeightUnit":"rem","style":{"layout":{"selfStretch":"fill","flexSize":null},"color":{"duotone":"var:preset|duotone|dark-grayscale"},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|50"}},"className":"marquees","layout":{"type":"default"}} -->
            <div class="wp-block-cover marquees" style="margin-top:0;margin-bottom:0;min-height:22rem"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-1-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/netherlands1.jpg')) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-3"}}}},"textColor":"custom-color-3","fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center has-custom-color-3-color has-text-color has-link-color has-tenor-sans-font-family has-large-font-size">Europe</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"16px"}},"className":"is-style-outline","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family" style="font-size:16px"><a class="wp-block-button__link wp-element-button" href="/category/europe" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)">Read more</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'categories'), // Keywords to help users find your pattern
        )
    );


    register_block_pattern(
        'Services', // Unique name for your pattern
        array(
            'title'       => __('Services', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Section showing services Section', // Description of your pattern

            'content'     => '<!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/bg-services-scaled.jpg')) . '","hasParallax":true,"dimRatio":90,"overlayColor":"custom-color-2","isUserOverlayColor":true,"isDark":false} -->
            <div class="wp-block-cover is-light has-parallax"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-2-background-color has-background-dim-90 has-background-dim"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(' . esc_url(get_theme_file_uri('/assets/images/bg-services-scaled.jpg')) . ')"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#ffffff00"}},"layout":{"type":"default"}} -->
            <div class="wp-block-group has-background" style="background-color:#ffffff00;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"custom-color-1","className":"fade-up","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-text-align-center fade-up has-custom-color-1-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="margin-top:var(--wp--preset--spacing--60);font-style:normal;font-weight:500;text-transform:uppercase">our</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-3"}}},"spacing":{"margin":{"bottom":"0"}}},"textColor":"custom-color-3","className":"big-titles fade-up","fontSize":"x-large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles fade-up has-custom-color-3-color has-text-color has-link-color has-tenor-sans-font-family has-x-large-font-size" style="margin-bottom:0">Services</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"},"blockGap":"6rem"},"color":{"background":"#ffffff00"}},"className":"container-imgs-home-services","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group alignfull container-imgs-home-services has-background" style="background-color:#ffffff00;margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|70"},"color":{"background":"#ffffff00"}},"className":"box-home-services","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
            <div class="wp-block-group box-home-services has-background" style="background-color:#ffffff00;padding-right:0;padding-left:0"><!-- wp:image {"width":"120px","aspectRatio":"1","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"imgs-home-services"} -->
            <figure class="wp-block-image size-full is-resized imgs-home-services"><img src="' . esc_url(get_theme_file_uri('/assets/images/guide.png')) . '" alt="" style="aspect-ratio:1;object-fit:contain;width:120px"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"35px"}},"textColor":"white","className":"big-titles","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles has-white-color has-text-color has-link-color has-tenor-sans-font-family" style="font-size:35px">GUIDE</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|70"},"color":{"background":"#ffffff00"}},"className":"box-home-services","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
            <div class="wp-block-group box-home-services has-background" style="background-color:#ffffff00;padding-right:0;padding-left:0"><!-- wp:image {"id":768,"width":"120px","aspectRatio":"1","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"imgs-home-services"} -->
            <figure class="wp-block-image size-full is-resized imgs-home-services"><img src="' . esc_url(get_theme_file_uri('/assets/images/passport-2.png')) . '" alt="" class="wp-image-768" style="aspect-ratio:1;object-fit:contain;width:120px"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"35px"}},"textColor":"white","className":"big-titles","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles has-white-color has-text-color has-link-color has-tenor-sans-font-family" style="font-size:35px">PASSPORT</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|70"},"color":{"background":"#ffffff00"}},"className":"box-home-services","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
            <div class="wp-block-group box-home-services has-background" style="background-color:#ffffff00;padding-right:0;padding-left:0"><!-- wp:image {"width":"120px","aspectRatio":"1","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"imgs-home-services"} -->
            <figure class="wp-block-image size-full is-resized imgs-home-services"><img src="' . esc_url(get_theme_file_uri('/assets/images/hotel.png')) . '" alt="" style="aspect-ratio:1;object-fit:contain;width:120px"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"35px"}},"textColor":"white","className":"big-titles","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles has-white-color has-text-color has-link-color has-tenor-sans-font-family" style="font-size:35px">HOTELS</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|70"},"color":{"background":"#ffffff00"}},"className":"box-home-services","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
            <div class="wp-block-group box-home-services has-background" style="background-color:#ffffff00;padding-right:0;padding-left:0"><!-- wp:image {"width":"120px","aspectRatio":"1","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"imgs-home-services"} -->
            <figure class="wp-block-image size-full is-resized imgs-home-services"><img src="' . esc_url(get_theme_file_uri('/assets/images/airplane.png')) . '" alt="" style="aspect-ratio:1;object-fit:contain;width:120px"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"35px"}},"textColor":"white","className":"big-titles","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles has-white-color has-text-color has-link-color has-tenor-sans-font-family" style="font-size:35px">FLIGHTS</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|70"},"color":{"background":"#ffffff00"}},"className":"box-home-services","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
            <div class="wp-block-group box-home-services has-background" style="background-color:#ffffff00;padding-right:0;padding-left:0"><!-- wp:image {"width":"120px","aspectRatio":"1","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"imgs-home-services"} -->
            <figure class="wp-block-image size-full is-resized imgs-home-services"><img src="' . esc_url(get_theme_file_uri('/assets/images/bus.png')) . '" alt="" style="aspect-ratio:1;object-fit:contain;width:120px"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"35px"}},"textColor":"white","className":"big-titles","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles has-white-color has-text-color has-link-color has-tenor-sans-font-family" style="font-size:35px">TRANSPORT</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|70"},"color":{"background":"#ffffff00"}},"className":"box-home-services","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
            <div class="wp-block-group box-home-services has-background" style="background-color:#ffffff00;padding-right:0;padding-left:0"><!-- wp:image {"width":"120px","aspectRatio":"1","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"imgs-home-services"} -->
            <figure class="wp-block-image size-full is-resized imgs-home-services"><img src="' . esc_url(get_theme_file_uri('/assets/images/translate.png')) . '" alt="" style="aspect-ratio:1;object-fit:contain;width:120px"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"35px"}},"textColor":"white","className":"big-titles","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles has-white-color has-text-color has-link-color has-tenor-sans-font-family" style="font-size:35px">TRANSLATE</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|70","margin":{"top":"0","bottom":"0"}},"color":{"background":"#ffffff00"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group has-background" style="background-color:#ffffff00;margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"0"}}}} -->
            <div class="wp-block-buttons" style="margin-top:0"><!-- wp:button {"className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link wp-element-button" href="/services">View more</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div></div>
            <!-- /wp:cover -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'services'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'Read more', // Unique name for your pattern
        array(
            'title'       => __('Read more', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Section showing post suggestions', // Description of your pattern

            'content'     => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"custom-color-3","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-custom-color-3-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"textColor":"custom-color-2","className":"big-titles fade-up","fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles fade-up has-custom-color-2-color has-text-color has-link-color has-tenor-sans-font-family has-large-font-size" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">Read more</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:query {"queryId":17,"query":{"perPage":"3","pages":0,"offset":"0","postType":"post","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide","layout":{"type":"default"}} -->
            <div class="wp-block-query alignwide"><!-- wp:post-template {"className":"fade-up","layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"30px","bottom":"0","left":"30px"},"blockGap":"0"}},"layout":{"inherit":false}} -->
            <div class="wp-block-group" style="padding-top:0;padding-right:30px;padding-bottom:0;padding-left:30px"><!-- wp:post-featured-image {"isLink":true,"width":"16rem","height":"8rem","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} /-->
            
            <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"26px"},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}}},"textColor":"custom-color-1"} /-->
            
            <!-- wp:post-excerpt {"excerptLength":15,"style":{"typography":{"letterSpacing":"0.15px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small","fontFamily":"roboto"} /-->
            
            <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}}},"textColor":"custom-color-2","fontFamily":"roboto"} /--></div>
            <!-- /wp:group -->
            <!-- /wp:post-template --></div>
            <!-- /wp:query --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'read more', 'posts', 'blog'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'Moments', // Unique name for your pattern
        array(
            'title'       => __('Moments', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Section showing trips offered', // Description of your pattern

            'content'     => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"0","right":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
            <div class="wp-block-group has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"textColor":"custom-color-2","className":"fade-up","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-text-align-center fade-up has-custom-color-2-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase">the best</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"custom-color-1","className":"big-titles fade-up","fontSize":"x-large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles fade-up has-custom-color-1-color has-text-color has-link-color has-tenor-sans-font-family has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--60)">Moments</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"0","right":"var:preset|spacing|30","left":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","style":{"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|custom-color-2","style":"none","width":"0px"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|60"}},"className":"fade-left","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
            <div class="wp-block-group alignwide fade-left" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--custom-color-2);border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-right:0;padding-left:0"><!-- wp:gallery {"columns":2,"linkTo":"none","style":{"spacing":{"blockGap":{"top":"0","left":"0"}},"layout":{"selfStretch":"fixed","flexSize":"20rem"}}} -->
            <figure class="wp-block-gallery has-nested-images columns-2 is-cropped"><!-- wp:image {"id":331,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|dark-grayscale"}}} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url(get_theme_file_uri('/assets/images/horizon-wing-sky-atmosphere-flying-airplane-1245082-pxhere.com_-edited-1024x1024.jpg')) . '" alt="" class="wp-image-331"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url(get_theme_file_uri('/assets/images/services2-1024x683.jpg')) . '" alt=""/></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":338,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url(get_theme_file_uri('/assets/images/water-ocean-horizon-architecture-skyline-night-680951-pxhere.com_-scaled.jpg')) . '" alt="" class="wp-image-338"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":335,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|grayscale"}}} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url(get_theme_file_uri('/assets/images/landscape-architecture-skyline-night-city-skyscraper-1031655-pxhere.com_-edited-1024x1024.jpg')) . '" alt="" class="wp-image-335"/></figure>
            <!-- /wp:image --></figure>
            <!-- /wp:gallery -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0"}},"layout":{"selfStretch":"fixed","flexSize":"30rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30"},"padding":{"right":"0","left":"0"}}},"textColor":"custom-color-1","className":"big-titles","fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles has-custom-color-1-color has-text-color has-link-color has-tenor-sans-font-family has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30);padding-right:0;padding-left:0">Dubai Trip</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30"},"padding":{"right":"0","left":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"custom-color-1","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-custom-color-1-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="margin-bottom:var(--wp--preset--spacing--30);padding-right:0;padding-left:0;font-style:normal;font-weight:400">Quis blandit turpis cursus in hac. Pharetra massa massa ultricies mi quis. Et molestie ac feugiat sed lectus vestibulum mattis ullamcorper.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"custom-color-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-color-2","className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link has-custom-color-2-color has-text-color has-link-color has-border-color has-custom-color-2-border-color wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">Lets go!</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"align":"wide","style":{"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|custom-color-2","style":"none","width":"0px"},"left":{"style":"none","width":"0px"}},"spacing":{"blockGap":"var:preset|spacing|60","padding":{"right":"0","left":"0"}}},"className":"fade-right","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
            <div class="wp-block-group alignwide fade-right" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--custom-color-2);border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-right:0;padding-left:0"><!-- wp:gallery {"columns":2,"linkTo":"none","style":{"spacing":{"blockGap":{"top":"0","left":"0"}},"layout":{"selfStretch":"fixed","flexSize":"20rem"}}} -->
            <figure class="wp-block-gallery has-nested-images columns-2 is-cropped"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|grayscale"}}} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url(get_theme_file_uri('/assets/images/services1-edited-1.jpg')) . '" alt=""/></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":339,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url(get_theme_file_uri('/assets/images/beach-landscape-sea-coast-water-nature-677311-pxhere.com_-1024x533.jpg')) . '" alt="" class="wp-image-339"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url(get_theme_file_uri('/assets/images/home1-1024x678.jpg')) . '" alt=""/></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|grayscale"}}} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url(get_theme_file_uri('/assets/images/home2-edited-1024x1024.jpg')) . '" alt=""/></figure>
            <!-- /wp:image --></figure>
            <!-- /wp:gallery -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0"}},"layout":{"selfStretch":"fixed","flexSize":"30rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30"},"padding":{"right":"0","left":"0"}}},"textColor":"custom-color-1","className":"big-titles","fontSize":"x-large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles has-custom-color-1-color has-text-color has-link-color has-tenor-sans-font-family has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30);padding-right:0;padding-left:0">Hawaii Trip</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30"},"padding":{"right":"0","left":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"custom-color-1","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-custom-color-1-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="margin-bottom:var(--wp--preset--spacing--30);padding-right:0;padding-left:0;font-style:normal;font-weight:400">Pharetra massa massa ultricies mi quis. Et molestie ac feugiat sed lectus vestibulum mattis ullamcorper.Quis blandit turpis cursus in hac. </p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"custom-color-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-color-2","className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link has-custom-color-2-color has-text-color has-link-color has-border-color has-custom-color-2-border-color wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">Lets  go!</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:button {"className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link wp-element-button" href="/faq">View all</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'moments', 'projects', 'destinations'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'Moments (alternative)', // Unique name for your pattern
        array(
            'title'       => __('Moments (alternative)', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Section showing trips offered', // Description of your pattern

            'content'     => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"0","right":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
            <div class="wp-block-group has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"textColor":"custom-color-2","className":"fade-up","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-text-align-center fade-up has-custom-color-2-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase">the best</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"custom-color-1","className":"big-titles fade-up","fontSize":"x-large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles fade-up has-custom-color-1-color has-text-color has-link-color has-tenor-sans-font-family has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--60)">Moments</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"0","right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","style":{"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|custom-color-2","style":"none","width":"0px"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|60"}},"className":"fade-left","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
            <div class="wp-block-group alignwide fade-left" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--custom-color-2);border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-right:0;padding-left:0"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"unset"},"layout":{"selfStretch":"fixed","flexSize":"20rem"}}} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url(get_theme_file_uri('/assets/images/services2-1024x683.jpg')) . '" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0"}},"layout":{"selfStretch":"fixed","flexSize":"30rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30"},"padding":{"right":"0","left":"0"}}},"textColor":"custom-color-1","className":"big-titles","fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles has-custom-color-1-color has-text-color has-link-color has-tenor-sans-font-family has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30);padding-right:0;padding-left:0">Dubai Trip</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30"},"padding":{"right":"0","left":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"custom-color-1","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-custom-color-1-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="margin-bottom:var(--wp--preset--spacing--30);padding-right:0;padding-left:0;font-style:normal;font-weight:400">Quis blandit turpis cursus in hac. Pharetra massa massa ultricies mi quis. Et molestie ac feugiat sed lectus vestibulum mattis ullamcorper.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"custom-color-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-color-2","className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link has-custom-color-2-color has-text-color has-link-color has-border-color has-custom-color-2-border-color wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">Lets go!</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:separator {"backgroundColor":"custom-color-2","className":"is-style-dots"} -->
            <hr class="wp-block-separator has-text-color has-custom-color-2-color has-alpha-channel-opacity has-custom-color-2-background-color has-background is-style-dots"/>
            <!-- /wp:separator -->
            
            <!-- wp:group {"align":"wide","style":{"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|custom-color-2","style":"none","width":"0px"},"left":{"style":"none","width":"0px"}},"spacing":{"blockGap":"var:preset|spacing|60","padding":{"right":"0","left":"0"}}},"className":"fade-right","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
            <div class="wp-block-group alignwide fade-right" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--custom-color-2);border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-right:0;padding-left:0"><!-- wp:image {"id":339,"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"unset"},"layout":{"selfStretch":"fixed","flexSize":"20rem"}}} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url(get_theme_file_uri('/assets/images/beach-landscape-sea-coast-water-nature-677311-pxhere.com_-1024x533.jpg')) . '" alt="" class="wp-image-339" style="aspect-ratio:1;object-fit:cover"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"0","left":"0"}},"layout":{"selfStretch":"fixed","flexSize":"30rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30"},"padding":{"right":"0","left":"0"}}},"textColor":"custom-color-1","className":"big-titles","fontSize":"x-large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles has-custom-color-1-color has-text-color has-link-color has-tenor-sans-font-family has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30);padding-right:0;padding-left:0">Hawaii Trip</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|30"},"padding":{"right":"0","left":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"custom-color-1","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-custom-color-1-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="margin-bottom:var(--wp--preset--spacing--30);padding-right:0;padding-left:0;font-style:normal;font-weight:400">Pharetra massa massa ultricies mi quis. Et molestie ac feugiat sed lectus vestibulum mattis ullamcorper.Quis blandit turpis cursus in hac. </p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"custom-color-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-color-2","className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link has-custom-color-2-color has-text-color has-link-color has-border-color has-custom-color-2-border-color wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">Lets  go!</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:button {"className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link wp-element-button" href="/faq">View all</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'moments', 'projects', 'destinations'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'Start a new adventure (alternative)', // Unique name for your pattern
        array(
            'title'       => __('Start a new adventure (alternative)', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Alternative section introducing the website, services and features', // Description of your pattern

            'content'     => '<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"1rem","right":"1rem"},"margin":{"top":"0","bottom":"0"}},"background":{"backgroundSize":"contain","backgroundPosition":"50% 50%","backgroundRepeat":"no-repeat","backgroundImage":{"url":"' . esc_url(get_theme_file_uri('/assets/images/bg-map-1.png')) . '","id":811,"source":"file","title":"bg-map-1"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:1rem;padding-bottom:var(--wp--preset--spacing--80);padding-left:1rem"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"custom-color-2","className":"fade-up","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-text-align-center fade-up has-custom-color-2-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="margin-top:var(--wp--preset--spacing--60);font-style:normal;font-weight:500">YOUR JOURNEY</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"custom-color-1","className":"big-titles fade-up","fontSize":"x-large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles fade-up has-custom-color-1-color has-text-color has-link-color has-tenor-sans-font-family has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--60)">Start a new adventure</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|80","padding":{"right":"0","left":"0"}},"background":{"backgroundSize":"cover","backgroundRepeat":"no-repeat"},"color":{"background":"#ffffff00"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group has-background" style="background-color:#ffffff00;margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-right:0;padding-left:0"><!-- wp:group {"align":"wide","style":{"color":{"background":"#ffffff00"},"spacing":{"blockGap":"var:preset|spacing|70"}},"className":"containers-home-start","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center","verticalAlignment":"top"}} -->
            <div class="wp-block-group alignwide containers-home-start has-background" style="background-color:#ffffff00"><!-- wp:paragraph {"dropCap":true,"style":{"layout":{"selfStretch":"fixed","flexSize":"40vw"},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"24px"},"spacing":{"padding":{"right":"0","left":"0"}}},"textColor":"custom-color-1","className":"texts-home-start fade-left","fontFamily":"tenor-sans"} -->
            <p class="has-drop-cap texts-home-start fade-left has-custom-color-1-color has-text-color has-link-color has-tenor-sans-font-family" style="padding-right:0;padding-left:0;font-size:24px;font-style:normal;font-weight:400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis blandit turpis cursus in hac. Pharetra massa massa ultricies mi quis. Et molestie ac feugiat sed lectus vestibulum mattis ullamcorper. Justo eget magna fermentum iaculis eu non diam phasellus. Pellentesque id nibh tortor id. Commodo quis imperdiet massa tincidunt nunc pulvinar sapien et. Nec ultrices dui sapien eget. Turpis nunc eget lorem dolor.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"style":{"layout":{"selfStretch":"fixed","flexSize":"40vw"},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"padding":{"right":"0","left":"0"}},"typography":{"fontSize":"24px"}},"textColor":"custom-color-1","className":"texts-home-start fade-right","fontFamily":"tenor-sans"} -->
            <p class="texts-home-start fade-right has-custom-color-1-color has-text-color has-link-color has-tenor-sans-font-family" style="padding-right:0;padding-left:0;font-size:24px">Condimentum mattis pellentesque id nibh. Pellentesque habitant morbi tristique senectus et netus et. Dui sapien eget mi proin. Magna fringilla urna porttitor rhoncus dolor purus non. Mattis pellentesque id nibh tortor id aliquet lectus proin. A lacus vestibulum sed arcu non odio. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit amet. Tellus integer feugiat scelerisque varius morbi enim nunc. Mollis aliquam ut porttitor leo a. Id diam maecenas ultricies mi eget mauris pharetra et. Nec feugiat nisl pretium fusce id velit ut. </p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"align":"wide","style":{"color":{"background":"#ffffff00"},"spacing":{"blockGap":"var:preset|spacing|70"}},"className":"containers-home-start","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
            <div class="wp-block-group alignwide containers-home-start has-background" style="background-color:#ffffff00"><!-- wp:image {"width":"auto","height":"400px","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"2px","bottomRight":"2px","topRight":"50px","bottomLeft":"50px"}},"layout":{"selfStretch":"fit","flexSize":null}},"className":"is-style-rounded fade-left"} -->
            <figure class="wp-block-image size-large is-resized has-custom-border is-style-rounded fade-left"><img src="' . esc_url(get_theme_file_uri('/assets/images/home2-1024x683.jpg')) . '" alt="" style="border-top-left-radius:2px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:2px;width:auto;height:400px"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"width":"auto","height":"400px","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"50px","topRight":"2px","bottomLeft":"2px","bottomRight":"50px"}}},"className":"is-style-rounded fade-right"} -->
            <figure class="wp-block-image size-large is-resized has-custom-border is-style-rounded fade-right"><img src="' . esc_url(get_theme_file_uri('/assets/images/home1-1024x678.jpg')) . '" alt="" style="border-top-left-radius:50px;border-top-right-radius:2px;border-bottom-left-radius:2px;border-bottom-right-radius:50px;width:auto;height:400px"/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'start a new adventure', 'history', 'company'), // Keywords to help users find your pattern
        )
    );


    register_block_pattern(
        'Main home (alternative)', // Unique name for your pattern
        array(
            'title'       => __('Main home (alternative)', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Section showing alternative version of main homepage banner', // Description of your pattern

            'content'     => '<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"style":{"position":{"type":""},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
            <main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/bg-3_edited2.jpg')) . '","hasParallax":true,"dimRatio":0,"customOverlayColor":"#3a443e","style":{"spacing":{"padding":{"top":"30vh","bottom":"30vh","left":"var:preset|spacing|80","right":"var:preset|spacing|80"},"blockGap":"0"}},"layout":{"type":"default"}} -->
            <div class="wp-block-cover has-parallax" style="padding-top:30vh;padding-right:var(--wp--preset--spacing--80);padding-bottom:30vh;padding-left:var(--wp--preset--spacing--80)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#3a443e"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(' . esc_url(get_theme_file_uri('/assets/images/bg-3_edited2.jpg')) . ')"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"100px"}},"className":"title-home fade-up","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-left title-home fade-up has-tenor-sans-font-family" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-size:100px">Welcome to Journey Tourism</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"letterSpacing":"0px","textTransform":"none","fontStyle":"normal","fontWeight":"400"}},"textColor":"white","className":"fade-up","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-text-align-center fade-up has-white-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="font-style:normal;font-weight:400;letter-spacing:0px;text-transform:none">Your portal to extraordinary travel experiences</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"custom-color-2","style":{"typography":{"textTransform":"uppercase","fontSize":"24px"},"border":{"radius":"30vw"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"className":"is-style-fill fade-up","fontFamily":"tenor-sans"} -->
            <div class="wp-block-button has-custom-font-size is-style-fill fade-up has-tenor-sans-font-family" style="font-size:24px;text-transform:uppercase"><a class="wp-block-button__link has-custom-color-2-background-color has-background has-text-align-center wp-element-button" href="/services" style="border-radius:30vw;padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">Lets go</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div></div>
            <!-- /wp:cover --></main>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'main', 'home'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'Destinations content (alternative)', // Unique name for your pattern
        array(
            'title'       => __('Destinations content (alternative)', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Alternative section showing the destinations offered', // Description of your pattern

            'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80","padding":{"right":"0","left":"0"}}},"className":"fade-up","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
            <div class="wp-block-group fade-up" style="padding-right:0;padding-left:0"><!-- wp:image {"id":338,"aspectRatio":"1","scale":"cover","style":{"layout":{"selfStretch":"fixed","flexSize":"20rem"}}} -->
            <figure class="wp-block-image"><img src="' . esc_url(get_theme_file_uri('/assets/images/water-ocean-horizon-architecture-skyline-night-680951-pxhere.com_-edited-scaled.jpg')) . '" alt="" class="wp-image-338" style="aspect-ratio:1;object-fit:cover"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"right":"var:preset|spacing|30","left":"0"},"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-left has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">Dubai</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"custom-color-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-color-2","className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link has-custom-color-2-color has-text-color has-link-color has-border-color has-custom-color-2-border-color wp-element-button" href="/destinations/dubai" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">See details</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">$200</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"small","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-small-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none"><sup>for day</sup></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80","padding":{"right":"0","left":"0"}}},"className":"fade-up","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
            <div class="wp-block-group fade-up" style="padding-right:0;padding-left:0"><!-- wp:image {"id":339,"aspectRatio":"1","scale":"cover","style":{"layout":{"selfStretch":"fixed","flexSize":"20rem"}}} -->
            <figure class="wp-block-image"><img src="' . esc_url(get_theme_file_uri('/assets/images/beach-landscape-sea-coast-water-nature-677311-pxhere.com_-scaled.jpg')) . '" alt="" class="wp-image-339" style="aspect-ratio:1;object-fit:cover"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"right":"var:preset|spacing|30","left":"0","bottom":"0"},"margin":{"bottom":"var:preset|spacing|40"}},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:0"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-left has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">Hawaii</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"custom-color-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-color-2","className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link has-custom-color-2-color has-text-color has-link-color has-border-color has-custom-color-2-border-color wp-element-button" href="/destinations/hawaii" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">See details</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">$170</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"smallbig","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-smallbig-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none"><sup>for day</sup></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80","padding":{"right":"0","left":"0"}}},"className":"fade-up","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
            <div class="wp-block-group fade-up" style="padding-right:0;padding-left:0"><!-- wp:image {"id":112,"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"20rem"}}} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url(get_theme_file_uri('/assets/images/netherlands1.jpg')) . '" alt="" class="wp-image-112" style="aspect-ratio:1;object-fit:cover"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"right":"var:preset|spacing|30","left":"0"},"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-left has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">Amsterdam</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"custom-color-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-color-2","className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link has-custom-color-2-color has-text-color has-link-color has-border-color has-custom-color-2-border-color wp-element-button" href="/destinations/hawaii" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">See details</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">$120</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"small","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-small-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none"><sup>for day</sup></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80","padding":{"right":"0","left":"0"}}},"className":"fade-up","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
            <div class="wp-block-group fade-up" style="padding-right:0;padding-left:0"><!-- wp:image {"id":130,"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"20rem"}}} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url(get_theme_file_uri('/assets/images/japan1.jpg')) . '" alt="" class="wp-image-130" style="aspect-ratio:1;object-fit:cover"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"right":"var:preset|spacing|30","left":"0"},"margin":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-left has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">Kanagawa</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"custom-color-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-color-2","className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link has-custom-color-2-color has-text-color has-link-color has-border-color has-custom-color-2-border-color wp-element-button" href="/destinations/hawaii" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">See details</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">$110</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"small","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-small-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none"><sup>for day</sup></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80","padding":{"right":"0","left":"0"}}},"className":"fade-up","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
            <div class="wp-block-group fade-up" style="padding-right:0;padding-left:0"><!-- wp:image {"id":109,"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"20rem"}}} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url(get_theme_file_uri('/assets/images/colombia1.jpeg')) . '" alt="" class="wp-image-109" style="aspect-ratio:1;object-fit:cover"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"right":"var:preset|spacing|30","left":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-left has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">Medellín</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"textColor":"custom-color-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"borderColor":"custom-color-2","className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link has-custom-color-2-color has-text-color has-link-color has-border-color has-custom-color-2-border-color wp-element-button" href="/destinations/hawaii" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">See details</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
            <div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-large-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">$80</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"right","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"small","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-right has-tenor-sans-font-family has-small-font-size" style="padding-right:0;padding-left:0;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none"><sup>for day</sup></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'destinations', 'projects'), // Keywords to help users find your pattern
        )
    );


    register_block_pattern(
        'Destinations title', // Unique name for your pattern
        array(
            'title'       => __('Destinations title', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Section that introduces the destinations section', // Description of your pattern

            'content'     => '<!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/horizon-wing-sky-atmosphere-flying-airplane-1245082-pxhere.com_-scaled.jpg')) . '","id":330,"hasParallax":true,"dimRatio":50,"overlayColor":"vivid-cyan-blue","isUserOverlayColor":true,"minHeight":20,"minHeightUnit":"rem","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
            <div class="wp-block-cover has-parallax" style="min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-vivid-cyan-blue-background-color has-background-dim"></span><div class="wp-block-cover__image-background wp-image-330 has-parallax" style="background-position:50% 50%;background-image:url(' . esc_url(get_theme_file_uri('/assets/images/horizon-wing-sky-atmosphere-flying-airplane-1245082-pxhere.com_-scaled.jpg')) . ')"></div><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"className":"fade-up","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-text-align-center fade-up has-roboto-font-family has-smallbig-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.18px;text-transform:uppercase">its time</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:post-title {"textAlign":"center","className":"title-home fade-up","fontSize":"x-large"} /-->
            
            <!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"none","fontSize":"18px","fontStyle":"normal","fontWeight":"400"}},"className":"fade-up","fontFamily":"roboto"} -->
            <p class="has-text-align-center fade-up has-roboto-font-family" style="font-size:18px;font-style:normal;font-weight:400;letter-spacing:0.18px;text-transform:none">Choose the place and relax, because we will take care of the rest!</p>
            <!-- /wp:paragraph --></div></div>
            <!-- /wp:cover -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'destinations', 'destinations title'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'Posts Blog', // Unique name for your pattern
        array(
            'title'       => __('Posts Blog', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Section with all blog posts', // Description of your pattern

            'content'     => '<!-- wp:query {"queryId":9,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"core/posts-list","layout":{"type":"default"}} -->
            <div class="wp-block-query"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
            <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"className":"container-blog fade-up","layout":{"type":"constrained"}} -->
            <div class="wp-block-group container-blog fade-up" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","width":"40rem","height":"15rem","overlayColor":"custom-color-3","style":{"color":{"duotone":"unset"},"layout":{"selfStretch":"fit","flexSize":null}},"className":"imgs-blog"} /-->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"},"padding":{"right":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}}},"textColor":"custom-color-1","className":"container-texts-blog","layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group container-texts-blog has-custom-color-1-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);padding-right:0;padding-left:0"><!-- wp:post-title {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","className":"big-titles","fontSize":"large"} /-->
            
            <!-- wp:post-excerpt {"excerptLength":25,"fontSize":"smallbig"} /-->
            
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:post-date {"fontSize":"smallbig"} /-->
            
            <!-- wp:read-more {"content":"Read more","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}}},"textColor":"custom-color-2","fontSize":"smallbig","fontFamily":"roboto"} /--></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
            
            <!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}}},"textColor":"custom-color-2","layout":{"type":"flex","justifyContent":"center"}} -->
            <!-- wp:query-pagination-previous {"style":{"typography":{"fontSize":"30px"}},"fontFamily":"roboto"} /-->
            
            <!-- wp:query-pagination-numbers {"style":{"typography":{"fontSize":"16px"}}} /-->
            
            <!-- wp:query-pagination-next {"style":{"typography":{"fontSize":"30px"}}} /-->
            <!-- /wp:query-pagination -->
            
            <!-- wp:query-no-results -->
            <!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results.","style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}}},"textColor":"custom-color-2","fontSize":"medium","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center has-custom-color-2-color has-text-color has-link-color has-tenor-sans-font-family has-medium-font-size" style="font-style:normal;font-weight:600">We still dont have any new adventures here</p>
            <!-- /wp:paragraph -->
            <!-- /wp:query-no-results --></div>
            <!-- /wp:query -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'posts', 'blog'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'About Us', // Unique name for your pattern
        array(
            'title'       => __('About Us', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Section introducing about us section', // Description of your pattern

            'content'     => '<!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/about.jpeg')) . '","id":236,"hasParallax":true,"isRepeated":true,"dimRatio":40,"overlayColor":"custom-color-1","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":1},"minHeight":20,"minHeightUnit":"rem","contentPosition":"center center","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
            <div class="wp-block-cover alignfull has-parallax is-repeated" style="margin-top:0;margin-bottom:0;min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-1-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__image-background wp-image-236 has-parallax is-repeated" style="background-position:50% 100%;background-image:url(' . esc_url(get_theme_file_uri('/assets/images/about.jpeg')) . ')"></div><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"textTransform":"uppercase","letterSpacing":"0.18px"},"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"textColor":"white","className":"fade-up","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-text-align-center fade-up has-white-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);letter-spacing:0.18px;text-transform:uppercase">get to know us</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:post-title {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"fade-up","fontSize":"x-large"} /--></div></div>
            <!-- /wp:cover -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'about us'), // Keywords to help users find your pattern
        )
    );
    
    register_block_pattern(
        'Memories', // Unique name for your pattern
        array(
            'title'       => __('Memories', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Photo gallery section', // Description of your pattern

            'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"background":{"backgroundImage":{"url":"' . esc_url(get_theme_file_uri('/assets/images/bg-map-1.png')) . '","id":811,"source":"file","title":"bg-map-1"},"backgroundRepeat":"no-repeat","backgroundSize":"contain"}},"backgroundColor":"custom-color-3","layout":{"type":"default"}} -->
            <div class="wp-block-group alignfull has-custom-color-3-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"custom-color-2","className":"fade-up","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-text-align-center fade-up has-custom-color-2-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:500;text-transform:uppercase">registered</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"custom-color-1","className":"big-titles fade-up","fontSize":"x-large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles fade-up has-custom-color-1-color has-text-color has-link-color has-tenor-sans-font-family has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--60)">Memories</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
            <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:gallery {"randomOrder":true,"linkTarget":"_blank","linkTo":"attachment","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
            <figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"id":373,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/home2-edited-1-scaled.jpg')) . '" alt="" class="wp-image-373"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":339,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/beach-landscape-sea-coast-water-nature-677311-pxhere.com_-1024x533.jpg')) . '" alt="" class="wp-image-339"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":338,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/water-ocean-horizon-architecture-skyline-night-680951-pxhere.com_-edited-scaled.jpg')) . '" alt="" class="wp-image-338"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":334,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/landscape-architecture-skyline-night-city-skyscraper-1031655-pxhere.com_-scaled.jpg')) . '" alt="" class="wp-image-334"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":308,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/services2-edited.jpg')) . '" alt="" class="wp-image-308"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":291,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/bg-services-scaled.jpg')) . '" alt="" class="wp-image-291"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":267,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/home1-1024x678.jpg')) . '" alt="" class="wp-image-267"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":217,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/southafrica1.jpg')) . '" alt="" class="wp-image-217"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":216,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/southafrica2.jpg')) . '" alt="" class="wp-image-216"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":130,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/japan1.jpg')) . '" alt="" class="wp-image-130"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":220,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/australia2-scaled.jpg')) . '" alt="" class="wp-image-220"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":221,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/australia1.jpg')) . '" alt="" class="wp-image-221"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":236,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/about.jpeg')) . '" alt="" class="wp-image-236"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":128,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/japan2.jpg')) . '" alt="" class="wp-image-128"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":124,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/colombia1-1.jpeg')) . '" alt="" class="wp-image-124"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":129,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/japan3.jpg')) . '" alt="" class="wp-image-129"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":111,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/netherlands2.jpg')) . '" alt="" class="wp-image-111"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":23,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/bg-3_edited-Copia.jpg')) . '" alt="" class="wp-image-23"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":108,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/colombia2.jpg')) . '" alt="" class="wp-image-108"/></a></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":109,"sizeSlug":"large","linkDestination":"attachment"} -->
            <figure class="wp-block-image size-large"><a href="#" target="_blank" rel="noopener"><img src="' . esc_url(get_theme_file_uri('/assets/images/colombia1.jpeg')) . '" alt="" class="wp-image-109"/></a></figure>
            <!-- /wp:image --></figure>
            <!-- /wp:gallery --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'memories', 'gallery'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'Common Questions', // Unique name for your pattern
        array(
            'title'       => __('Common Questions', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Common Questions Section', // Description of your pattern

            'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"0","right":"0"},"blockGap":"0"},"background":{"backgroundImage":{"url":"' . esc_url(get_theme_file_uri('/assets/images/line-black-1-1.png')) . '","id":800,"source":"file","title":"line-black-1-1"},"backgroundRepeat":"no-repeat","backgroundSize":"contain"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"textColor":"custom-color-2","className":"fade-up","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-text-align-center fade-up has-custom-color-2-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase">common</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"custom-color-1","className":"big-titles fade-up","fontSize":"x-large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles fade-up has-custom-color-1-color has-text-color has-link-color has-tenor-sans-font-family has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--60)">Quesions</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|60"}},"className":"fade-up","layout":{"type":"default"}} -->
            <div class="wp-block-group alignwide fade-up" style="margin-bottom:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:details {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"width":"2px"},"color":{"background":"#ffffffd1"}},"borderColor":"custom-color-2","textColor":"custom-color-2","fontSize":"medium","fontFamily":"tenor-sans"} -->
            <details class="wp-block-details alignwide has-border-color has-custom-color-2-border-color has-custom-color-2-color has-text-color has-background has-link-color has-tenor-sans-font-family has-medium-font-size" style="border-width:2px;background-color:#ffffffd1;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><summary>What is the cost of a trip?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"typography":{"letterSpacing":"0.18px","fontStyle":"normal","fontWeight":"400"}},"textColor":"custom-color-1","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-custom-color-1-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="font-style:normal;font-weight:400;letter-spacing:0.18px">Risus sed vulputate odio ut. Nascetur ridiculus mus mauris vitae ultricies leo integer malesuada nunc. Ac turpis egestas maecenas pharetra convallis posuere morbi leo urna.&nbsp;</p>
            <!-- /wp:paragraph --></details>
            <!-- /wp:details -->
            
            <!-- wp:details {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"width":"2px"},"color":{"background":"#ffffffd1"}},"borderColor":"custom-color-2","textColor":"custom-color-2","fontSize":"medium","fontFamily":"tenor-sans"} -->
            <details class="wp-block-details alignwide has-border-color has-custom-color-2-border-color has-custom-color-2-color has-text-color has-background has-link-color has-tenor-sans-font-family has-medium-font-size" style="border-width:2px;background-color:#ffffffd1;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><summary>How hosting works?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"typography":{"letterSpacing":"0.18px","fontStyle":"normal","fontWeight":"400"}},"textColor":"custom-color-1","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-custom-color-1-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="font-style:normal;font-weight:400;letter-spacing:0.18px">Risus sed vulputate odio ut. Nascetur ridiculus mus mauris vitae ultricies leo integer malesuada nunc. Ac turpis egestas maecenas pharetra convallis posuere morbi leo urna.&nbsp;</p>
            <!-- /wp:paragraph --></details>
            <!-- /wp:details -->
            
            <!-- wp:details {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"width":"2px"},"color":{"background":"#ffffffd1"}},"borderColor":"custom-color-2","textColor":"custom-color-2","fontSize":"medium","fontFamily":"tenor-sans"} -->
            <details class="wp-block-details alignwide has-border-color has-custom-color-2-border-color has-custom-color-2-color has-text-color has-background has-link-color has-tenor-sans-font-family has-medium-font-size" style="border-width:2px;background-color:#ffffffd1;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><summary>Am I entitled to all services?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"typography":{"letterSpacing":"0.18px","fontStyle":"normal","fontWeight":"400"}},"textColor":"custom-color-1","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-custom-color-1-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="font-style:normal;font-weight:400;letter-spacing:0.18px">Risus sed vulputate odio ut. Nascetur ridiculus mus mauris vitae ultricies leo integer malesuada nunc. Ac turpis egestas maecenas pharetra convallis posuere morbi leo urna.&nbsp;</p>
            <!-- /wp:paragraph --></details>
            <!-- /wp:details --></div>
            <!-- /wp:group -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--80)"><!-- wp:button {"className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link wp-element-button" href="/faq">View all</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'common questions', 'faq'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'Start a new adventure', // Unique name for your pattern
        array(
            'title'       => __('Start a new adventure', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Section introducing the website, services and features', // Description of your pattern

            'content'     => '<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"1rem","right":"1rem"},"margin":{"top":"0","bottom":"0"}},"background":{"backgroundSize":"contain","backgroundPosition":"50% 50%","backgroundRepeat":"no-repeat","backgroundImage":{"url":"' . esc_url(get_theme_file_uri('/assets/images/bg-map-1.png')) . '","id":811,"source":"file","title":"bg-map-1"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:1rem;padding-bottom:var(--wp--preset--spacing--80);padding-left:1rem"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"custom-color-2","className":"fade-up","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-text-align-center fade-up has-custom-color-2-color has-text-color has-link-color has-roboto-font-family has-smallbig-font-size" style="margin-top:var(--wp--preset--spacing--60);font-style:normal;font-weight:500">YOUR JOURNEY</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"custom-color-1","className":"big-titles fade-up","fontSize":"x-large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center big-titles fade-up has-custom-color-1-color has-text-color has-link-color has-tenor-sans-font-family has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--60)">Start a new adventure</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|80","padding":{"right":"0","left":"0"}},"background":{"backgroundSize":"cover","backgroundRepeat":"no-repeat"},"color":{"background":"#ffffff00"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group has-background" style="background-color:#ffffff00;margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-right:0;padding-left:0"><!-- wp:group {"align":"wide","style":{"color":{"background":"#ffffff00"},"spacing":{"blockGap":"var:preset|spacing|70"}},"className":"containers-home-start","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
            <div class="wp-block-group alignwide containers-home-start has-background" style="background-color:#ffffff00"><!-- wp:paragraph {"dropCap":true,"style":{"layout":{"selfStretch":"fixed","flexSize":"40vw"},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"24px"},"spacing":{"padding":{"right":"0","left":"0"}}},"textColor":"custom-color-1","className":"texts-home-start fade-left","fontFamily":"tenor-sans"} -->
            <p class="has-drop-cap texts-home-start fade-left has-custom-color-1-color has-text-color has-link-color has-tenor-sans-font-family" style="padding-right:0;padding-left:0;font-size:24px;font-style:normal;font-weight:400">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis blandit turpis cursus in hac. Pharetra massa massa ultricies mi quis. Et molestie ac feugiat sed lectus vestibulum mattis ullamcorper. Justo eget magna fermentum iaculis eu non diam phasellus. Pellentesque id nibh tortor id. Commodo quis imperdiet massa tincidunt nunc pulvinar sapien et. Nec ultrices dui sapien eget. Turpis nunc eget lorem dolor.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:image {"width":"auto","height":"400px","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"50px","topRight":"2px","bottomLeft":"2px","bottomRight":"50px"}}},"className":"is-style-rounded fade-right"} -->
            <figure class="wp-block-image size-large is-resized has-custom-border is-style-rounded fade-right"><img src="' . esc_url(get_theme_file_uri('/assets/images/home1-1024x678.jpg')) . '" alt="" style="border-top-left-radius:50px;border-top-right-radius:2px;border-bottom-left-radius:2px;border-bottom-right-radius:50px;width:auto;height:400px"/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"align":"wide","style":{"color":{"background":"#ffffff00"},"spacing":{"blockGap":"var:preset|spacing|70"}},"className":"containers-home-start","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
            <div class="wp-block-group alignwide containers-home-start has-background" style="background-color:#ffffff00"><!-- wp:image {"width":"auto","height":"400px","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"2px","bottomRight":"2px","topRight":"50px","bottomLeft":"50px"}},"layout":{"selfStretch":"fit","flexSize":null}},"className":"is-style-rounded fade-left"} -->
            <figure class="wp-block-image size-large is-resized has-custom-border is-style-rounded fade-left"><img src="' . esc_url(get_theme_file_uri('/assets/images/home2-1024x683.jpg')) . '" alt="" style="border-top-left-radius:2px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:2px;width:auto;height:400px"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:paragraph {"style":{"layout":{"selfStretch":"fixed","flexSize":"40vw"},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}},"spacing":{"padding":{"right":"0","left":"0"}},"typography":{"fontSize":"24px"}},"textColor":"custom-color-1","className":"texts-home-start fade-right","fontFamily":"tenor-sans"} -->
            <p class="texts-home-start fade-right has-custom-color-1-color has-text-color has-link-color has-tenor-sans-font-family" style="padding-right:0;padding-left:0;font-size:24px">Condimentum mattis pellentesque id nibh. Pellentesque habitant morbi tristique senectus et netus et. Dui sapien eget mi proin. Magna fringilla urna porttitor rhoncus dolor purus non. Mattis pellentesque id nibh tortor id aliquet lectus proin. A lacus vestibulum sed arcu non odio. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit amet. Tellus integer feugiat scelerisque varius morbi enim nunc. Mollis aliquam ut porttitor leo a. Id diam maecenas ultricies mi eget mauris pharetra et. Nec feugiat nisl pretium fusce id velit ut. </p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'start a new adventure', 'history', 'company'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'Categories section', // Unique name for your pattern
        array(
            'title'       => __('Categories section', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Section showing posts filtered by categories', // Description of your pattern

            'content'     => '<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"style":{"border":{"radius":"0px","width":"0px","style":"none"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
            <main class="wp-block-group" style="border-style:none;border-width:0px;border-radius:0px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:query {"queryId":41,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"full","layout":{"type":"constrained","wideSize":"80vw"}} -->
            <div class="wp-block-query alignfull"><!-- wp:post-template {"align":"full"} -->
            <!-- wp:columns {"verticalAlignment":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}}},"textColor":"custom-color-1","className":"fade-left"} -->
            <div class="wp-block-columns are-vertically-aligned-center fade-left has-custom-color-1-color has-text-color has-link-color"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:post-featured-image {"isLink":true,"height":"15em"} /--></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:post-title {"isLink":true,"className":"big-titles"} /--></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            <!-- /wp:post-template --></div>
            <!-- /wp:query --></main>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'categories', 'posts'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'Category title', // Unique name for your pattern
        array(
            'title'       => __('Category title', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Section that introduces the category-filtered posts section', // Description of your pattern

            'content'     => '<!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/southafrica2.jpg')) . '","id":216,"hasParallax":true,"dimRatio":50,"overlayColor":"vivid-cyan-blue","isUserOverlayColor":true,"minHeight":20,"minHeightUnit":"rem","contentPosition":"center center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"default-first-block","layout":{"type":"default"}} -->
            <div class="wp-block-cover has-parallax default-first-block" style="min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-vivid-cyan-blue-background-color has-background-dim"></span><div class="wp-block-cover__image-background wp-image-216 has-parallax" style="background-position:50% 50%;background-image:url(' . esc_url(get_theme_file_uri('/assets/images/southafrica2.jpg')) . ')"></div><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"letterSpacing":"0.18px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"className":"fade-up","fontSize":"smallbig","fontFamily":"roboto"} -->
            <p class="has-text-align-center fade-up has-roboto-font-family has-smallbig-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.18px;text-transform:uppercase">the best about</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:post-terms {"term":"category","textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-3"}}},"typography":{"letterSpacing":"0.15px"},"spacing":{"padding":{"top":"0.2rem","bottom":"0.2rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"textColor":"custom-color-3","className":"title-home fade-up","fontSize":"x-large","fontFamily":"tenor-sans"} /--></div></div>
            <!-- /wp:cover -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'categories', 'categories title'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'Categories (alternative)', // Unique name for your pattern
        array(
            'title'       => __('Categories (alternative)', 'journey-turism'), // Title displayed in the block editor
            'description' => 'Alternative version of the categories section', // Description of your pattern

            'content'     => '<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}},"className":"marquee marquee-alternative","layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group marquee marquee-alternative" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/colombia1-1.jpeg')) . '","dimRatio":40,"overlayColor":"custom-color-1","isUserOverlayColor":true,"minHeight":20,"minHeightUnit":"rem","style":{"layout":{"selfStretch":"fixed","flexSize":"20rem"},"color":{"duotone":"var:preset|duotone|dark-grayscale"},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"className":"marquees","layout":{"type":"default"}} -->
            <div class="wp-block-cover marquees" style="margin-top:0;margin-bottom:0;min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-1-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/colombia1-1.jpeg')) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-3"}}}},"textColor":"custom-color-3","fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center has-custom-color-3-color has-text-color has-link-color has-tenor-sans-font-family has-large-font-size">America</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link wp-element-button" href="/category/america" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">Read more</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover -->
            
            <!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/southafrica1.jpg')) . '","dimRatio":40,"overlayColor":"custom-color-1","isUserOverlayColor":true,"focalPoint":{"x":0.76,"y":0.44},"minHeight":20,"minHeightUnit":"rem","style":{"layout":{"selfStretch":"fixed","flexSize":"20rem"},"color":{"duotone":"var:preset|duotone|dark-grayscale"},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"className":"marquees","layout":{"type":"default"}} -->
            <div class="wp-block-cover marquees" style="margin-top:0;margin-bottom:0;min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-1-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/southafrica1.jpg')) . '" style="object-position:76% 44%" data-object-fit="cover" data-object-position="76% 44%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-3"}}}},"textColor":"custom-color-3","fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center has-custom-color-3-color has-text-color has-link-color has-tenor-sans-font-family has-large-font-size">Africa</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link wp-element-button" href="/category/africa" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">Read more</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover -->
            
            <!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/japan1.jpg')) . '","dimRatio":40,"overlayColor":"custom-color-1","isUserOverlayColor":true,"minHeight":20,"minHeightUnit":"rem","style":{"layout":{"selfStretch":"fixed","flexSize":"20rem"},"color":{"duotone":"var:preset|duotone|dark-grayscale"},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"className":"marquees","layout":{"type":"default"}} -->
            <div class="wp-block-cover marquees" style="margin-top:0;margin-bottom:0;min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-1-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/japan1.jpg')) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-3"}}}},"textColor":"custom-color-3","fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center has-custom-color-3-color has-text-color has-link-color has-tenor-sans-font-family has-large-font-size">Asia</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link wp-element-button" href="/category/asia" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">Read more</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover -->
            
            <!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/australia1.jpg')) . '","dimRatio":40,"overlayColor":"custom-color-1","isUserOverlayColor":true,"minHeight":20,"minHeightUnit":"rem","style":{"layout":{"selfStretch":"fixed","flexSize":"20rem"},"color":{"duotone":"var:preset|duotone|dark-grayscale"},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"className":"marquees","layout":{"type":"default"}} -->
            <div class="wp-block-cover marquees" style="margin-top:0;margin-bottom:0;min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-1-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/australia1.jpg')) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-3"}}}},"textColor":"custom-color-3","fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center has-custom-color-3-color has-text-color has-link-color has-tenor-sans-font-family has-large-font-size">Oceania</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link wp-element-button" href="/category/oceania" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">Read more</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover -->
            
            <!-- wp:cover {"url":"' . esc_url(get_theme_file_uri('/assets/images/netherlands1.jpg')) . '","dimRatio":40,"overlayColor":"custom-color-1","isUserOverlayColor":true,"minHeight":20,"minHeightUnit":"rem","style":{"layout":{"selfStretch":"fixed","flexSize":"20rem"},"color":{"duotone":"var:preset|duotone|dark-grayscale"},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"className":"marquees","layout":{"type":"default"}} -->
            <div class="wp-block-cover marquees" style="margin-top:0;margin-bottom:0;min-height:20rem"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-1-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url(get_theme_file_uri('/assets/images/netherlands1.jpg')) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-3"}}}},"textColor":"custom-color-3","fontSize":"large","fontFamily":"tenor-sans"} -->
            <p class="has-text-align-center has-custom-color-3-color has-text-color has-link-color has-tenor-sans-font-family has-large-font-size">Europe</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"is-style-outline","fontSize":"smallbig","fontFamily":"roboto"} -->
            <div class="wp-block-button has-custom-font-size is-style-outline has-roboto-font-family has-smallbig-font-size"><a class="wp-block-button__link wp-element-button" href="/category/europe" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)">Read more</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div></div>
            <!-- /wp:cover --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('pro-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my', 'categories', 'posts'), // Keywords to help users find your pattern
        )
    );

}

add_action('init', 'journeytourismpro_custom_register_block_patterns');
