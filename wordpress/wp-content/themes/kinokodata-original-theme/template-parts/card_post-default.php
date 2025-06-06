<article class="card-Post_Item --default card h-100">
    <a href="<?php the_permalink(); ?>" class="text-reset">
        <div class="card-Post_Item_Image">
            <?php // アイキャッチが登録されていればその画像を、登録されていなければ `dummy-image.png` を表示しましょう。 ?>
            <?php if(has_post_thumbnail()) { ?>
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top']); ?>
            <?php } else { ?>
                <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/images/dummy-image.png" alt="" class="card-img-top">
            <?php } ?>
        </div>
        <div class="card-body">
            <h5 class="card-title post-Title"><?php the_title(); ?></h5>
            <div class="card-text card-Post_Item_Meta d-flex gap-3 my-2 align-items-end">
                <div>
                    <?php // 記事にカテゴリがあればカテゴリを出力しましょう。 ?>
                    <?php $cafecamp_category_list = get_the_category(); ?>
                    <?php if($cafecamp_category_list) { ?>
                        <span class="badge rounded-pill text-white bg-primary">
                            <?= esc_html($cafecamp_category_list[0]->name) ?>
                        </span>
                    <?php } ?>
                </div>
                <div>
                    <small class="text-body-secondary">
                        <?php // 記事の日付を出力しましょう。 ?>
                        <time datetime="<?= get_the_date('Y-m-d') ?>">
                            <?= get_the_date() ?>
                        </time>
                    </small>
                </div>
            </div>
            <div class="card-text">
                <?php the_excerpt(); ?>
            </div>
            <?php // 記事にタグがあればタグを表示しましょう。 ?>
            <?php $cafecamp_tag_list = get_the_tags(); ?>
            <?php if($cafecamp_tag_list) { ?>
                <div class="card-text card-Post_Item_Tag">
                    <ul class="d-flex gap-3 list-unstyled">
                        <?php foreach($cafecamp_tag_list as $tag) { ?>
                            <li><span class="badge rounded-pill text-white bg-secondary"><?= $tag->name ?></span></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </a>
</article>
