<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php 
            echo martine_site_icon();
            wp_head(); 
        ?>
    </head>
    <body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <!--::header part start::-->
    <header class="main_menu">
        <?php
        // Sub menu
        if( martine_opt( 'martine_header_top_bar_toggle' ) == 1 ){
            ?>
            <div class="sub_menu">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-md-6">
                            <div class="sub_menu_right_content">
                                <span><?php echo martine_get_menu_name( 'top-destinations' )?></span>
                                <?php
                                    if(has_nav_menu('top-destinations')) {
                                        wp_nav_menu(array(
                                            'theme_location' => 'top-destinations',
                                            'container'       => false,
                                            'items_wrap'      => '%3$s',
                                            'depth'           => 0,
                                        ));
                                    }
                                ?>
                            </div>
                        </div>
                        <?php
                        $social_profile = martine_opt( 'martine_social_profile_toggle' );
                            if( $social_profile == 1 ) {
                                $social_icons = martine_opt( 'martine_header_social' );
                                $phone_number = martine_opt( 'header_phone_number' );
                        ?> 
                        <div class="col-lg-6 col-sm-12 col-md-6">
                            <div class="sub_menu_social_icon">
                                <?php
                                    for ( $i = 0; $i < count($social_icons); $i++ ) {
                                        $social_icon = $social_icons[$i]['social_icon'];
                                        ?>
                                        <a href="<?php echo esc_url($social_icons[$i]['social_url']);?>"><i class="<?php echo esc_html( martine_social_icon_overwrite_by_flaticon( $social_icon ) );?>"></i></a>
                                    <?php
                                    }
                                ?>
                                <span><i class="flaticon-phone-call"></i><?php echo esc_html( $phone_number )?></a></span>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <div class="main_menu_iner">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <?php
                                echo martine_theme_logo( 'navbar-brand' );
                            ?>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <?php
                                if(has_nav_menu('primary-menu')) {
                                    wp_nav_menu(array(
                                        'menu'           => 'primary-menu',
                                        'theme_location' => 'primary-menu',
                                        'menu_id'        => 'menu-main-menu',
                                        'container_class'=> 'collapse navbar-collapse main-menu-item justify-content-center',
                                        'container_id'   => 'navbarSupportedContent',
                                        'menu_class'     => 'navbar-nav',
                                        'walker'         => new martine_bootstrap_navwalker,
                                        'depth'          => 3
                                    ));
                                }

                                // Header Button
                                if( martine_opt( 'martine_header_btn' ) == 1 ){
                                    $btn_lbl = !empty( martine_opt( 'header_btn_label' ) ) ? martine_opt( 'header_btn_label' ) : '';
                                    $btn_url = !empty( martine_opt( 'booking_btn_url' ) ) ? martine_opt( 'booking_btn_url' ) : '';
                                    ?>
                                        <a class="btn_1 d-none d-lg-block" href="<?php echo esc_url($btn_url)?>"><?php echo esc_html($btn_lbl)?></a>
                                    <?php 
                                }  
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <?php
    //Page Title Bar
    if( function_exists( 'martine_page_titlebar' ) ){
	    martine_page_titlebar();
    }

