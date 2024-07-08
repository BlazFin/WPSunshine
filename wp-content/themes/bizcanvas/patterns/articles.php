<?php
/**
 * Title: Articles
 * Slug: bizcanvas/articles
 * Categories: bizcanvas
 * Keywords: articles
 */
?>
<!-- wp:group {"metadata":{"name":"News"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"520px"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"textColor":"primary","fontFamily":"heading"} -->
<p class="has-text-align-center has-primary-color has-text-color has-link-color has-heading-font-family" style="font-size:18px;font-style:normal;font-weight:600"><?php echo esc_html__( ' News ', 'bizcanvas' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-text-color"}}},"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"700"}},"textColor":"dark-text-color","fontFamily":"heading"} -->
<h2 class="wp-block-heading has-text-align-center has-dark-text-color-color has-text-color has-link-color has-heading-font-family" style="font-size:42px;font-style:normal;font-weight:700"><?php echo esc_html__( 'Recent News', 'bizcanvas' ); ?> &amp; <?php echo esc_html__( 'Articles', 'bizcanvas' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":27,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"8px"}},"backgroundColor":"white","className":"wow animate__animated animate__slideInUp","layout":{"type":"constrained"}} -->
<div class="wp-block-group wow animate__animated animate__slideInUp has-white-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"0px"}}} /-->

<!-- wp:post-date {"isLink":true,"style":{"color":{"text":"#8e8e8e"},"elements":{"link":{"color":{"text":"#8e8e8e"}}},"typography":{"fontSize":"12px"}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"18px"}}} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":15} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><!-- wp:button {"textAlign":"center","backgroundColor":"black","textColor":"white","style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"10px","bottom":"10px"}},"border":{"radius":"25px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"className":"has-icon-before"} -->
<div class="wp-block-button has-icon-before"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" style="border-radius:25px;padding-top:10px;padding-right:var(--wp--preset--spacing--30);padding-bottom:10px;padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html__( ' View All Articles ', 'bizcanvas' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->