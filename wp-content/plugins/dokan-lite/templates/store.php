<?php
/**
 * The Template for displaying all single posts.
 *
 * @package dokan
 * @package dokan - 2014 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$store_user   = dokan()->vendor->get( get_query_var( 'author' ) );
$store_info   = $store_user->get_shop_info();
$map_location = $store_user->get_location();
$layout       = get_theme_mod( 'store_layout', 'left' );

<<<<<<< Updated upstream
get_header( 'shop' );
=======
get_header();

>>>>>>> Stashed changes

if ( function_exists( 'yoast_breadcrumb' ) ) {
    yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
}
?>
<<<<<<< Updated upstream
=======

<header class="wp-block-template-part">
<div class="wp-block-cover has-aspect-ratio" style="min-height:371px;aspect-ratio:auto;min-height:unset;"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim" style="background-color:#2b1711"></span><img fetchpriority="high" decoding="async" width="2156" height="1080" class="wp-block-cover__image-background wp-image-188" alt="" src="https://infallible-nash.217-160-155-66.plesk.page/wp-content/uploads/2024/05/bg-woman.webp" data-object-fit="cover" srcset="https://infallible-nash.217-160-155-66.plesk.page/wp-content/uploads/2024/05/bg-woman.webp 2156w, https://infallible-nash.217-160-155-66.plesk.page/wp-content/uploads/2024/05/bg-woman-600x301.webp 600w, https://infallible-nash.217-160-155-66.plesk.page/wp-content/uploads/2024/05/bg-woman-300x150.webp 300w, https://infallible-nash.217-160-155-66.plesk.page/wp-content/uploads/2024/05/bg-woman-1024x513.webp 1024w, https://infallible-nash.217-160-155-66.plesk.page/wp-content/uploads/2024/05/bg-woman-768x385.webp 768w, https://infallible-nash.217-160-155-66.plesk.page/wp-content/uploads/2024/05/bg-woman-1536x769.webp 1536w, https://infallible-nash.217-160-155-66.plesk.page/wp-content/uploads/2024/05/bg-woman-2048x1026.webp 2048w, https://infallible-nash.217-160-155-66.plesk.page/wp-content/uploads/2024/05/bg-woman-1568x785.webp 1568w" sizes="(max-width: 2156px) 100vw, 2156px"><div class="wp-block-cover__inner-container is-layout-constrained wp-block-cover-is-layout-constrained">
<div class="wp-block-group alignfull has-background-color has-text-color has-link-color wp-elements-d4618711069812840c2870c056d17591 is-content-justification-space-between is-layout-flex wp-container-core-group-is-layout-4 wp-block-group-is-layout-flex" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--large, 8rem)">
<div class="wp-block-group is-layout-flex wp-block-group-is-layout-flex"><div class="wp-block-site-logo"><a href="https://infallible-nash.217-160-155-66.plesk.page/" class="custom-logo-link" rel="home" aria-current="page"><img width="171" height="48" src="https://infallible-nash.217-160-155-66.plesk.page/wp-content/uploads/2024/05/logo.png" class="custom-logo" alt="Myeart" decoding="async" srcset="https://infallible-nash.217-160-155-66.plesk.page/wp-content/uploads/2024/05/logo.png 997w, https://infallible-nash.217-160-155-66.plesk.page/wp-content/uploads/2024/05/logo-600x171.png 600w, https://infallible-nash.217-160-155-66.plesk.page/wp-content/uploads/2024/05/logo-300x85.png 300w, https://infallible-nash.217-160-155-66.plesk.page/wp-content/uploads/2024/05/logo-768x219.png 768w" sizes="(max-width: 171px) 100vw, 171px"></a></div></div>



<div class="wp-block-group is-content-justification-space-between is-layout-flex wp-container-core-group-is-layout-2 wp-block-group-is-layout-flex"><nav class="is-responsive items-justified-space-between wp-block-navigation is-content-justification-space-between is-layout-flex wp-container-core-navigation-is-layout-1 wp-block-navigation-is-layout-flex" aria-label="Navigation" data-wp-interactive="core/navigation" data-wp-context="{&quot;overlayOpenedBy&quot;:{&quot;click&quot;:false,&quot;hover&quot;:false,&quot;focus&quot;:false},&quot;type&quot;:&quot;overlay&quot;,&quot;roleAttribute&quot;:&quot;&quot;,&quot;ariaLabel&quot;:&quot;Men\u00fa&quot;}"><button aria-haspopup="dialog" aria-label="Abrir el menú" class="wp-block-navigation__responsive-container-open " data-wp-on--click="actions.openMenuOnClick" data-wp-on--keydown="actions.handleMenuKeydown"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><rect x="4" y="7.5" width="16" height="1.5"></rect><rect x="4" y="15" width="16" height="1.5"></rect></svg></button>
				<div class="wp-block-navigation__responsive-container" style="" id="modal-5" data-wp-class--has-modal-open="state.isMenuOpen" data-wp-class--is-menu-open="state.isMenuOpen" data-wp-watch="callbacks.initMenu" data-wp-on--keydown="actions.handleMenuKeydown" data-wp-on--focusout="actions.handleMenuFocusout" tabindex="-1">
					<div class="wp-block-navigation__responsive-close" tabindex="-1">
						<div class="wp-block-navigation__responsive-dialog" data-wp-bind--aria-modal="state.ariaModal" data-wp-bind--aria-label="state.ariaLabel" data-wp-bind--role="state.roleAttribute">
							<button aria-label="Cerrar el menú" class="wp-block-navigation__responsive-container-close" data-wp-on--click="actions.closeMenuOnClick"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M13 11.8l6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z"></path></svg></button>
							<div class="wp-block-navigation__responsive-container-content" data-wp-watch="callbacks.focusFirstElement" id="modal-5-content">
								<ul class="wp-block-navigation__container is-responsive items-justified-space-between wp-block-navigation"><li class=" wp-block-navigation-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="https://infallible-nash.217-160-155-66.plesk.page/index.php/tienda/"><span class="wp-block-navigation-item__label">OBRAS</span></a></li></ul>
<div style="height:100px;width:0px" aria-hidden="true" class="wp-block-spacer wp-container-content-1"></div>
<ul class="wp-block-navigation__container is-responsive items-justified-space-between wp-block-navigation"><li class=" wp-block-navigation-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="https://infallible-nash.217-160-155-66.plesk.page/index.php/store-listing"><span class="wp-block-navigation-item__label">ARTISTAS</span></a></li></ul>
<div style="height:100px;width:0px" aria-hidden="true" class="wp-block-spacer wp-container-content-2"></div>
<ul class="wp-block-navigation__container is-responsive items-justified-space-between wp-block-navigation"><li class=" wp-block-navigation-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="https://infallible-nash.217-160-155-66.plesk.page/index.php/eventos/"><span class="wp-block-navigation-item__label">EVENTOS</span></a></li></ul>
<div style="height:100px;width:0px" aria-hidden="true" class="wp-block-spacer wp-container-content-3"></div>
<ul class="wp-block-navigation__container is-responsive items-justified-space-between wp-block-navigation"><li class=" wp-block-navigation-item is-style-default wp-block-navigation-link has-small-font-size"><a class="wp-block-navigation-item__content" href="https://infallible-nash.217-160-155-66.plesk.page/index.php/mi-comunidad/"><span class="wp-block-navigation-item__label">MI COMUNIDAD</span></a></li></ul>
<div style="height:100px;width:0px" aria-hidden="true" class="wp-block-spacer wp-container-content-4"></div>
<ul class="wp-block-navigation__container is-responsive items-justified-space-between wp-block-navigation"><li class=" wp-block-navigation-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="https://infallible-nash.217-160-155-66.plesk.page/index.php/colectivos/"><span class="wp-block-navigation-item__label">COLECTIVOS</span></a></li></ul>
							</div>
						</div>
					</div>
				</div></nav></div>



<div class="wp-block-group is-content-justification-center is-layout-flex wp-container-core-group-is-layout-3 wp-block-group-is-layout-flex"><div data-block-name="woocommerce/customer-account" data-display-style="text_only" data-metadata="{&quot;name&quot;:&quot;&quot;}" class="wp-block-woocommerce-customer-account " style="">
			<a href="https://infallible-nash.217-160-155-66.plesk.page/mi-cuenta/">
				<span class="label">Mi cuenta</span>
			</a>
		</div>

<div data-block-name="woocommerce/mini-cart" class="wc-block-mini-cart wp-block-woocommerce-mini-cart" style="" data-cart-totals="{&quot;total_items&quot;:&quot;21500&quot;,&quot;total_items_tax&quot;:&quot;0&quot;,&quot;total_fees&quot;:&quot;0&quot;,&quot;total_fees_tax&quot;:&quot;0&quot;,&quot;total_discount&quot;:&quot;0&quot;,&quot;total_discount_tax&quot;:&quot;0&quot;,&quot;total_shipping&quot;:&quot;0&quot;,&quot;total_shipping_tax&quot;:&quot;0&quot;,&quot;total_price&quot;:&quot;21500&quot;,&quot;total_tax&quot;:&quot;0&quot;,&quot;tax_lines&quot;:[],&quot;currency_code&quot;:&quot;EUR&quot;,&quot;currency_symbol&quot;:&quot;€&quot;,&quot;currency_minor_unit&quot;:2,&quot;currency_decimal_separator&quot;:&quot;,&quot;,&quot;currency_thousand_separator&quot;:&quot;.&quot;,&quot;currency_prefix&quot;:&quot;&quot;,&quot;currency_suffix&quot;:&quot; €&quot;}" data-cart-items-count="2"><button class="wc-block-mini-cart__button " aria-label="2 artículos en el carrito"><span class="wc-block-mini-cart__quantity-badge"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none" width="20" height="20" class="wc-block-mini-cart__icon" aria-hidden="true" focusable="false"><circle cx="12.6667" cy="24.6667" r="2" fill="currentColor"></circle><circle cx="23.3333" cy="24.6667" r="2" fill="currentColor"></circle><path fill-rule="evenodd" clip-rule="evenodd" d="M9.28491 10.0356C9.47481 9.80216 9.75971 9.66667 10.0606 9.66667H25.3333C25.6232 9.66667 25.8989 9.79247 26.0888 10.0115C26.2787 10.2305 26.3643 10.5211 26.3233 10.8081L24.99 20.1414C24.9196 20.6341 24.4977 21 24 21H12C11.5261 21 11.1173 20.6674 11.0209 20.2034L9.08153 10.8701C9.02031 10.5755 9.09501 10.269 9.28491 10.0356ZM11.2898 11.6667L12.8136 19H23.1327L24.1803 11.6667H11.2898Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M5.66669 6.66667C5.66669 6.11438 6.1144 5.66667 6.66669 5.66667H9.33335C9.81664 5.66667 10.2308 6.01229 10.3172 6.48778L11.0445 10.4878C11.1433 11.0312 10.7829 11.5517 10.2395 11.6505C9.69614 11.7493 9.17555 11.3889 9.07676 10.8456L8.49878 7.66667H6.66669C6.1144 7.66667 5.66669 7.21895 5.66669 6.66667Z" fill="currentColor"></path></svg><span class="wc-block-mini-cart__badge">2</span></span></button></div></div>
</div>
</div></div>
</header>
>>>>>>> Stashed changes
<?php do_action( 'woocommerce_before_main_content' ); ?>

<div class="dokan-store-wrap layout-<?php echo esc_attr( $layout ); ?>">

    <?php if ( 'left' === $layout ) { ?>
        <?php
        dokan_get_template_part(
            'store', 'sidebar', [
                'store_user'   => $store_user,
                'store_info'   => $store_info,
                'map_location' => $map_location,
            ]
        );
        ?>
    <?php } ?>

    <div id="dokan-primary" class="dokan-single-store">
        <div id="dokan-content" class="store-page-wrap woocommerce" role="main">

            <?php dokan_get_template_part( 'store-header' ); ?>

            <?php do_action( 'dokan_store_profile_frame_after', $store_user->data, $store_info ); ?>

            <?php if ( have_posts() ) { ?>

                <div class="seller-items">

                    <?php woocommerce_product_loop_start(); ?>

                    <?php
                    while ( have_posts() ) :
                        the_post();
						?>

                        <?php wc_get_template_part( 'content', 'product' ); ?>

                    <?php endwhile; // end of the loop. ?>

                    <?php woocommerce_product_loop_end(); ?>

                </div>

                <?php dokan_content_nav( 'nav-below' ); ?>

            <?php } else { ?>

                <p class="dokan-info"><?php esc_html_e( 'No products were found of this vendor!', 'dokan-lite' ); ?></p>

            <?php } ?>
        </div>

    </div><!-- .dokan-single-store -->

    <?php if ( 'right' === $layout ) { ?>
        <?php
        dokan_get_template_part(
            'store', 'sidebar', [
                'store_user'   => $store_user,
                'store_info'   => $store_info,
                'map_location' => $map_location,
            ]
        );
        ?>
    <?php } ?>

</div><!-- .dokan-store-wrap -->

<?php do_action( 'woocommerce_after_main_content' ); ?>

<<<<<<< Updated upstream
<?php get_footer( 'shop' ); ?>
=======
<?php get_footer(); ?>
>>>>>>> Stashed changes
