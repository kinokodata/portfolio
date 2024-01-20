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

$menu_query_args = array(
    'post_type' => 'cafe-menu',
    'posts_per_page' => $limit,
    'orderby' => 'menu_order',
    'order' => 'ASC',
);
if (!empty($terms)) {
    $menu_query_args['tax_query'] = array(
        array(
            'taxonomy' => 'cafe-menu-category',
            'terms' => $terms,
            'field' => 'slug',
        ),
    );
}
$menu_query = new WP_Query(($menu_query_args));
?>

    <?php if($menu_query->have_posts()) { ?>
        <div class="card-Wrapper row">
            <?php while($menu_query->have_posts()) {
                $menu_query->the_post(); ?>
                <div class="card-Wrapper col-12 col-md-6 col-lg-4 mb-4 bg-white">
                    <?php if($omitted) {
                        get_template_part('template-parts/card_menu', 'omitted');
                    } else {
                        get_template_part('template-parts/card_menu', 'default');
                    } ?>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <p>該当するメニューはありませんでした。</p>
    <?php } ?>
