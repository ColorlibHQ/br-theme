<?php
    $btn_txt = br_opt( 'br_header_top_btn_text' );
    $btn_url = br_opt( 'br_popup_form_shortcode' );
    $url_toggler = br_opt( 'br_header_top_btn_toggler' );
    $btn_target_url = $url_toggler == 1 ? '#test-form' : $btn_url;
?>
<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo-img">
                            <?php echo br_theme_logo();?>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="menu_wrap d-none d-lg-block">
                            <div class="menu_wrap_inner d-flex align-items-center justify-content-end">
                                <div class="main-menu">
                                    <nav>
                                        <?php
                                        if(has_nav_menu('primary-menu')) {
                                            wp_nav_menu(array(
                                                'menu'            => 'primary-menu',
                                                'theme_location'  => 'primary-menu',
                                                'menu_id'         => 'navigation',
                                                'container_class' => false,
                                                'container_id'    => false,
                                                'menu_class'      => false,
                                                'depth'           => 3,
                                                'walker'          => new br_bootstrap_navwalker()
                                            ));
                                        }
                                        ?>
                                    </nav>
                                </div>
                                <div class="book_room">
                                    <?php
                                        if ( $btn_txt ) {
                                            echo '
                                            <div class="book_btn">
                                                <a class="popup-with-form" href="'.esc_url($btn_target_url).'">'.esc_html($btn_txt).'</a>
                                            </div>
                                            ';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->