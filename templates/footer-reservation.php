<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Br
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$br_reservation_title     = !empty( br_opt( 'br_reservation_title' ) ) ? br_opt( 'br_reservation_title' ) : '';
	$br_reservation_sub_title = !empty( br_opt( 'br_reservation_sub_title' ) ) ? br_opt( 'br_reservation_sub_title' ) : '';
	$br_reservation_btn_text  = !empty( br_opt( 'br_reservation_btn_text' ) ) ? br_opt( 'br_reservation_btn_text' ) : '';
	$br_reservation_btn_url	  = !empty( br_opt( 'br_reservation_btn_url' ) ) ? br_opt( 'br_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $br_reservation_title )?></h3>
			<p><?php echo esc_html( $br_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $br_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $br_reservation_btn_text )?></a>
		</div>
	</div>