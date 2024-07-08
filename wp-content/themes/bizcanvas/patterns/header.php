<?php
/**
 * Title: Header
 * Slug: bizcanvas/header
 * Categories: header, bizcanvas
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<header id="sticky-header" class="wp-block-group has-secondary-background-color has-background" style="padding-top:15px;padding-right:var(--wp--preset--spacing--20);padding-bottom:15px;padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:navigation {"textColor":"white-text-color","icon":"menu","overlayBackgroundColor":"secondary","overlayTextColor":"white","style":{"spacing":{"blockGap":"35px"}}} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"dark-text-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-text-color"}}},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"8px","bottom":"8px"}},"border":{"radius":"25px"}},"className":"is-style-fill has-icon-before"} -->
<div class="wp-block-button is-style-fill has-icon-before"><a class="wp-block-button__link has-dark-text-color-color has-white-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:25px;padding-top:8px;padding-right:var(--wp--preset--spacing--30);padding-bottom:8px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Get in touch', 'bizcanvas' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->