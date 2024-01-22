<header class="header fixed-top">
    <div class="header-Inner container-fluid py-2">
        <nav class="header-Navbar navbar navbar-expand-lg py-0 text-white">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="header-Logo">
                    <a href="/" class="navbar-brand">
                        <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/images/logo.png">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon bg-light"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <?php
                    // 管理画面で設定したメニュー（`main-menu`）を表示しましょう。
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'menu_class'     => 'header-Nav_Items navbar-nav mb-2 mb-lg-0',
                            'container'      => false,
                        )
                    );
                    ?>
                </div>
            </div>
        </nav>
    </div>
</header>
<div class="container-fluid bg-light">
    <div class="container">
        <?php if(!is_front_page() && !is_404()) { ?>
            <div class="row breadcrumb-Wrapper has-small-font-size text-primary">
                <?php get_template_part('template-parts/breadcrumb'); ?>
            </div>
        <?php } ?>
    </div>
</div>