<?php
/**
 * テーマのセットアップ
 */
function kinokodata_theme_setup() {
    //固定ページで抜粋を使えるようにする
    add_post_type_support('page', 'excerpt');

    // タイトルタグ（<title>）を自動で出力する
    add_theme_support( 'title-tag' );

    // アイキャッチ画像を有効化する
    add_theme_support( 'post-thumbnails' );

    // HTML5の検索フォームを有効化する
    add_theme_support( 'html5', array( 'search-form' ) );

    // カスタムメニューを有効化する
    register_nav_menu( 'main-menu', 'メインメニュー' );
}
add_action( 'after_setup_theme', 'kinokodata_theme_setup' );

/**
 * 外部ファイルの読み込み
 */
function kinokodata_enqueue_scripts() {
    // Googleフォントを読み込む
    wp_enqueue_style(
        'googlefonts',
        'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;500;700&display=swap',
        array(),
        '1.0.0'
    );

    // Bootstrapのjsバンドルを読み込む
    wp_enqueue_script(
        'kinokodata-bootstrap',
        get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.bundle.min.js',
        array(),
        '1.0.0',
        true
    );

    // テーマ独自のCSSファイル（`assets/css/style.css`）を読み込む
    wp_enqueue_style(
        'kinokodata-theme-styles',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'kinokodata_enqueue_scripts' );

/**
 * ウィジェットエリアの有効化
 */
function kinokodata_widgets_init() {
    // ウィジェット（投稿サイドバー）
    register_sidebar(
        array(
            'name'          => '投稿サイドバー',
            'id'            => 'sidebar-archive',
            'description'   => 'アーカイブアクセスのサイドバー',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
        )
    );

    // ウィジェット（フッタ用ソーシャルアイコンエリア `footer-social-area` ）を追加しましょう。
    register_sidebar(
        array(
            'name'          => 'ソーシャルアイコン',
            'id'            => 'footer-social-area',
            'description'   => 'フッター用ソーシャルアイコンエリア',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
        )
    );
}
add_action( 'widgets_init', 'kinokodata_widgets_init' );

/**
 * ブロックエディタ対応
 */
function kinokodata_block_setup() {
    // ブロックエディタ用CSSを有効化するコードを書きましょう。
    add_theme_support( 'wp-block-styles' );

    // 埋め込み要素にレスポンシブスタイルを適用するコードを書きましょう。
    add_theme_support( 'responsive-embeds' );

    // 幅広、全幅のスタイルに対応するコードを書きましょう。
    add_theme_support( 'align-wide' );

    // ブロックエディタのスタイルを有効にする
    add_theme_support( 'editor-styles' );

    // ブロックエディタ用CSS（）を読み込むコードを書きましょう。
    add_editor_style( 'assets/css/editor-styles.css' );

    // ブロックエディタのカラーパレットを設定するコードを書きましょう。
    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name'  => '白',
                'slug'  => 'white',
                'color' => '#FFF',
            ),
            array(
                'name'  => '白-透明80',
                'slug'  => 'light-subtle',
                'color' => 'rgba(255, 255, 255, 0.8)',
            ),
            array(
                'name'  => 'ライトグレー',
                'slug'  => 'light',
                'color' => '#f0f0f0',
            ),
            array(
                'name'  => 'ベース',
                'slug'  => 'primary',
                'color' => '#414141',
            ),
            array(
                'name'  => 'ベース2',
                'slug'  => 'dark',
                'color' => '#9a9a9a',
            ),
            array(
                'name'  => 'ベース-透明80',
                'slug'  => 'primary-subtle',
                'color' => 'rgba(65, 65, 65, 0.8)',
            ),
            array(
                'name'  => 'アクセント',
                'slug'  => 'secondary',
                'color' => '#ff5c16',
            ),
            array(
                'name'  => 'アクセント-2',
                'slug'  => 'secondary-subtle',
                'color' => '#ffe7db',
            ),
        )
    );

    // ブロックエディタのフォントサイズを設定するコードを書きましょう。
    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name' => '極小',
                'size' => 12,
                'slug' => 'x-small',
            ),
            array(
                'name' => '小',
                'size' => 14,
                'slug' => 'small',
            ),
            array(
                'name' => '標準',
                'size' => 16,
                'slug' => 'normal',
            ),
            array(
                'name' => 'h5',
                'size' => 20,
                'slug' => 'h-5',
            ),
            array(
                'name' => 'h4',
                'size' => 24,
                'slug' => 'h-4',
            ),
            array(
                'name' => 'h3',
                'size' => 28,
                'slug' => 'h-3',
            ),
            array(
                'name' => 'h2',
                'size' => 32,
                'slug' => 'h-2',
            ),
            array(
                'name' => 'h1',
                'size' => 40,
                'slug' => 'h-1',
            ),
            array(
                'name' => '特大',
                'size' => 64,
                'slug' => 'large',
            ),
            array(
                'name' => '極大',
                'size' => 80,
                'slug' => 'x-large',
            ),
        )
    );
}
add_action( 'after_setup_theme', 'kinokodata_block_setup' );

/**
 * 独自のブロックスタイル追加
 */
