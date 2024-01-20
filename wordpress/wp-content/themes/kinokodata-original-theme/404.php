<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_template_part('template-parts/head');?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="body-Wrapper --no-breadcrumb">
    <?php get_header(); ?>
    <div class="content-Wrapper">
        <div class="content-Header">
            <div class="page-EyeCatch w-100">
                <img class="img-fluid rounded" src="<?= esc_url(get_template_directory_uri()) ?>/assets/images/pic_hero-landscape.png">
                <h2 class="page-Title text-white w-100 text-center">
                    ページが見つかりません
                </h2>
            </div>
        </div>
        <div class="container py-2 py-lg-5">
            <div class="row bg-white px-lg-4 px-3 py-5">
                <main class="col-lg-8 col-md-7 col-12">
                    <div class="content-Body">
                        <p>お探しのページは、移動もしくは削除された可能性があります。<br>
                            サイト内検索、もしくは<a href="<?php echo esc_url( home_url() ); ?>">トップページ</a>よりお探しください。</p>
                        <?php get_search_form(); ?>
                    </div>
                </main>
                <?php get_sidebar() ?>
            </div>
        </div>
        <?php get_footer(); ?>
    </div> <!-- body-Wrapper -->
    <?php wp_footer(); ?>
</body>
</html>
