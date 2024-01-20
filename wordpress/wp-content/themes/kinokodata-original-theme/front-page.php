<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_template_part('template-parts/head');?>

<body id="frontPage" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="body-Wrapper --no-breadcrumb">
    <?php get_header(); ?>
    <div class="frontPage-MainVisual w-100">
        <img class="d-none d-lg-block" src="<?= esc_url(get_template_directory_uri()) ?>/assets/images/pic_hero-landscape.jpg">
        <img class="d-lg-none" src="<?= esc_url(get_template_directory_uri()) ?>/assets/images/pic_hero-vertical.jpg">
    </div>
    <div class="content-Wrapper container my-2 my-lg-5">
        <main class="my-5 bg-white p-5">
            <?php if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post(); ?>
                    <div <?php post_class(); ?>>
                        <div class="content-Body">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php } ?>
                <?php wp_reset_postdata(); ?>
            <?php } ?>
        </main>
    </div>
    <?php get_footer(); ?>
</div> <!-- body-Wrapper -->
<?php wp_footer(); ?>
</body>
</html>

