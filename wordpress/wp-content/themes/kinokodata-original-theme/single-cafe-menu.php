<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_template_part('template-parts/head');?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="body-Wrapper">
    <?php get_header(); ?>
    <div class="content-Wrapper container py-2 py-lg-5">
        <div class="row px-lg-4 px-3 py-5 bg-white">
            <div class="col-lg-8 col-md-7 col-12">
                <main>
                    <?php if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); ?>
                            <article <?php post_class(); ?>>
                                <div class="content-Header">
                                    <?php if ( get_the_post_thumbnail_url() ) { ?>
                                        <div class="content-Eyecatch">
                                            <img class="img-fluid pb-4" src="<?php the_post_thumbnail_url(); ?>">
                                        </div>
                                    <?php } ?>
                                    <div class="post-Meta d-flex align-items-end flex-wrap mb-4">
                                        <h2 class="post-Title heading-underline"><?php the_title(); ?></h2>
                                        <div class="post-Meta_Category ms-auto">
                                            <?php the_category(' '); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-Body my-4">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                        <?php } ?>
                        <?php wp_reset_postdata(); ?>
                    <?php } ?>
                </main>
                <div class="post-Nav d-flex justify-content-center pt-5 align-items-center">
                    <div class="col-4 text-center">
                        <a class="btn btn-primary" href="/cafe_menu">メニューリストへ</a>
                    </div>
                </div>
            </div>
            <?php get_sidebar('cafe-menu'); ?>
        </div>
    </div>
    <?php get_footer(); ?>
</div> <!-- body-Wrapper -->
<?php wp_footer(); ?>
</body>
</html>

