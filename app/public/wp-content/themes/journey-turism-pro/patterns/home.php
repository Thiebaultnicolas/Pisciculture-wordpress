<?php
/**
 * Title: home
 * Slug: journey-turism/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/bg-3_edited-1.jpg","hasParallax":true,"dimRatio":80,"overlayColor":"custom-color-3","isUserOverlayColor":true,"minHeight":15,"minHeightUnit":"rem","isDark":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light has-parallax" style="margin-top:0;margin-bottom:0;min-height:15rem"><span aria-hidden="true" class="wp-block-cover__background has-custom-color-3-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url('<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/bg-3_edited-1.jpg')"></div><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-large","fontFamily":"tenor-sans"} -->
<p class="has-text-align-center has-tenor-sans-font-family has-x-large-font-size" style="font-style:normal;font-weight:700">Blog</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/line-black-1-1.png","id":800,"source":"file","title":"line-black-1-1"},"backgroundSize":"contain"}},"backgroundColor":"custom-color-3","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"top"}} -->
<main class="wp-block-group has-custom-color-3-background-color has-background" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"group"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","className":"container-blog","layout":{"type":"constrained"}} -->
<div class="wp-block-group container-blog has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:query {"queryId":9,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"core/posts-list","layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}},"className":"container-blog fade-up","layout":{"type":"constrained"}} -->
<div class="wp-block-group container-blog fade-up" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","width":"40rem","height":"15rem","overlayColor":"custom-color-3","style":{"color":{"duotone":"unset"},"layout":{"selfStretch":"fit","flexSize":null}},"className":"imgs-blog"} /-->

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
<p class="has-text-align-center has-custom-color-2-color has-text-color has-link-color has-tenor-sans-font-family has-medium-font-size" style="font-style:normal;font-weight:600">We still don't have any new adventures here</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer","className":"default-footer"} /-->