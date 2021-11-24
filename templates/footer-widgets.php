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

	$footer_logo_img_id = get_theme_mod( 'footer_logo_img' );
	$footer_logo_img 	= !empty($footer_logo_img_id) ? wp_get_attachment_image_src( $footer_logo_img_id, 'br_site_logo_83x38' )[0] : '';
	$footer_text 	    = br_opt( 'br_footer_text' ) == '' ? 'Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. <br> Quis ipsum suspendisse.' : br_opt( 'br_footer_text' );
	$site_url 	    	= home_url('/');
	?>
	<div class="col-xl-5 col-md-6 col-lg-5">
		<div class="footer_widget">			
			<?php
				echo '<div class="footer_logo">';
					if ( $footer_logo_img ) {
						?>
							<a href="<?=esc_url($site_url)?>"><img src="<?=esc_url($footer_logo_img)?>" alt="footer logo"></a>
						<?php
					} else {
						?>
						<a href="<?=esc_url($site_url)?>"><img src="<?=esc_url( BR_DIR_IMGS_URI . 'logo.png' )?>" alt="footer logo"></a>
						<?php
					}
				echo '</div>';

				if ( $footer_text ) {
					echo '<p class="address_text">'.wp_kses_post(nl2br( $footer_text )).'</p>';
				}

				// Social profiles
				$social_opt = br_opt('br_social_profile_toggle');
				if ( $social_opt == true ) {
					$social_items = br_opt('br_social_profiles');
					if( is_array( $social_items ) && count( $social_items ) > 0 ){
						echo '<div class="socail_links"><ul>';
							foreach ($social_items as $value) {
								echo '<li><a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr($value['social_icon']) .'"></i> </a></li>';
							}
						echo '</ul></div>';
					}          
				} 
			?>
		</div>
	</div>
	<?php
			
	// Footer widget 2
	if( is_active_sidebar( 'footer-2' ) ){
		dynamic_sidebar( 'footer-2' );
	}

	// Footer widget 3
	if( is_active_sidebar( 'footer-3' ) ){
		dynamic_sidebar( 'footer-3' );
	}

	// Footer widget 4
	if( is_active_sidebar( 'footer-4' ) ){
		dynamic_sidebar( 'footer-4' );
	}