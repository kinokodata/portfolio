<article class="dailyLunch">
    <a href="<?php the_permalink(); ?>" class="text-reset">
        <div class="dailyLunch_Image text-center">
            <?php // アイキャッチが登録されていればその画像を、登録されていなければ `dummy-image.png` を表示しましょう。 ?>
            <?php if(has_post_thumbnail()) { ?>
                <?php the_post_thumbnail('post-thumbnail'); ?>
            <?php } else { ?>
                <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/images/dummy-image.png" alt="">
            <?php } ?>
        </div>
        <p class="dailyLunch_Title text-center text-decoration-none py-1">
            <?php the_title(); ?>
        </p>
    </a>
</article>
