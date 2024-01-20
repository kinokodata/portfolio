<aside class="sidebar col-lg-4 col-md-5 col-12">
    <?php // `sidebar-archive` ウィジェットを呼び出しましょう。 ?>
    <?php if ( is_active_sidebar( 'sidebar-archive' ) ) { ?>
        <div class="sidebar-Inner">
            <?php dynamic_sidebar( 'sidebar-archive' ); ?>
        </div>
    <?php } ?>
</aside>
