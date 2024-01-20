<?php // 上記HTMLを参考に、パンくずリストを構築してください。 ?>
<?php if ( function_exists( 'bcn_display' ) ): ?>
    <nav class="breadCrumb" typeof="BreadcrumbList" vocab="http://schema.org/" aria-label="現在のページ">
        <?php bcn_display(); ?>
    </nav>
<?php endif; ?>
