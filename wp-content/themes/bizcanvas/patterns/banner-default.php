<?php
/**
 * Title: Banner Default
 * Slug: bizcanvas/banner-default
 * Categories: bizcanvas
 * Keywords: banner-default
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/bannerbg.jpg","id":200,"dimRatio":90,"overlayColor":"black","isUserOverlayColor":true,"focalPoint":{"x":0.76,"y":0},"minHeight":650,"contentPosition":"center center","metadata":{"name":"Banner"},"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"banner","layout":{"type":"default"}} -->
<div class="wp-block-cover banner" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-200" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/bannerbg.jpg" style="object-position:76% 0%" data-object-fit="cover" data-object-position="76% 0%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"920px"}} -->
<div class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"48px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color" style="font-size:48px"><?php echo esc_html__( 'Ready to take your ', 'bizcanvas' ); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color"><?php echo esc_html__( 'Business Growth', 'bizcanvas' ); ?></mark><br><?php echo esc_html__( 'to the next level?', 'bizcanvas' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit- et ut massa libero egestas malesuada viverra gravida libero cursus nulla leo pulvinar.', 'bizcanvas' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"dark-text-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"10px","bottom":"10px"}},"border":{"radius":"25px"},"elements":{"link":{"color":{"text":"var:preset|color|dark-text-color"}}}},"className":"has-icon-before"} -->
<div class="wp-block-button has-icon-before"><a class="wp-block-button__link has-dark-text-color-color has-white-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:25px;padding-top:10px;padding-right:var(--wp--preset--spacing--30);padding-bottom:10px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Start your Free Trial', 'bizcanvas' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"primary","textColor":"button-hover-text-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"10px","bottom":"10px"}},"border":{"radius":"25px"},"elements":{"link":{"color":{"text":"var:preset|color|button-hover-text-color"}}}},"className":"has-icon-before"} -->
<div class="wp-block-button has-icon-before"><a class="wp-block-button__link has-button-hover-text-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:25px;padding-top:10px;padding-right:var(--wp--preset--spacing--30);padding-bottom:10px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Contact Us', 'bizcanvas' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->