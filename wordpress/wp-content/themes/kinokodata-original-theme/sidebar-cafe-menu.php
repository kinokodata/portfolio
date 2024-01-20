<?php
/**
 * WP_Queryを作成しましょう。
 * 投稿タイプ：`cafe-menu`
 * 表示件数：4件
 * 表示順：`menu_order`の昇順
 */
$recommend_query_args = array(
    'post_type' => 'cafe-menu',
    'posts_per_page' => 4,
    'orderby' => 'menu_order',
    'order' => 'ASC',
);
$recommend_query = new WP_Query($recommend_query_args);
?>

<?php
/**
 * 最初に作成したWP_Queryを使い、ループでメニューを表示しましょう。
 * 表示形式は上記のHTMLを参考にしてください。
 * また、各メニューの表示には、テンプレートパーツ `template-parts/card_menu` を使ってください。
 */
?>
<div class="col-lg-4">
    <aside class="sidebar sidebar-CafeMenu">
        <h2 class="heading-paint">おすすめメニュー</h2>
        <div>
            <?php if($recommend_query->have_posts()) { ?>
                <?php while($recommend_query->have_posts()) { ?>
                    <?php $recommend_query->the_post(); ?>
                    <div class="mb-3">
                        <?php get_template_part('template-parts/card_menu', 'default'); ?>
                    </div>
                <?php } ?>
                <?php wp_reset_postdata(); ?>
            <?php } ?>
        </div>
    </aside>
</div>

