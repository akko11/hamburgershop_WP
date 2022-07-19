<?php
function custom_theme_support(){
    add_theme_support('html5'.array(
        'sratch-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(array(
        'footer_nav'=>esc_html('footer navigation','rtbread'),
        'category_nav'=>esc_html('category navigation','rtbread')
    ));
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "responsive-embeds" );
    //add_theme_support( "custom-logo", $args );
    add_theme_support( "custom-header", $args );
    add_theme_support( "custom-background", $args );
    add_theme_support( "wp-block-styles" );
    add_theme_support( "align-wide" );   

}
add_action('after_setup_theme','custom_theme_support');

//カテゴリー説明文でHTMLタグを使う
remove_filter( 'pre_term_description', 'wp_filter_kses' );

//カテゴリー説明文から自動で付与されるpタグを除去
remove_filter( 'term_description', 'wpautop' );

//外部ファイルの読み込み
function readScript(){
    wp_enqueue_style( 'ress',get_theme_file_uri( '/css/ress.min.css' ), array(),$theme_version );
    wp_enqueue_style( 'mplus','//mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css',array(),'' );
    wp_enqueue_style( 'mplus-j','//mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css',array(),'' );
    wp_enqueue_style( 'fontsgoogleapis','//fonts.googleapis.com',array(),'' );
    wp_enqueue_style( 'fontsgoogleapis','//fonts.gstatic.com',array(),'' );
    wp_enqueue_style( 'robot','//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap',array(),'' );
    wp_enqueue_style( 'rtbread',get_theme_file_uri( '/css/style.min.css' ), array(), $theme_version );
    wp_enqueue_script( 'jquery',get_theme_file_uri( '/js/jquery-3.6.0.min.js' ),'jquery', $theme_version, true );
    wp_enqueue_script( 'script',get_theme_file_uri( '/js/script.js' ),'jquery', $theme_version, true );
}

add_action('wp_enqueue_scripts', 'readScript');

//アーカイブを有効にする
function post_has_archive($args, $post_type)
{
if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'category'; // 任意のURL
}
return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


?>