function kinokodata_block_style_setup() {
    // 見出しにバリエーションを追加する
    // ソースを伸ばした背景
    register_block_style(
        'core/heading',
        array(
            'name'  => 'heading-paint',
            'label' => 'ソースを伸ばした背景',
        )
    );

    // 見出しのバリエーション（左側に縦ライン）を追加しましょう。
    // nameには `heading-border-left` と設定してください。
    register_block_style(
        'core/heading',
        array(
            'name'  => 'heading-border-left',
            'label' => '左側に縦ライン',
        )
    );

    // 見出しのバリエーション（下線）を追加しましょう。
    // nameには `heading-underline` と設定してください。
    register_block_style(
        'core/heading',
        array(
            'name'  => 'heading-underline',
            'label' => '下線',
        )
    );
}
// アクションフックに `kinokodata_block_style_setup` を追加するコードを書きましょう。
// どのアクションフックを使うかはテキストを参考にしてください。
add_action('after_setup_theme', 'kinokodata_block_style_setup');

/**
 * ブロックパターンの削除
 */
function kinokodata_remove_block_patterns() {
    // コアのパターンを全部削除する.
    remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'kinokodata_remove_block_patterns' );

/**
 * 独自のブロックパターンの追加
 */
function kinokodata_register_block_patterns() {
    // 独自のパターンを追加する.
    register_block_pattern(
        'kinokodata/menu-description',
        array(
            'title'         => 'メニュー説明',
            'categories'    => array( 'text' ),
            'content'       => "<!-- wp:paragraph -->\n<p>バケットサンドは、サクサクとしたフレンチバゲットに、新鮮な具材を詰め込んだ贅沢なサンドイッチ。ハム、チーズ、生野菜が絶妙なバランスで調和し、特製ソースが一層の味わいを引き立てます。手軽でボリュームたっぷりのランチや軽食に最適です。</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:spacer {\"height\":\"var:preset|spacing|50\"} -->\n<div style=\"height:var(--wp--preset--spacing--50)\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:table {\"className\":\"is-style-stripes\"} -->\n<figure class=\"wp-block-table is-style-stripes\"><table><thead><tr><th>成分</th><th>原材料</th></tr></thead><tbody><tr><td>バゲット</td><td>小麦粉、水、イースト、塩</td></tr><tr><td>具材</td><td>ハム、チーズ、トマト、レタス、マヨネーズ</td></tr><tr><td>特製ソース</td><td>マスタード、ハチミツ、オリーブオイル</td></tr></tbody></table></figure>\n<!-- /wp:table -->\n\n<!-- wp:spacer {\"height\":\"var:preset|spacing|60\"} -->\n<div style=\"height:var(--wp--preset--spacing--60)\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:heading {\"level\":3,\"className\":\"is-style-heading-border-left\"} -->\n<h3 class=\"wp-block-heading is-style-heading-border-left\">おすすめメッセージ</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>バケットサンドはサクサクのバゲットとハム、チーズの美味しいハーモニー。特製ソースがさらなる風味を加え、食欲を満たします。ぜひ、ランチやカフェタイムにお楽しみください。</p>\n<!-- /wp:paragraph -->",
            'description'   => 'メニュー説明用のオリジナルブロックパターンです',
        )
    );
}
add_action( 'init', 'kinokodata_register_block_patterns' );

// 抜粋の最後に表示される　`[...]`　マークを　`...続きを読む`　に変えるフィルターフックを追加しましょう。
function kinokodata_change_excerpt_more_link() {
    // 元のHTML（ `$html` ）を書き換えて　`<span class="excerpt-ReadMore"> ...続きを読む</span>`　にする
    $html = '<span class="excerpt-ReadMore"> ...続きを読む</span>';

    // 書き換えた `$html` を返す
    return $html;

}
// フィルターフックに `kinokodata_change_excerpt_more_link` を追加するコードを書きましょう。
// どのフィルターフックを使うかは、ご自身で調べてみてください。
add_filter('excerpt_more', 'kinokodata_change_excerpt_more_link');

/**
 * メニュー一覧を表示するショートコード
 * 呼び出し方：[kinokodata_menu_list limit=3]
 * @param: limit：表示する記事数 （デフォルト -1）
 * @param: category：カテゴリ絞り込み （デフォルト 全て）
 */
function kinokodata_menu_shortcode($attr): bool|string {
    ob_start();
    get_template_part('template-parts/menu-list', null, $attr);
    return ob_get_clean();
}
add_shortcode('kinokodata_menu_list', 'kinokodata_menu_shortcode');

/**
 * 最新記事を表示するショートコード
 * 呼び出し方：[kinokodata_blog_list limit=3 category=lunch]
 * @param: limit：表示する記事数 （デフォルト -1）
 * @param: category：カテゴリ絞り込み （デフォルト 全て）
 * @param: omitted：省略した表示（デフォルト 省略しない）
 */
function kinokodata_blog_shortcode($attr) {
    // 上記コメントの仕様に則ったショートコードを追加するコードを書きましょう。
    ob_start();
    get_template_part('template-parts/blog-list', null, $attr);
    return ob_get_clean();
}
// ショートコードに `kinokodata_blog_shortcode` を追加するコードを書きましょう。
add_shortcode('kinokodata_blog_list', 'kinokodata_blog_shortcode');
