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

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'br_preloader', 'br_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'br_header', 'br_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'br_footer', 'br_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'br_wrp_start', 'br_wrp_start_cb', 10 );
	add_action( 'br_wrp_end', 'br_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'br_blog_col_start', 'br_blog_col_start_cb', 10 );
	add_action( 'br_blog_col_end', 'br_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'br_blog_posts_thumb', 'br_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'br_blog_details_wrap_start', 'br_blog_details_wrap_start_cb', 10 );
	add_action( 'br_blog_details_wrap_end', 'br_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'br_blog_posts_title', 'br_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'br_blog_posts_meta', 'br_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'br_blog_posts_excerpt', 'br_blog_posts_excerpt_cb', 10 );
	// add_action( 'br_blog_posts_excerpt', 'br_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'br_blog_posts_info_link', 'br_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'br_blog_posts_content', 'br_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'br_blog_posts_share', 'br_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'br_blog_sidebar', 'br_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'br_blog_single_meta', 'br_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'br_page_content', 'br_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'br_fof', 'br_fof_cb', 10 );

	

?>