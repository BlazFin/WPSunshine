<?php
/**
 * Title: Banner With Header
 * Slug: bizcanvas/banner-with-header
 * Categories: bizcanvas
 * Keywords: banner-with-header
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/bannerbg.jpg","id":200,"dimRatio":90,"overlayColor":"black","isUserOverlayColor":true,"focalPoint":{"x":0.76,"y":0},"minHeight":650,"contentPosition":"top center","metadata":{"name":"Banner"},"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"banner","layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-center banner" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-200" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/bannerbg.jpg" style="object-position:76% 0%" data-object-fit="cover" data-object-position="76% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div id="sticky-header" class="wp-block-group" style="padding-top:15px;padding-right:var(--wp--preset--spacing--20);padding-bottom:15px;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-title {"style":{"typography":{"fontSize":"32px"}}} /-->

<!-- wp:navigation {"icon":"menu","overlayBackgroundColor":"contrast","overlayTextColor":"white-text-color","layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"35px"}}} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"dark-text-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-text-color"}}},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"8px","bottom":"8px"}},"border":{"radius":"25px"}},"className":"is-style-fill has-icon-before"} -->
<div class="wp-block-button is-style-fill has-icon-before"><a class="wp-block-button__link has-dark-text-color-color has-white-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:25px;padding-top:8px;padding-right:var(--wp--preset--spacing--30);padding-bottom:8px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Get in touch ', 'bizcanvas' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"48px"},"elements":{"link":{"color":{"text":"var:preset|color|white-text-color"}}}},"textColor":"white-text-color"} -->
<h1 class="wp-block-heading has-white-text-color-color has-text-color has-link-color" style="font-size:48px"><?php echo esc_html__( 'Ready to take your', 'bizcanvas' ); ?><br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php echo esc_html__( 'Business Growth', 'bizcanvas' ); ?></mark><br><?php echo esc_html__( 'to the next level?', 'bizcanvas' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|white-text-color"}}}},"textColor":"white-text-color"} -->
<p class="has-white-text-color-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit- et ut massa libero egestas malesuada viverra gravida libero cursus nulla leo pulvinar.', 'bizcanvas' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"10px","bottom":"10px"}},"border":{"radius":"25px"}},"className":"has-icon-before"} -->
<div class="wp-block-button has-icon-before"><a class="wp-block-button__link has-white-background-color has-background wp-element-button" style="border-radius:25px;padding-top:10px;padding-right:var(--wp--preset--spacing--30);padding-bottom:10px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Start your Free Trial', 'bizcanvas' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"18px"}},"textColor":"primary"} -->
<h3 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-size:18px"><?php echo esc_html__( 'Trusted by Leading Brands', 'bizcanvas' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"15px","bottom":"0"},"blockGap":"var:preset|spacing|10","padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:15px;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:image {"id":17,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/logo.png" alt="" class="wp-image-17"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":16,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/logo.png" alt="" class="wp-image-16"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":15,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/logo.png" alt="" class="wp-image-15"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":14,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/logo.png" alt="" class="wp-image-14"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"border":{"radius":"100%","width":"2px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"borderColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-primary-border-color" style="border-width:2px;border-radius:100%;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:image {"lightbox":{"enabled":true},"id":283,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100%","color":"#717070","width":"1px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.png" alt="" class="has-border-color wp-image-283" style="border-color:#717070;border-width:1px;border-radius:100%"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->