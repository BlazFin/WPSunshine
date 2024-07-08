<?php
/**
 * Title: CTA
 * Slug: bizcanvas/cta
 * Categories: bizcanvas
 * Keywords: call to action
 */
?>
<!-- wp:group {"metadata":{"name":"CTA"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"var:preset|spacing|50","right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/images/bannerbg.jpg","id":200,"dimRatio":90,"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":250,"style":{"border":{"radius":"25px"}},"className":"wow animate__animated animate__slideInUp"} -->
<div class="wp-block-cover wow animate__animated animate__slideInUp" style="border-radius:25px;min-height:250px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-200" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/bannerbg.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"32px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:32px"><?php echo esc_html__( 'Enough talk, let’s get to work', 'bizcanvas' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"10px","bottom":"10px"}},"border":{"radius":"25px"}},"className":"has-icon-before"} -->
<div class="wp-block-button has-icon-before"><a class="wp-block-button__link has-white-background-color has-background wp-element-button" style="border-radius:25px;padding-top:10px;padding-right:var(--wp--preset--spacing--30);padding-bottom:10px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Start your Free Trial', 'bizcanvas' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->