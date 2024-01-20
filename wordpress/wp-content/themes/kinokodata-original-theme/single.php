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
                                    <h2 class="post-Title mb-4 text-primary"><?php the_title(); ?></h2>
                                    <div class="post-Meta d-flex align-items-end pb-4 flex-wrap">
                                        <div class="post-Meta_Date w-100">
                                            <?php // 上記HTMLを参考に、月別アーカイブへのリンクを持った日付を表示しましょう。 ?>
                                            <a href="/blog/date/<?= get_the_date('Y/m/'); ?>" class="text-body-secondary">
                                                <time datatime="<?= get_the_date('Y-m-d') ?>">
                                                    <?= get_the_date() ?>
                                                </time>
                                            </a>
                                        </div>
                                        <div class="post-Meta_Category me-auto">
                                            <?php // 上記HTMLを参考に、カテゴリアーカイブへのリンクを持ったカテゴリを表示しましょう。 ?>
                                            <?php the_category(', '); ?>
                                        </div>
                                        <div>
                                            <?php $cafecamp_tag_list = get_the_tags(); ?>
                                            <?php if($cafecamp_tag_list) { ?>
                                                <div class="post-Meta_TagList">
                                                    <?php // 上記HTMLを参考に、タグアーカイブへのリンクを持ったタグリストを表示しましょう。 ?>
                                                    <?php $cafecamp_tag_list = get_the_tags(); ?>
                                                    <?php if($cafecamp_tag_list) { ?>
                                                        <div class="post-Meta_TagList">
                                                            <?php the_tags(
                                                                '<ul class="d-flex gap-2 list-unstyled"><li>',
                                                                '</li><li>',
                                                                '</li></ul>'
                                                            ); ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            <?php } ?>
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
                <?php
                /**
                 * 上記HTMLとテキストを参考に、
                 * 前後の記事へのリンクと一覧へのリンクボタンを作成しましょう。
                 */
                ?>
                <div class="post-Nav d-flex justify-content-between pt-5 align-items-center">
                    <div class="post-Nav_Prev col-4 text-start">
                        <?php previous_post_link('%link', '<< 前の記事'); ?>
                    </div>
                    <div class="col-4 text-center">
                        <a class="btn btn-primary" href="/blog">記事一覧</a>
                    </div>
                    <div class="post-Nav_Next col-4 text-end">
                        <?php next_post_link('%link', '次の記事 >>'); ?>
                    </div>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
    <?php get_footer(); ?>
</div> <!-- body-Wrapper -->
<?php wp_footer(); ?>
</body>
</html>

