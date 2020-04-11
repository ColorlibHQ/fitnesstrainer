<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package
 */

    $url = 'https://colorlib.com/';
    $copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'fitnstr' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
    $copyRight = !empty( fitnstr_opt( 'fitnstr_footer_copyright_text' ) ) ? fitnstr_opt( 'fitnstr_footer_copyright_text' ) : $copyText;
    $social_opt = fitnstr_opt('fitnstr_social_profile_toggle');
    $footer_class = $social_opt == 1 ? 'footer_part' : 'footer_part no_social';
    ?>

    <!--::footer part start::-->
    <footer class="<?php echo esc_attr($footer_class)?>">
        <div class="container">
            <div class="row justigy-content-center">
                <div class="col-lg-12">
                    <div class="social_icon">
                        <?php
                            if ( $social_opt == true ) {
                                $social_items = fitnstr_opt('fitnstr_header_social');
                                if( is_array( $social_items ) && count( $social_items ) > 0 ){
                                    foreach ($social_items as $value) {
                                        echo '<a href="'. $value['social_url'] .'"><i class="'. $value['social_icon'] .'"></i></a>';
                                    }
                                }          
                            }          
                
                        ?>
                    </div>
                    <p class="footer-text"><?php echo wp_kses_post( $copyRight ); ?></p>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer part end::-->

    <?php wp_footer(); ?>
    </body>
</html>