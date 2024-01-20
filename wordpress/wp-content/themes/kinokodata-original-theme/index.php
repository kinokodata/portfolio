<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_template_part('template-parts/head');?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="body-Wrapper">
    <?php get_header(); ?>
    <div class="content-Wrapper">
        <div class="content-Header">
            <div class="page-EyeCatch w-100">
                <?php if ( get_the_post_thumbnail_url() ) { ?>
                    <img class="img-fluid rounded" src="<?php the_post_thumbnail_url(); ?>">
                <?php } else { ?>
                    <img class="img-fluid rounded" src="<?= esc_url(get_template_directory_uri()) ?>/assets/images/pic_hero-default.jpg">
                <?php } ?>
                <h2 class="page-Title text-white w-100 text-center">
                    Blog
                </h2>
            </div>
        </div>
        <div class="container py-2 py-lg-5">
            <div class="row bg-white px-lg-4 px-3 py-5">
                <main class="col-lg-8 col-md-7 col-12">
                    <div class="content-Body">
                        <?php if(have_posts()) { ?>
                            <?php while(have_posts()) { ?>
                                <?php the_post(); ?>
                                <div class="card-Wrapper mb-3">
                                    <?php get_template_part('template-parts/card_post', 'landscape'); ?>
                                </div>
                            <?php } ?>
                        <?php } else { ?>
                            <p>該当する投稿はありませんでした。</p>
                        <?php } ?>
                        <?php get_template_part('template-parts/pagination'); ?>
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
