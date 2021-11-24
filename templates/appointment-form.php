<?php
    $popup_form_shortcode = br_opt( 'br_popup_form_shortcode' );
?>

<div id="test-form" class="white-popup-block mfp-hide">
    <div class="popup_box ">
        <div class="popup_inner">
            <h3>Make an Appointment</h3>
            <?php echo do_shortcode( $popup_form_shortcode );?>
        </div>
    </div>
</div>