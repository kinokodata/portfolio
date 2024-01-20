<footer role="contentinfo" class="footer">
    <div class="container-fluid bg-primary-subtle text-primary">
        <div class="footer-Inner container py-5">
            <div class="row">
                <div class="col-12 col-md-4 m-auto text-center">
                    <div>
                        <div class="footer-SiteLogo">
                            <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/images/logo.png" class="img-fluid" width="200">
                        </div>
                        <div class="footer-Tagline">
                            <p>
                                <?php // 以下の「サイトのキャッチフレーズ」の部分に管理画面で設定したサイトのキャッチフレーズが表示されるようにしましょう。 ?>
                                <?php bloginfo('description'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 m-auto">
                    <div class="d-none d-md-block">
                        <?php
                        // 管理画面で設定したメニュー（`main-menu`）を表示しましょう。
                        // 表示形式は上記HTMLを参考にしてください。
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'menu_class'     => 'footer-Nav_Items',
                                'container'      => false,
                            )
                        );
                        ?>
                    </div>
                    <div class="mx-md-auto">
                        <?php // ウィジェット（`footer-social-area`）を呼び出しましょう。 ?>
                        <?php if ( is_active_sidebar( 'footer-social-area' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-social-area' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary text-center py-2">
        <span>
            <small class="text-white">&copy; 2024 <?php bloginfo('name'); ?> all rights reserved.</small>
        </span>
    </div>
</footer>
