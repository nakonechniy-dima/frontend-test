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

    <div class="right-site-info-mobile">
        <button><a href="tel:+380667776666">Call Us</a></button>
        <button><a href="mailto:testdomain@mail.to">testdomain@mail.to</a></button>
        <button class="mymodal-1" onclick="popupFunctions()">Contact Us
            <span class="mymodaltext-1" id="mymymodal-1">This is the simple popup</span>
        </button>
    </div>

<div class="my-site-info">
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'WordPress' ); ?></a>
</div>


<div class="right-site-info">
    <p class="textright">Call Us</p>
    <p><a href="mailto:testdomain@mail.to">testdomain@mail.to</a></p>
    <button class="mymodal" onclick="popupFunctions()">Contact Us
        <span class="mymodaltext" id="mymymodal">This is the simple popup</span>
    </button>
</div>


</div>
<!-- .site-info -->
<script>
    // When the user clicks on div, open the mymodal
    function popupFunctions() {
        var mymodal = document.getElementById("mymymodal");
        mymodal.classList.toggle("show");
    }
</script>

