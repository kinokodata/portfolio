<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_template_part('template-parts/head');?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="body-Wrapper">
    <?php get_header(); ?>
    <div class="content-Wrapper">
            <main>
                <?php if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                        <article <?php post_class(); ?>>
                            <div class="content-Header">
                                <div class="page-EyeCatch w-100">
                                    <?php if ( get_the_post_thumbnail_url() ) { ?>
                                        <img class="img-fluid rounded" src="<?php the_post_thumbnail_url(); ?>">
                                    <?php } else { ?>
                                        <img class="img-fluid rounded" src="<?= esc_url(get_template_directory_uri()) ?>/assets/images/pic_hero-default.jpg">
                                    <?php } ?>
                                    <h2 class="page-Title text-white w-100 text-center"><?php the_title(); ?></h2>
                                </div>
                            </div>
                            <div class="content-Body container bg-white py-5 my-2 my-lg-5">
                                <?php the_content(); ?>
                            </div>
                        </article>
                    <?php } ?>
                    <?php wp_reset_postdata(); ?>
                <?php } ?>
            </main>
        </div>
    </div>
    <?php get_footer(); ?>
</div> <!-- body-Wrapper -->
<?php wp_footer(); ?>
</body>
</html>

