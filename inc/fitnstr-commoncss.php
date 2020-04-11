<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
} 
/**
 * @Packge     : FITNSTR
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
 
// enqueue css
function fitnstr_common_custom_css(){
    
    wp_enqueue_style( 'fitnstr-common', get_template_directory_uri().'/assets/css/dynamic.css' );
		$header_bg         		  = esc_url( get_header_image() );
		$header_bg_img 			  = !empty( $header_bg ) ? 'background-image: url('.esc_url( $header_bg ).')' : '';

		$themeColor     		  = fitnstr_opt( 'fitnstr_theme_color' );

		$headerBg          		  = fitnstr_opt( 'fitnstr_header_bg_color');
		$headerBgClrInnerPages	  = fitnstr_opt( 'fitnstr_header_bg_color_inner_pages') != '#4438b7' ? fitnstr_opt('fitnstr_header_bg_color_inner_pages') : $themeColor;
		$menuColor          	  = fitnstr_opt( 'fitnstr_header_menu_color' );
		$menuHoverColor           = fitnstr_opt( 'fitnstr_header_menu_hover_color' );
		$menuHoverShdColor        = fitnstr_opt( 'fitnstr_header_menu_hover_shade_color' ) != '#9182ce' ? fitnstr_opt('fitnstr_header_menu_hover_shade_color') : $themeColor;

		$footerwbgBorColor     	  = fitnstr_opt('fitnstr_footer_bg_color') != '#ffffff' ? fitnstr_opt('fitnstr_footer_bg_color') : '#eeeeee';
		$footerwbgColor     	  = fitnstr_opt('fitnstr_footer_bg_color');
		$footerwTextColor   	  = fitnstr_opt('fitnstr_footer_widget_text_color') != '#888888' ? fitnstr_opt('fitnstr_footer_widget_text_color') : '';
		$footerwanchorcolor 	  = fitnstr_opt('fitnstr_footer_widget_anchor_color') != '#4438b7' ? fitnstr_opt('fitnstr_footer_widget_anchor_color') : $themeColor;
		$footerwanchorhovcolor    = fitnstr_opt('fitnstr_footer_widget_anchor_hover_color') != '#4438b7' ? fitnstr_opt('fitnstr_footer_widget_anchor_hover_color') : $themeColor;

		$footerSocIconBgClr    	  = fitnstr_opt('fitnstr_footer_soc_icon_bg_color');
		$footerSocIconClr    	  = fitnstr_opt('fitnstr_footer_soc_icon_color');
		$footerSocIconHvrBgClr    = fitnstr_opt('fitnstr_footer_soc_icon_hvr_bg_color') != '#4438b7' ? fitnstr_opt('fitnstr_footer_soc_icon_hvr_bg_color') : $themeColor;
		$footerSocIconHvrClr      = fitnstr_opt('fitnstr_footer_soc_icon_hvr_color');

		

		$fofbg					  = fitnstr_opt('fitnstr_fof_bg_color');
		$foftonecolor			  = fitnstr_opt('fitnstr_fof_textone_color');
		$fofttwocolor			  = fitnstr_opt('fitnstr_fof_texttwo_color');

		$customcss ="
			.hero-banner{
				{$header_bg_img}
			}
			
			.btn_2:hover, .passion_part .single-home-passion .card .card-body a:hover, .form-contact .form-group .btn_1:hover, .wpcf7-form .form-group .btn_1:hover
			{
				border-color: {$themeColor};
			}

			.btn_2:hover, .cta_part .cta_part_iner .cta_part_text p, .about_part .about_text h5, .our_latest_work .single_work_demo h5, .blog_part .single-home-blog .card h5:hover, .blog_part .single-home-blog .card ul li i, .feature_part .single_feature_part .eci, .counter .single_counter .eci, .passion_part .single-home-passion .card h5:hover, .blog_part .single_blog .list-unstyled li:hover a, .blog_part .right_single_blog .single_blog .media-body p a, .blog_area a :hover, .form-contact .form-group .btn_1:hover i, .wpcf7-form .form-group .btn_1:hover i, .review_part .slick_right:hover, .review_part .slick_left:hover, .banner_part .banner_text h5
			{
				color: {$themeColor}
			}			

			.blog_item_date h3:hover, .blog_item_date p:hover
			{
				color: #fff;
			}

			.our_latest_work .single_work_demo .btn_3:hover, .team_member_section .single_team_member .single_team_text h3 a:hover, .team_member_section .single_team_member .team_member_social_icon a:hover, .blog_part .single-home-blog .card .card-body a:hover, .pre_icon a:hover, .next_icon a:hover, .review_part .section_tittle p, .banner-breadcrumb > ol > li.breadcrumb-item > a.bread-link:hover, .review_part .section_tittle p, .banner-breadcrumb .breadcrumb-item a:hover, .blog_details a:hover, .blog_right_sidebar .widget_categories ul li:hover, .blog_right_sidebar .widget_categories ul li:hover a, .blog_right_sidebar .widget_categories ul li a:hover, .volunteers_part .single_blog_item:hover h3, .blog_area a h2:hover, .comment-form a:hover{
				color: {$themeColor}!important;
			}

			.btn_1, .review_part .intro_video_bg .video-play-button, .review_part .owl-prev span:after, .review_part .owl-next span:after, .review_part .intro_video_bg .video-play-button:after, .review_part .intro_video_bg .video-play-button:before, .review_part .intro_video_bg .video-play-button:hover:after, .blog_item_img .blog_item_date, .button, .single_sidebar_widget .tagcloud a:hover, .blog_right_sidebar .single_sidebar_widget.widget_fitnstr_newsletter .btn, .pre_icon :after, .next_icon :after, .passion_part .skill-bar, .passion_part .skill-bar:after, .volunteers_part .single_blog_item .single_blog_img .social_icon, .form-contact .form-group .btn_1 i, .review_part .section_tittle h2:after, .gallery_part .section_tittle h2:after, .skil_part .section_tittle h2:after, .about_part .about_text h2:after, .client_part .section_tittle h2:after, .banner_part .banner_text h1:after, .skil_part .skil_text .progress-bar > .line > span, .btn_2:hover
			{
				background: {$themeColor}
			}

			.service_part .single_service_part:hover .single_service_part_iner span, .passion_part .single-home-passion .card .card-body a:hover, .blog_part .right_single_blog .single_blog .media-body:hover, .form-contact .form-group .btn_1:hover, .wpcf7-form .form-group .btn_1:hover, .f0f-content-inner .btn_1:hover
			{
				background: {$themeColor}!important;
			}

			.about_part .about_img h2:after, .copyright_part .footer-social a, .about_part .about_text .about_text_iner
			{
				border-color: {$themeColor}
			}


			.home_menu_fixed{
				background: {$headerBg}
			}

			.single_page_menu.menu_fixed
			{
				background: {$headerBgClrInnerPages};
			}
			.main_menu .off-canven-menu ul li a
			{
			   color: {$menuColor};
			}
			.main_menu .off-canven-menu ul li a:hover
			{
			   color: {$menuHoverColor};
			}
			.main_menu .off-canven-menu ul li a:after
			{
			   background-color: {$menuHoverShdColor};
			}

			.footer_part{
				background-color: {$footerwbgColor};
				border-color: {$footerwbgBorColor};
			}

			.footer-area .single-footer-widget p, .footer-area .single-footer-widget p span, .footer-area .widget_fitnstr_newsletter .input-group input, .footer_part p, .footer-area .footer_2 .social_icon a
			{
				color: {$footerwTextColor}
			}
			.footer-area .widget_fitnstr_newsletter .input-group .form-control, .footer-area .copyright_part_text {
				border-color: {$footerwTextColor}
			}

			.footer-area .widget_fitnstr_newsletter .input-group .form-control::placeholder {
				color: {$footerwTextColor};
				opacity: 1;
			}
			
			.footer-area .widget_fitnstr_newsletter .input-group .form-control:-ms-input-placeholder {
				color: {$footerwTextColor};
			}
			
			.footer-area .widget_fitnstr_newsletter .input-group .form-control::-ms-input-placeholder {
				color: {$footerwTextColor};
			}

			.footer_part p a
			{
			   color: {$footerwanchorcolor};
			}
			.footer_part p a:hover{
				color: {$footerwanchorhovcolor};
			}
			.footer-area .copyright_part_text a:hover, .footer-area .footer_2 .social_icon a:hover
			{
			   color: {$footerwanchorhovcolor}!important;
			}

			.footer_part .social_icon a
			{
				background: {$footerSocIconBgClr};
				color: {$footerSocIconClr};
			}

			.footer_part .social_icon a:hover
			{
				background: {$footerSocIconHvrBgClr};
				color: {$footerSocIconHvrClr};
			}

			.f0f-content .h1 {
				color: {$foftonecolor};
			}
			.f0f-content p {
				color: {$fofttwocolor};
			}

        ";
       
    wp_add_inline_style( 'fitnstr-common', $customcss );
    
}
add_action( 'wp_enqueue_scripts', 'fitnstr_common_custom_css', 50 );