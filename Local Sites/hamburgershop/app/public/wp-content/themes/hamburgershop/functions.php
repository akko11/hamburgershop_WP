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
    add_theme_support('menus');
    register_nav_menus(array(
        'footer_nav'=>esc_html('footer navigation','rtbread'),
        'category_nav'=>esc_html('category navigation','rtbread')
    ));
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
    //wp_enqueue_style( 'mplus','//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap',array(),'' );
    wp_enqueue_style( 'rtbread',get_theme_file_uri( '/css/style.min.css' ), array(), $theme_version );
    wp_enqueue_script( 'jquery','//code.jquery.com/jquery-3.6.0.min.js','','',true);
    wp_enqueue_script( 'script',get_theme_file_uri( '/js/script.js' ),'jquery', $theme_version, true );
    //wp_enqueue_script( 'bundle',get_theme_file_uri( '/js/bundle.js' ), 'jquery', $theme_version, true );
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

/* 検索結果のタイトルをカスタマイズ */
function wp_search_title($search_title){
    if(is_search()){
      $search_title = '「'.get_search_query().'」の検索結果';
    }
    return $search_title;
  }
  add_filter('wp_title','wp_search_title');

//ギャラリー画像の枠線非表示
add_filter( 'gallery_style', 'gallery_border_none');
function gallery_border_none($style){ 
return str_replace('border: 2px solid #cfcfcf;', 'border: none;',$style );
}
?>
