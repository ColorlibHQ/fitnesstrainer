<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php echo fitnstr_site_icon();?>
        <?php 
            wp_head(); 
            if ( is_front_page() ) {
                $dynamic_menu_class = 'main_menu home_menu';
            } else {
                $dynamic_menu_class = 'main_menu single_page_menu';
            }
        ?>
    </head>
    <body <?php body_class(); ?>>

    <!--::header part start::-->
    <header class="<?php echo $dynamic_menu_class?>">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="main_menu_iner">
                        <div class="logo">
                            <?php echo fitnstr_theme_logo(); ?>
                        </div>
                        <span class="menu-trigger visible-xs">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <div class="off-canven-menu">
                            <span class="close-icon">
                                <i class="ti-close"></i>
                            </span>
                            <div class="canven-menu-warp">
                                <div class="canven-menu-iner">
                                    <?php
                                        if(has_nav_menu('primary-menu')) {
                                            wp_nav_menu(array(
                                                'menu'            => 'primary-menu',
                                                'theme_location'  => 'primary-menu',
                                                'menu_id'         => '',
                                                'container'       => '',
                                                'menu_class'      => '',
                                                'walker'          => new fitnstr_bootstrap_navwalker,
                                                'depth'          => 3
                                            ));
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <?php
    //Page Title Bar
    if( function_exists( 'fitnstr_page_titlebar' ) ){
	    fitnstr_page_titlebar();
    }

