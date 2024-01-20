<?php
$limit = -1;
if(isset($args['limit'])) {
    $limit = $args['limit'];
}

$omitted = false;
if(isset($args['omitted']) && $args['omitted'] === 'omitted') {
    $omitted = true;
}

$terms = [];
$term_slug = '';
if(isset($args['category'])) {
    $term_slug = $args['category'];
    $terms[] = $term_slug;
}

$blog_query_args = array(
    'post_type' => 'post',
    'posts_per_page' => $limit,
    'orderby' => 'menu_order',
    'order' => 'ASC',
);

if (!empty($terms)) {
    $blog_query_args['category_name'] = $terms[0];
}
$blog_query = new WP_Query($blog_query_args);
?>

<?php if($blog_query->have_posts()) { ?>
    <div class="row">
        <?php while($blog_query->have_posts()) {
            $blog_query->the_post();
            if($omitted) {
                get_template_part('template-parts/card_post', 'omitted');
            } else { ?>
                <div class="card-Wrapper col-12 col-md-6 col-lg-4 mb-3 bg-white">
                    <?php get_template_part('template-parts/card_post', 'default'); ?>
                </div>
            <?php }
        } ?>
    </div>
<?php } else { ?>
    <p>該当するメニューはありませんでした。</p>
<?php } ?>
