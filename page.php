<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	//  Call Header
	get_header();

	/**
	 * 
	 * Hook for Blog, single, page, search, archive pages
	 * wrapper start with wrapper div, container, row.
	 *
	 * Hook br_wrp_start
	 *
	 * @Hooked br_wrp_start_cb
	 *  
	 */
	do_action( 'br_wrp_start' );
	
	/**
	 * 
	 * Hook for Blog, single, search, archive pages
	 * column start.
	 *
	 * Hook br_blog_col_start
	 *
	 * @Hooked br_blog_col_start_cb
	 *  
	 */
	do_action( 'br_blog_col_start' );

	if( have_posts() ){
		while( have_posts() ){
			the_post();
			// Post Contant
			get_template_part( 'templates/content', 'page' );
		}
		// Reset Data
		wp_reset_postdata();
	}else{
		get_template_part( 'templates/content', 'none' );
	}

	/**
	 * 
	 * Hook for Blog, single, search, archive pages
	 * column end.
	 *
	 * Hook br_blog_col_end
	 *
	 * @Hooked br_blog_col_end_cb
	 *  
	 */
	do_action( 'br_blog_col_end' );

	/**
	 * 
	 * Hook for Blog, single blog, search, archive pages sidebar.
	 *
	 * Hook br_blog_sidebar
	 *
	 * @Hooked br_blog_sidebar_cb
	 *  
	 */
	do_action( 'br_blog_sidebar' );
 	
 	/**
	 * Hook for Blog, single, page, search, archive pages
	 * wrapper end with wrapper div, container, row.
 	 *
 	 * Hook br_wrp_end
 	 * @Hooked  br_wrp_end_cb
 	 *
 	 */
 	do_action( 'br_wrp_end' );
 	
	 // Call Footer
	 get_footer();
?>