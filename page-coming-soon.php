<?php
/**
 * Template Name: Coming SoonPage
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rosenweg
 */

get_header();
?>

<main id="primary" class="site-main container">
    <section class="logo">
        <?php $logo = get_field( 'logo' ); ?>
        <?php $size = 'full'; ?>
        <?php if ( $logo ) : ?>
        <?php echo wp_get_attachment_image( $logo, $size ); ?>
        <?php else: ?>
        <h1><?php bloginfo( 'name' ); ?></h1>
        <?php endif; ?>
    </section>

    <section class="intro">
        <?php the_field( 'intro_text' ); ?>
        <button class="open-modal btn btn__placeholder" data-open-modal>
            <span><?php esc_attr_e( 'POVPRAŠEVANJE', 'rosenweg') ?></span>
        </button>
        <dialog class="dialog" data-modal>
            <div class="dialog__inner">
                <button data-close-modal>
                    x
                </button>
                <?php echo do_shortcode('[gravityform id="1" title="true"]'); ?>
            </div>
        </dialog>
    </section>

    <section class="glide">
        <div id="gallery" class="gallery glide">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <?php $image_slider_images = get_field( 'image_slider' ); ?>
                    <?php if ( $image_slider_images ) :  ?>
                    <?php foreach ( $image_slider_images as $image_slider_image ): ?>
                    <li class="glide__slide">
                        <figure class="gallery-card" itemprop="associatedMedia" itemscope
                            itemtype="http://schema.org/ImageObject">
                            <a class="open-gallery" href="<?php echo esc_url( $image_slider_image['url'] ); ?>"
                                data-caption="<?php echo $image_slider_image['caption']; ?>" data-width="1720"
                                data-height="1140" itemprop="contentUrl">
                                <img src="<?php echo esc_url( $image_slider_image['url'] ); ?>"
                                    alt="<?php echo esc_attr( $image_slider_image['alt'] ); ?>" />
                            </a>
                        </figure>
                    </li>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" aria-label="Nazaj" data-glide-dir="<">Naprej</button>
                <button class="glide__arrow glide__arrow--right" aria-label="Naprej" data-glide-dir=">">Nazaj</button>
            </div>
        </div>

    </section>

    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <!-- Background of PhotoSwipe.
           It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>
        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">
            <!-- Container that holds slides.
              PhotoSwipe keeps only 3 of them in the DOM to save memory.
              Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <!--  Controls are self-explanatory. Order can be changed. -->
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close"
                        title="<?php _e('Zapri (Esc)', 'knjiznicatrbovlje') ?>"></button>
                    <button class="pswp__button pswp__button--zoom"
                        title="_e('Zoom in/out (Esc)', 'knjiznicatrbovlje') ?>"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left"
                    title="<?php _e('Naslednja slika', 'knjiznicatrbovlje') ?>"
                    aria-label="<?php _e('Naslednja slika', 'knjiznicatrbovlje') ?>">
                </button>
                <button class="pswp__button pswp__button--arrow--right"
                    title="<?php _e('Prejšnja slika', 'knjiznicatrbovlje') ?>"
                    aria-label="<?php _e('Prejšnja slika', 'knjiznicatrbovlje') ?>">
                </button>
                <div class=" pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>

</main><!-- #main -->

<?php

get_footer();
