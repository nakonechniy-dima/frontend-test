<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-site-footer">
<!--mobile buttons-->
    <div class="right-site-info-mobile">
        <button><a href="tel:+380667776666">Call Us</a></button>
        <button><a href="mailto:testdomain@mail.to">testdomain@mail.to</a></button>
        <a href="#openModal3" class="info"><button >Contact Us</button>

            <div id="openModal3" class="modalDialog3">
                <div>
                    <a href="#close3" title="Close" class="close3">X</a>
                    <p>Simple Modal Window</p>
                </div>
            </div>
    </div>

<div class="my-site-info">
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'WordPress' ); ?></a>
</div>

<!--desktop buttons-->
<div class="right-site-info">
    <p class="textright">Call Us</p>
    <p><a href="mailto:testdomain@mail.to">testdomain@mail.to</a></p>

    <a href="#openModal2" class="info"><button >Contact Us</button>

        <div id="openModal2" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close1">X</a>
                <p>Simple Modal Window</p>
            </div>
        </div>
</div>







</div>
<!-- .site-info -->


