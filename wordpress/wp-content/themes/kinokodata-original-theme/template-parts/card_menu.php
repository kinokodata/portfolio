<article class="card-Menu_Item --default h-100">
    <a href="<?php the_permalink(); ?>" class="text-reset">
        <div class="card-Menu_Item_Image">
            <?php if(has_post_thumbnail()) { ?>
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top']); ?>
            <?php } else { ?>
                <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/images/dummy-image.png" alt="" class="card-img-top">
            <?php } ?>
        </div>
        <div class="text-center">
            <p class="card-Menu_Item_Title text-center py-1">
                <?php the_title(); ?>
            </p>
        </div>
    </a>
</article>
