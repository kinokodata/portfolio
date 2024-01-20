<div class="pagination-Wrapper py-2">
    <?php // ページネーションを出力しましょう。 ?>
    <?php
    the_posts_pagination(
        array(
            'prev_text' => '<span class="pagination-Nav_Previous">前へ</span>',
            'next_text' => '<span class="pagination-Nav_Next">次へ</span>',
        )
    ); ?>
</div>
