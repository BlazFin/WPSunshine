<?php
/**
 * Title: Contact
 * Slug: bizcanvas/contact
 * Categories: bizcanvas
 * Keywords: contact
 */
?>
<!-- wp:group {"tagName":"main","metadata":{"name":"Contact"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"backgroundColor":"contrast","className":"wow animate__animated animate__slideInUp","layout":{"type":"constrained"}} -->
<div class="wp-block-group wow animate__animated animate__slideInUp has-contrast-background-color has-background" style="border-radius:8px;margin-top:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontSize":"48px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color" style="font-size:48px"><?php echo esc_html__( "Let's Talk", 'bizcanvas' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit- et ut massa libero egestas malesuada viverra gravida libero cursus nulla leo pulvinar.', 'bizcanvas' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"id":23,"width":"26px","height":"auto","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#fff"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/email.png" alt="" class="wp-image-23" style="object-fit:cover;width:26px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-text-color"}}},"typography":{"fontSize":"16px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"white-text-color"} -->
<h3 class="wp-block-heading has-white-text-color-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:16px"><?php echo esc_html__( 'info@example.com', 'bizcanvas' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"id":22,"width":"26px","height":"auto","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#fff"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/phone.png" alt="" class="wp-image-22" style="object-fit:cover;width:26px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-text-color"}}},"typography":{"fontSize":"16px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"white-text-color"} -->
<h3 class="wp-block-heading has-white-text-color-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:16px"><?php echo esc_html__( '+01-123-4567', 'bizcanvas' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"id":21,"width":"26px","height":"auto","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#fff"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/map.png" alt="" class="wp-image-21" style="object-fit:cover;width:26px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-text-color"}}},"typography":{"fontSize":"16px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"white-text-color"} -->
<h3 class="wp-block-heading has-white-text-color-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:16px"><?php echo esc_html__( 'Example Street 123, NYC', 'bizcanvas' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"border":{"radius":"0%","width":"0px","style":"none"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"className":"contact-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group contact-section" style="border-style:none;border-width:0px;border-radius:0%;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color"><?php echo esc_html__( 'Your Contact Form', 'bizcanvas' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->