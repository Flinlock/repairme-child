<?php
/**
 * Header: Homepage
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! function_exists( 'repairme_header1' ) ) :

	function repairme_header1( $theme_options ) {

		$logo_class            = 'logo';
		$header_helper_classes = '';

		// Header Logo/Text
		if ( get_theme_mod( 'header_use_logo' ) ) {
			$logo_class .= ' logo-use-image';
			$header_helper_classes .= ' header-logo-image';
		} else {
			$logo_class .= ' logo-use-text';
			$header_helper_classes .= ' header-logo-text';
		}

		// Header Row1
		if ( repairme_get_customizer_option( 'hide_header_contacts' ) != '' ) {
			$header_helper_classes .= ' no-header-contacts';
		}

		?>
        <div class="header-wrapper" id="header-wrapper">
            <div class="header header__style1 <?php echo esc_attr( $header_helper_classes ); ?>">

				<?php

				if ( repairme_get_customizer_option( 'hide_header_contacts' ) == '' ) {

					?>

                    <div class="header__row1">
                        <div class="container">
                            <div class="row">

								<?php
								// RTL
								if ( is_rtl() ) {

									$header_top_line2 = 'header-top__line2 col-lg-9 col-md-10 col-sm-10 col-lg-push-3 col-md-push-2 col-sm-push-2';
									$header_top_line1 = 'header-top__line1 col-lg-3 col-md-2 col-sm-2 col-lg-pull-9 col-md-pull-10 col-sm-pull-10';

									// LTR
								} else {

									$header_top_line2 = 'header-top__line2 col-lg-9 col-md-10 col-sm-10';
									$header_top_line1 = 'header-top__line1 col-lg-3 col-md-2 col-sm-2';

								} // LTR/RTL ?>

                                <div class="<?php echo esc_attr( $header_top_line2 ) ?>">

                                    <div class="header__top-menu">
                                        <div class="top-menu">
                                            <ul>
												<?php echo '<li><i class="fa fa-map-marker"></i>' . wp_kses_post( repairme_replace_str( repairme_get_customizer_option( 'contact_block_address' ) ) ) . '</li>'; ?>
												<?php echo '<li><i class="fa fa-mobile"></i>' . wp_kses_post( repairme_replace_str( repairme_get_customizer_option( 'contact_block_phone' ) ) ) . '</li>'; ?>
                                            </ul>
                                        </div>
                                    </div><!-- .header__top-menu -->
                                </div>
					
                                <div class="<?php echo esc_attr( $header_top_line1 ) ?>">
                                    <a href="<?php echo wp_kses_post( repairme_replace_str( repairme_get_customizer_option( 'contact_block_btn_link' ) ) ); ?>"
                                       class="header__contact-item-btn">
                                        <i class="fa fa-phone"></i>
                                        <span class="header__contact-item-btn-text"><?php echo wp_kses_post( repairme_replace_str( repairme_get_customizer_option( 'contact_block_btn_text' ) ) ); ?></span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

					<?php

				} // hide_header_contacts

				?>

                <div class="header__row2 header-sticky">	
                    <div class="container">
                        <div class="row">

							<?php
							// RTL
							if ( is_rtl() ) {

								$header_logo_class    = 'header__logo col-lg-2 col-md-3 col-sm-6 col-xs-12 col-lg-push-10 col-md-push-10 col-sm-push-6 col-xs-push-0';
								$header_menu_class    = 'header__menu col-lg-10 col-md-9 hidden-sm hidden-xs col-lg-pull-2 col-md-pull-2 col-sm-pull-6 col-xs-pull-0';
								$header_social_class  = 'header__socials ';
								$header_buttons_class = 'header__buttons col-sm-6 col-xs-12 only-mobile-button col-sm-pull-6 col-xs-pull-0';

                            // LTR
							} else {

                                //
								if ( repairme_get_customizer_option( 'hide_header_social' ) == '' ) {

									$header_logo_class    = 'header__logo col-lg-2 col-md-3 col-sm-6 col-xs-12';
									$header_menu_class    = 'header__menu col-lg-8 col-md-6 hidden-sm hidden-xs';
									$header_social_class  = 'header__socials col-lg-2 col-md-3 col-sm-5 hidden-xs';
									$header_buttons_class = 'header__buttons col-sm-1 col-xs-12 only-mobile-button';

                                } else {

									$header_logo_class    = 'header__logo col-lg-2 col-md-3 col-sm-6 col-xs-12';
									$header_menu_class    = 'header__menu col-lg-10 col-md-9 hidden-sm hidden-xs';
									$header_social_class  = 'header__socials hidden-lg hidden-md hidden-sm hidden-xs';
									$header_buttons_class = 'header__buttons col-sm-6 col-xs-12 only-mobile-button';

                                }

							} // LTR/RTL ?>

                            <div class="<?php echo esc_attr( $header_logo_class ); ?>">
                                <div class="header__logo-inner">
                                    <div class="logo-div <?php echo esc_attr( $logo_class ); ?>">
										<?php if ( get_theme_mod( 'header_use_logo' ) ) { ?>
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                                <img alt="Logo" class="logo logo_big"
                                                     src="<?php echo apply_filters( 'repairme_header_logo_big', $theme_options[ 'header_logo_big' ] ); ?>"/>
                                            </a>
										<?php } else { ?>
                                            <div class="text-logo">
                                                <div class="blogname">
                                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                                       rel="home"><?php
														$site_name = apply_filters( "repairme_logo_site_name", get_bloginfo( 'name', 'display' ) );
														if ( ! empty( $site_name ) ) {
															echo repairme_logo_highlight( esc_attr( $site_name ) );
														} ?>
                                                    </a>
                                                </div>
                                                <div class="blogdescr">
                                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                                       rel="home"><?php
														$site_description = apply_filters( "repairme_logo_site_name", get_bloginfo( 'description', 'display' ) );
														if ( ! empty( $site_description ) ) {
															echo repairme_replace_str_blogdescr( esc_attr( $site_description ) );
														} ?>
                                                    </a>
                                                </div>
                                            </div>
										<?php } ?>
                                    </div><!-- .logo-->
                                </div><!-- .header__logo-inner -->
                            </div><!-- .header__logo -->

                            <div class="<?php echo esc_attr( $header_menu_class ); ?>">
                                <div class="header__menu-inner">
                                    <div class="menu-strip">
                                        <nav class="main-nav"><?php
											if ( has_nav_menu( 'primary' ) ) {
												wp_nav_menu( array (
													'container'      => false,
													'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
													'theme_location' => 'primary',
													'depth'          => 0
												) );
											} elseif ( wp_get_nav_menu_object( "Main menu" ) ) {
												wp_nav_menu( array (
													'container'  => false,
													'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
													'menu'       => 'Main menu',
													'depth'      => 0
												) );
											} else { ?>
                                                <div class="create-menu"><?php esc_html_e( 'You don\'t have a menu. Please create one ', 'repairme' ); ?>
                                                <strong><a href="<?php echo esc_url( home_url( '/' ) ) ?>wp-admin/nav-menus.php"><?php esc_html_e( 'HERE', 'repairme' ) ?></a></strong>
                                                </div><?php
											} ?>
                                        </nav>
                                    </div><!-- .menu-strip -->
                                </div><!-- .header__menu-inner -->
                            </div><!-- .header__menu -->

	                        <?php if ( repairme_get_customizer_option( 'hide_header_social' ) == '' ) { ?>
                                <div class="<?php echo esc_attr( $header_social_class ); ?>">
			                        <?php echo repairme_header_social_links(); ?>
								</div>
	                        <?php } ?>

                            <div class="<?php echo esc_attr( $header_buttons_class ); ?>">
                                <div class="header__buttons-wrapper">
                                    <div class="header__buttons-inner">
                                        <ul id="header__buttons-menu" class="header-buttons-menu">
                                            <li class="button-li button-li--mobile-menu">
                                                <div class="header-button header-button__wrapper">
                                                    <span class="header-button header-button__menu nav-button"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- .header__buttons-inner -->
                                </div><!-- .header__buttons-wrapper -->
                            </div><!-- .header__buttons -->
							<div>
					  <a class="phone-header" href="tel:9705688478">
						<img class="phone-img" src="https://edgecomputerrepair.com/wp-content/uploads/headerPhone-2.png">
					  </a>
					</div>		
                        </div>
                    </div>
                </div>
					
            </div>
        </div>

	<?php }

endif;